<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('image');
    }

    public function resizeImage()
    {
        return view('resizeImage');
    }

    // public function create()
    // {
    //     $image = ImageModel::latest()->first();
    //     return view('createimage', compact('image'));
    //     // return view('createimage');
    // }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     
        $destinationPath = public_path('/thumbnail');
        $sidebarPath = public_path('/upload/sidebar');
        $img = Image::make($image->getRealPath());

        $img->resize(200, 200, function ($constraint) {
            // $constraint->aspectRatio();
        })->save($sidebarPath.'/'.$input['imagename']);

        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

       
   
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
   
        // $this->postImage->add($input);
   
        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }

    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
    //     ]);

    //     $originalImage= $request->file('filename');
    //     $thumbnailImage = Image::make($originalImage);
    //     $thumbnailPath = public_path().'/thumbnail/';
    //     $originalPath = public_path().'/images/';
    //     $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
    //     $thumbnailImage->resize(150,150);
    //     $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

    //     $imagemodel= new ImageModel();
    //     $imagemodel->filename=time().$originalImage->getClientOriginalName();
    //     $imagemodel->save();

    //     return back()->with('success', 'Your images has been successfully Upload');

    // }

    // public function store(Request $request)
    // {
    //     if ($request->hasFile('profile_image')) {
     
    //         foreach($request->file('profile_image') as $file){
     
    //             //get filename with extension
    //             $filenamewithextension = $file->getClientOriginalName();
     
    //             //get filename without extension
    //             $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
    //             //get file extension
    //             $extension = $file->getClientOriginalExtension();
     
    //             //filename to store
    //             $filenametostore = $filename.'_'.uniqid().'.'.$extension;
     
    //             Storage::put('public/profile_images/'. $filenametostore, fopen($file, 'r+'));
    //             Storage::put('public/profile_images/thumbnail/'. $filenametostore, fopen($file, 'r+'));
     
    //             //Resize image here
    //             $thumbnailpath = public_path('storage/profile_images/thumbnail/'.$filenametostore);
    //             // $img = Image::make($thumbnailpath)->resize(100, 100)->save($thumbnailpath);
    //             $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
    //                 $constraint->aspectRatio();
    //             });
    //             $img->save($thumbnailpath);
    //         }
     
    //         return redirect('imagesz')->with('status', "Image uploaded successfully.");
    //     }
    // }
   
}