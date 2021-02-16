<?php

namespace App\Http\Controllers;

use App\Models\User;
//use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Inertia\Inertia;
//use App\Url;
class UsersController extends Controller
{
    public function index()
    {
        // return Inertia::render('Users/Index', [
        //     'users' => User::all()->map(function ($user) {
        //         return [
        //             'id' => $user->id,
        //             'name' => $user->name,
        //             'email' => $user->email,
        //           //  'edit_url' => URL::route('users.edit', $user),
        //         ];
        //     }),
        //   //  'create_url' => URL::route('users.create'),
        // ]);

        {
            $user = [
                'fname' => 'Lara',
                'lname' => 5+5,
            ];
            return Inertia::render('User/Index',$user);
        }
    }

}



