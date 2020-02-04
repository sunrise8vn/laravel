<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\Response;
use App\ContactStaff;

class ContactStaffController extends Controller
{
    public function postCreate(Request $request)
	{
		$contactStaff = new ContactStaff;
		$contactStaff->fullname = $request->fullname;
        $contactStaff->email = $request->email;
        $contactStaff->phone = $request->phone;
        $contactStaff->content = $request->content;
        $contactStaff->staff_id = $request->staff_id;
        $contactStaff->staff_name = $request->staff_name;
        $contactStaff->staff_email = $request->staff_email;
        $contactStaff->isDeleted = 0;
        $contactStaff->save();
	}
}
