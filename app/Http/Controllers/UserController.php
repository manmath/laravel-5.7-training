<?php
namespace STEPITAcademy\HRManagement\Http\Controllers;

use Illuminate\Http\Request;
use STEPITAcademy\HRManagement\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(2);
        $users = [
            'all' => [
                'total' => 20
            ],
            'province' => [
                'phnom penh' => [

                ],
                'kandal' => [

                ]
            ]
        ];
        echo json_encode($users);
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('auth.register');
    }
}
