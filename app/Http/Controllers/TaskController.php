<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // legacy
        // $tasks = DB::table('tasks')->orderBy('id','desc')->get();
        
        $tasks = Task::orderBy('id', 'desc')->get();
        
        // dd($tasks);
        if ($request->has('search')) {
            $tasks = Task::cari($request->search);  
             
        }
        return view('tasks.index',[
            'task' => new Task,
            'tasks' => $tasks,
            'submit' => 'Create'
        ]);
    }
    
    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request)
    {
        // $request->validate([
        //     'list' => 'required'
        // ]);
        $insert = Task::create([
            'list' => $request->list
        ]);
        // $insert = DB::table('tasks')->insert([
        //     'list' => $request->list
        // ]);

        // return redirect('tasks');
        return back();
    }

    public function edit($id)
    {
        // $task = DB::table('tasks')->where('id',$id)->first();
        $task = Task::find($id);
        return view('tasks.edit', [
            'task'=> $task,
            'submit' => 'Update'
    ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update([
            'list' => $request->list
        ]);
        return redirect('tasks');
    }
    public function destroy($id)
    {
        $task = Task::destroy($id);

        return redirect('tasks');
    }
}
