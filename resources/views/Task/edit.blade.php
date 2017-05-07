@extends('layout.master')

@section('content')

<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post"  enctype="multipart/form-data" action="/task/create">
              {{csrf_field()}}
            <div class="form-group">
							<label for="taskTitle" class="cols-sm-2 control-label">@lang('Task/create.taskTitle')</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="taskTitle" id="taskTitle"  placeholder="@lang('Task/create.taskTitle')" value="{{$task->title}}"/>
</div>
									@if ($errors->has('taskTitle')) <p class="alert-danger">{{ $errors->first('taskTitle') }}</p> @endif

							</div>
						</div>

						<div class="form-group">
							<label for="taskDescription" class="cols-sm-2 control-label">@lang('Task/create.taskDescription')</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<textarea class="form-control" name="taskDescription" id="taskDescription"  placeholder="@lang('Task/create.taskDescription')"/>{{$task->description}}</textarea>
								</div>
            @if ($errors->has('taskDescription')) <p class="alert-danger">{{$errors->first('taskDescription')}}</p> @endif
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Add">
            </div>

					</form>
          @if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

				</div>
			</div>

@endsection
