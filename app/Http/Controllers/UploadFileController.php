<?php
namespace STEPITAcademy\HRManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UploadFileController extends Controller
{
    public function index()
    {
        return view('uploadFile.index');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'profile' => 'required|image|mimes:jpeg,jpg,png|max:1024'
        ]);
        $profile = $request->file('profile');
        $oldName = basename($profile->getClientOriginalName(), '.' . $profile->getClientOriginalExtension());
        $newName = $oldName . '-' . time() . '.' . $profile->getClientOriginalExtension();
        $profile->move(public_path('uploads'), $newName);
        Session::flash('success', 'Profile is uploaded successfully.');
        return redirect('/upload-file');
    }
}
