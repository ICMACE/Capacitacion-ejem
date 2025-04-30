<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use App\Models\cr;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role != 'Administrador'){
            return redirect()->route('home')->with('error', 'No tienes permisos para acceder a esta sección.');
        }else{
            $elementos=Branches::all();
            return view('modules.users.branches',compact('elementos'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'name' => 'required|string|max:255',
            'state' => 'required|integer',
        ]);*/
        Branches::create([
            'name' => $request->name,
            'state' => 1,
        ]);
        return redirect()->route('branches.index')->with('success', 'Branch creado de manera exitosa.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $branch=Branches::find($id);
        return response()->json($branch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Branches::where('id', $id)->update([
            'name' => $request->name,
            'state' => $request->state,
        ]);
        return redirect()->route('branches.index')->with('success', 'Branch actualizado de manera exitosa.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function changeState(string $id)
    {
        Branches::where('id', $id)->update([
            'state' => 0,
        ]);
        return redirect()->route('branches.index')->with('success', 'Branch eliminado de manera exitosa.');
    }
}
