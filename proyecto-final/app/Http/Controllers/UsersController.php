<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        // Aquí puedes implementar la lógica para mostrar la lista de usuarios
        return view('users.index');
    }

    public function create()
    {
        // Aquí puedes implementar la lógica para mostrar el formulario de creación de usuario
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Aquí puedes implementar la lógica para almacenar un nuevo usuario
        // Validar y guardar el usuario en la base de datos
    }

    public function show($id)
    {
        // Aquí puedes implementar la lógica para mostrar un usuario específico
        return view('users.show', compact('id'));
    }

    public function edit($id)
    {
        // Aquí puedes implementar la lógica para mostrar el formulario de edición de usuario
        return view('users.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Aquí puedes implementar la lógica para actualizar un usuario existente
        // Validar y actualizar el usuario en la base de datos
    }

    public function destroy($id)
    {
        // Aquí puedes implementar la lógica para eliminar un usuario
        // Eliminar el usuario de la base de datos
    }
    public function firstUser(){
        User::create([
            'name' => 'Miguel Castro',
            'email' => 'miguel.castro@pjedomex.gob.mx',
            'password' => Hash::make('123456789'),
            'photo' => '',
            'status' => 1,
            'id_branch' => 0,
            'role' => 'Administrador',
            'last_login' => '',
        ]);
        return "Se creo.";
    }
}
