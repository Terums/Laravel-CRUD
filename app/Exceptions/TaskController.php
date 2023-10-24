<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{
    public function index(){
        return view('task.index');
    }

    public function newtask(){
        return view('task.newtask');
    }

    public function store(Request $request){
        $data = $request->validate([
            'task' => 'required',
            'author' => 'required'
        ]);

        $newProduct = Task::create($data);

        return redirect(route('task.index'));

    }
}
