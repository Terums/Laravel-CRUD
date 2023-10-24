<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class TaskController extends Controller
{
    //the index of task that shows all of task in db
    public function index(){
        $tasks = Tasks::all();
        return view('task.index', ['task' => $tasks]);
        
    }

    // will use the route for new task to view the page
    public function newtask(){
        return view('task.newtask');
    }

    //route for validating and store the data to db there is no View here but will redirect to Index after the function is done
    public function store(Request $request){
      
       $data = $request->validate([
            'task' => 'required',
            'author' => 'required'
        ]);

        $newTask = Tasks::create($data);

        return redirect(route('task.index'));

    }
    
    //use to view the page to edit task
    public function edit(Tasks $tasks){
        return view('task.edit', ['task' => $tasks]);
    }

    //there's also no view, this controller is use in update button and will redirect to INDEX of task
    public function update(Tasks $tasks, Request $request){
        $data = $request->validate([
            'task' => 'required',
            'author' => 'required'
        ]);

            $tasks->update($data);

            return redirect(route('task.index'))->with('success', 'Task Edited!!!');
    }

    //also no view but a  controller for button to delete the task
    public function delete(Tasks $tasks){
        $tasks->delete();

        return redirect(route('task.index'))->with('success', 'Task Deleted!!!');
    }
}
