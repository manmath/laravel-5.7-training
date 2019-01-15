<?php
namespace STEPITAcademy\HRManagement\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use STEPITAcademy\HRManagement\Models\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('file.index', ['files' => $files]);
    }

    public function create()
    {
        return view('file.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fileUpload' => 'required|image|mimes:jpeg,jpg,png|max:5120'
        ]);
        $fileUpload = $request->file('fileUpload');
        $oldBaseName = basename($fileUpload->getClientOriginalName(), '.' . $fileUpload->getClientOriginalExtension());
        $newBaseName = $oldBaseName . '-' . time();
        $newName = $newBaseName . '.' . $fileUpload->getClientOriginalExtension();
        $path = 'uploads';

        // Bind data to be inserting to table
        $file = new File();
        $file->name = $newBaseName;
        $file->path = $path;
        $file->absolute_path = $path . '/' . $newName;
        $file->size = $fileUpload->getSize();

        // Perform action insert data to table
        $isSaved = $file->save();

        if ($isSaved) {
            // Upload image to directory
            $fileUpload->move(public_path($path), $newName);
            Session::flash('success', 'Profile is uploaded successfully.');
        } else {
            Session::flash('error', 'Profile is not uploaded.');
        }
        return redirect('/file');
    }
}
