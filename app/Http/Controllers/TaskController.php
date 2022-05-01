<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    public function showTask($task_id)
    {
        $task = \App\Models\Task::find($task_id);
        return view('task', [
            'task' => $task,
        ]);
    }

    public function deleteTask($task_id)
    {
        \App\Models\Task::where('id', $task_id)->delete();
        return view('delete_confirmation');
    }

    public function indexOrdered()
    {
        $tasks = \App\Models\Task::orderBy('title')->get();
        return view('indexOrdered', [
            'tasks' => $tasks,
        ]);
    }
}
