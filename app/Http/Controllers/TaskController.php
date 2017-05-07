<?php

namespace App\Http\Controllers;

use App\model\Task;
use Illuminate\Http\Request;
use App\Http\Requests\Task\CreateTask;
class TaskController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists=Task::getList();
        return View('task.list',array('lists'=>$lists)) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return View('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTask $request)
    {
        //
          Task::addTask($request);
        return Redirect('task/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $result=Task::getTask($id);
        return View('task.edit',array('task'=>$result));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Task::deleteTask($id);
       return back();
    }
}
