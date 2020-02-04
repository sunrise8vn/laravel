<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\CarCategory;
use App\Cars;
use App\ContactDetailProduct;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

class ContactDetailProductController extends Controller
{
    public function postCreate(Request $request)
	{
		$contactDetailProduct = new ContactDetailProduct;
		$contactDetailProduct->fullname = $request->fullname;
        $contactDetailProduct->email = $request->email;
        $contactDetailProduct->phone = $request->phone;
        $contactDetailProduct->content = $request->content;
        $contactDetailProduct->car_name = $request->car_name;
        $contactDetailProduct->car_id = $request->car_id;
        $contactDetailProduct->isDeleted = 0;
        $contactDetailProduct->save();
	}
}
