<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class ProfileController extends Controller
{
    public function viewImage()
    {
        return view('profile.uploadPicture');
    }

    public function validateRequest($user)
    {
        /*
        $request->validate([
            'photo'=> ['required','max:8000']
        ]);

        $user = User::findOrFail(auth()->user()->id);

        if($request->hasFile('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            //$name = $request->file('photo')->getClientOriginalName();

            $name = auth()->user()->id . "." . $extension;

            //Storage::disk('local')->put($name, 'Contents');

            $path = $request->file('photo')->storeAs('/assets/public/profile/', $name);
            //Storage::disk('public')->put($name, $request->file('photo')->file_get_contents());

            $user->photo = $name ;

            $user->save();
        }
        return redirect("/profile");

        */


    }
    public function storeImage(Request $request)
    {
        $userid = Auth()->user()->id;

        request()->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('photo')) {
           $destinationPath = 'image/profile/'; // upload path
           $profileImage = $userid . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['photo'] = "$profileImage";
        }

        $user = User::find($userid);
        $user->photo = $profileImage;
        $user->update();

        return redirect("/profile");
    }
}
