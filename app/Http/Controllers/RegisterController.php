<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validate the request data
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'subject' => 'required|string',
        ]);

        // Create a new register entry
        $reg = new Register;
        $reg->firstname = $request->firstname;
        $reg->lastname = $request->lastname;
        $reg->country = $request->country;
        $reg->subject = $request->subject;

        // Save the register entry
        $reg->save();
        toastr()
            ->positionClass('toast-top-center')
            ->success('Category Updated Successfully');
        // Redirect to the home page with a success message
        return redirect()->back();
    }
}
