<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index()
    {
        $name = 'Nicolas';
        $tasks = Task::all();
        return view('tasks.index', compact('name', 'tasks'));
    }

    public function show(Task $task) // Task:find(willcard);
    {
        return view('tasks.show', compact('task'));
    }
}
