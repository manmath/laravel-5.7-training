<?php
namespace STEPITAcademy\HRManagement\Http\Controllers;

use Illuminate\Http\Request;
use STEPITAcademy\HRManagement\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('auth.register');
    }
}
