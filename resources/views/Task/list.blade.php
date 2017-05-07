@extends('layout.master')

@section('content')
<table class="table">
<tr class="row">
  <th>Task Id</th>
  <th>Task Name</th>
  <th>Created</th>
  <th>Updated</th>
  <th></th>
  <th></th>
</tr>
@foreach($lists as $task)
<tr class="row">
  <th>{{$task->id}}</th>
  <th>{{$task->title}}</th>
  <th>{{Carbon\Carbon::parse($task->created_at)->format('d/M/Y')}}</th>
  <th>{{Carbon\Carbon::parse($task->updated_at)->format('d/M/Y')}}</th>
  <th>@if(!empty($task->img_path))<img src="/storage/{{$task->img_path}}" height="30" width="30"></img>@endif</th>
  <th><a href="/task/edit/{{$task->id}}" class="btn btn-primary">Edit</a><th>
  <th><a href="/task/delete/{{$task->id}}" class="btn btn-primary">Delete</a><th>
</tr>
@endforeach
</table>

@endsection
