<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index() {

        $urlParams = request()->query();

        $query = DB::table('users')
            ->leftJoin('user_data', 'users.id', '=', 'user_data.user_id');

        if( isset($urlParams['search']) && $urlParams['search']) {
            $query->whereAny(['name', 'email', 'user_data.phone_number'], 'like', "%".$urlParams['search']."%");
        }

        $users = $query->paginate(10);

        return view('admin.user.index', ['users' => $users ]);
    }


    public function selectUserType() {
        return view('admin.user.type');
    }

    public function create() {

        $userType = request()->query('type');

        return view('admin.user.create', ['user_type' => $userType ]);
    }


    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed'
        ]);


        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        $user->UserData()->save();

        return redirect('/users');

    }

}
