<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\CarCategory;
use App\Cars;
use App\Contact;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class ContactController extends Controller
{
	public function postCreate(Request $request)
	{
		$contact = new Contact;
		$contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->content = $request->content;
        $contact->isDeleted = 0;
        $contact->save();
	}

	public function getDelete($id) 
    {
        $carExteriors = CarExteriors::find($id);
        $carExteriors->isDeleted = 1;
        $carExteriors->save();
        return redirect('cp/car-exterior/view/239')->with('notification','Xóa sản phẩm thành công');
    }
}
