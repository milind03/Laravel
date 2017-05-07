<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $table='task';
  protected $fillable=['title','description','status','img_path'];

    //

  public static function addTask($request){
    $file_path=null;
    if(!empty($request->taskFile)){
      $file_name=$request->taskFile->getClientOriginalName();
      $file_path='Uploads/'.$file_name;
      $request->taskFile->storeAs('Uploads',$file_name);
    }

    Task::create([
    'title'=>$request->get('taskTitle'),
    'description'=>$request->get('taskDescription'),
    'img_path'=>$file_path,
    'status'=>1
  ]);

  }

  public static function getList(){

    $list=Task::all();
    return $list;
  }


  public static function getTask($id){

    $task=Task::find($id);
    return $task;
  }

  public static function deleteTask($id){

    $task=Task::find($id);
    $task->delete();

  }

}
