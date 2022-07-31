<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
      $users = User::all();

      return view ('users.index', ['users' => $users]);
    }


    public function create()
    {
      return view('users.create')


    }

    public function store()
    {
      request()->validate([
        'id' => required('id'),
        'name' => required('name'),
        'email' => required('email'),
        'phone' => required('phone'),
      ]);
      User::create([
        $user->update([
          'id' => request('id'),
          'name' => request('name'),
          'email' => request('email'),
          'phone' => request('phone'),
      ]);
      return redirect('/users');
    }


    public function edit(User $user)
    {
      return view('user.edituser', ['posts =>']);
    }

    public function update(User $user)
    {

      request()->validate([
        'id' => required('id'),
        'name' => required('name'),
        'email' => required('email'),
        'phone' => required('phone'),
      ]);
      $user->update([
        'id' => request('id'),
        'name' => request('name'),
        'email' => request('email'),
        'phone' => request('phone'),
      ]);

      return redirect('/users');
    }



    public function destroy(User $user)
    {
      $user-> delete();

      return redirect('/users');
    }
}
