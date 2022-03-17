<?php

namespace App\Http\Controllers;

use App\Models\PhoneNumber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('index', compact('users'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'nationality' => 'required',
            'password' => 'required',
            'phone_number' => 'required'
        ]);

        $user = User::create([
            'name' => $request['name'],
            'cpf' => $request['cpf'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'nationality' => $request['nationality'],
            'password' => Hash::make($request['password']),
        ]);

        PhoneNumber::create([
            'number' => $request['phone_number'],
            'user_id' => $user->id
        ]);

        return redirect('/users')->with('success', 'Usuário salvo com sucesso');
    }

    public function edit($id) {
        $user = User::find($id);

        return view('edit', compact('user'));
    }

    public function update(Request $request, $id) {
        //return response()->json($request);
        $user = User::find($id);

        if($request['name'] != null && $request['name'] != '') {
            $user->name = $request['name'];
        }

        if($request['cpf'] != null && $request['cpf'] != '') {
            $user->cpf = $request['cpf'];
        }

        if($request['email'] != null && $request['email'] != '') {
            $user->email = $request['email'];
        }

        if($request['birthday'] != null && $request['birthday'] != '') {
            $user->birthday = $request['birthday'];
        }

        if($request['nationality'] != null && $request['nationality'] != '') {
            $user->nationality = $request['nationality'];
        }

        if($request['password'] != null && $request['password'] != '') {
            $user->password = $request['password'];
        }

        $user->save();

        return redirect('/users')->with('success', 'Usuário atualizado com sucesso');
    }
}
