<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $elements = Task::with('user')->get();
        return view('task.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('task.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title=$request->title;
        $task->description=$request->description;
        $task->due_date=$request->due_date_date.' '.$request->due_date_time;
        $task->is_completed=false;
        $task->user_id=$request->user_id;
        $task->save();

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        $users = User::all();
        // Si deseas formatear el campo `due_date` para separarlo en fecha y hora, puedes hacerlo
        $task->due_date_date = date('Y-m-d', strtotime($task->due_date));
        $task->due_date_time = date('H:i', strtotime($task->due_date));

        return view('task.edit', compact('task','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $task->title=$request->title;
        $task->description=$request->description;
        $task->due_date=$request->due_date_date.' '.$request->due_date_time;
        $task->is_completed=false;
        $task->user_id=$request->user_id;
        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->route('task.index');
    }

    public function completed(Request $request,string $id){
        $task = Task::find($id);
        $task->is_completed = true;
        $task->save();
        
        $elements = Task::with('user')->get();
        return view('task.index', compact('elements'));
    }
    public function incompleted(Request $request,string $id){
        $task = Task::find($id);
        $task->is_completed = false;
        $task->save();
        
        $elements = Task::with('user')->get();
        return view('task.index', compact('elements'));
    }
}
