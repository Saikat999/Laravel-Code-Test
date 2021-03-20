<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\License;


class LicenseController extends Controller
{
    public function keyGenerator()
    {
        return view('key');
    }

    public function createData(Request $req)
    {
        $post = new License();
        $post->clientId = $req->clientId;
        $post->licenseKey = $req->licenseKey;
        $post->licenseDuration = $req->licenseDuration;
        $post->save();

        return back()->with('success','License Created Successfully');
    }

    
}
