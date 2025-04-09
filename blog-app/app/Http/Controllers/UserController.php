<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        DB::table("users")->insert([
            'name' => 'Miguel',
            'lastname' => 'Castro',
            'email' => 'miguel@mail.com',
            'phone' => '+52123456785',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
            'remember_token' => null,
            'email_verified_at' => now(),
        ]);
        */
        $user = new User();
        $user->name='Test '. rand(0,100);
        $user->lastname='Test '. rand(0,100);
        $user->email='test'. rand(0,100) .'@mail.com';
        $user->phone='+52123456785';
        $user->password=Hash::make('12345678'.rand(0,100));
        $user->save();


        return redirect()->route('datos');
    }
    public function save(Request $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=Hash::make('12345678'.rand(0,100));
        $user->created_at=now();
        $user->updated_at=now();
        $user->remember_token=null;
        $user->email_verified_at=now();
        $user->save();
        return redirect()->route('inicio');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*
        DB::table('users')->where('id', $id)->update([
            'name'=> 'Jose',
            'lastname'=> 'Hernandez',
        ]);
        */
        $user = User::find($id);
        $user->name='Nombre '. rand(0,100);
        $user->lastname='Apellido '. rand(0,100);
        $user->email='mail'. rand(0,100) .'@mail.com';
        $user->save();
        return redirect()->route('datos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('datos');
    }

    public function data(){
        //$users=DB::select('SELECT * FROM users'); //SQL
        //$users=DB::table('users')->get(); //QueryBuilder
        $users=User::all(); //Eloquent


        //$users=DB::select('SELECT * FROM users WHERE id = ? ',[1]); //SQL
        $u=DB::table('users')->where('id','>=','1')->firstOrFail(); //QueryBuilder
        $uMail=DB::table('users')->pluck('email'); //QueryBuilder
        $countU=DB::table('users')->where('name','like','%H%')->count(); //QueryBuilder
        $existU=DB::table('users')->where('name','like','%juan%')->exists(); //QueryBuilder
        $selectU=DB::table('users')->select('name','email')->get(); //QueryBuilder
        $selectUQuery=DB::table('users')->select('name','email'); //QueryBuilder
        $selectUQuery->where('name','like','%H%')->get(); //QueryBuilder
        //$user=User::find(2); //Eloquent
        //dd($uMail);
        return view('data',compact('users','u','uMail','countU','existU','selectU','selectUQuery'));
        
    }
}
