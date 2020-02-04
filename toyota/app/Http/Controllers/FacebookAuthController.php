<?php
 
namespace App\Http\Controllers;
use Auth;
use App\User;
use Socialite;
use File; 

class FacebookAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
 
    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
 
        $authUser = $this->findOrCreateUser($user);
        
        // Chỗ này để check xem nó có chạy hay không
        // dd($user);
 
        Auth::login($authUser, true);
 
        // return redirect()->route('cp/product/list');
        Session()->put('UserLogin',$user->email);
        return redirect()->to('cp/product/list');
    }
 
    private function findOrCreateUser($facebookUser){
        $authUser = User::where('provider_id', $facebookUser->id)->first();
 
        if($authUser){
            return $authUser;
        }
        // $avatarUrl = $this->graphUrl.'/'.$this->version.'/'.$user['id'].'/picture?type=large';
        // $avatarName = $facebookUser->id.'_avatar'.time().'.'.request()->avatar;
        // $img = file_get_contents('https://graph.facebook.com/'.$facebookUser->getId().'/picture?type=large');
		// $file = public_path() . '/upload/profile/'.$facebookUser->getId() .'.jpg';
		// file_put_contents($file, $img);

        // $fileContents = file_get_contents($facebookUser->getAvatar().'/picture?type=large');
        $fileContents = file_get_contents('https://graph.facebook.com/'.$facebookUser->getId().'/picture?type=large');
        File::put(public_path() . '/upload/profile/' . $facebookUser->getId() . ".jpg", $fileContents);
        $fileContents = file_get_contents('https://graph.facebook.com/'.$facebookUser->getId().'/picture?type=normal');
        File::put(public_path() . '/upload/profile/thumbnail/' . $facebookUser->getId() . ".jpg", $fileContents);
        $avatarUrl = $facebookUser->getId() . ".jpg";

        // $picture = public_path('uploads/profile/' . $facebookUser->id . ".jpg");
        return User::create([
            'name' => $facebookUser->name,
            'password' => $facebookUser->token,
            'email' => $facebookUser->email,
            'avatar' =>  $avatarUrl,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
        ]);
    }
}