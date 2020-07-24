<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function assigned()
    {
        $tasks = Task::all();
        return view('admin.tasks')->with('tasks', $tasks);
    }

    public function deletetask($id)
    {
        $tasks = Task::findorfail($id);
        $tasks->deletetask();
        return redirect('/tasks')->with('status', 'task is deleted');

    }

    public function addtask(Request $request)
    {
        $task = new Task();
        $task->name = $request->input('name');
        $task->deadline = $request->input('deadline');
        $task->save();
        return redirect('/tasks')->with('status', 'Task is added');
    }

    public function edit(Request $request, $id)
    {
        $tasks = Task::findorfail($id);
        return view('admin.edit_task')->with('tasks',$tasks);
    }
}
