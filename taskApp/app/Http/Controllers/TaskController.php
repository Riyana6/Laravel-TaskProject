<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request){

        $task=new Task;
        $this->validate($requesr,[
            'task'=>'required|max:100|min:',
        ]);
        $task->task=$request->task;
        $task->save();
        return redirect()->back();
        //dd($request->all());
    
    }
}
