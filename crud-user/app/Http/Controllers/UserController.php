<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('user.index',compact('users'));
    }
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ], [
            'name.required' => 'El nombre es un campo obligatorio.',
            'email.required' => 'El campo de correo es obligatorio.',
            'email.email' => 'Por favor ingresa un correo válido.',
            'password.required' => 'Coloca una contraseña en este campo y en el de confirmación.',
        ]);
        
        $user=User::create($request->all());
        return redirect()->route('user.index');
    }
    public function edit(string $id){
        $user=User::find($id);
        return view('user.edit',compact('user'));
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // ignora el actual
        ], [
            'name.required' => 'El nombre es un campo obligatorio.',
            'email.required' => 'El campo de correo es obligatorio.',
            'email.email' => 'Por favor ingresa un correo válido.'
        ]);
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        //$user->password=$request->password;
        $user->save();

        return redirect()->route('user.index')->with('success', 'Usuario actualizado.');
    }
    public function destroy(string $id)
    {
        $element = User::find($id);
        $element->delete();
        return redirect()->route('user.index')->with('success', 'Usuario eliminado.');
    }
}
