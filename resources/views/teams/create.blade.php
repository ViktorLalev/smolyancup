@extends("master")

@section('title','Регистрация | SmolaynCup')

@section('content')
	<h1>Register Team</h1>
	<hr />

	{!!Form::open(['url'=>'/teams']) !!}
	<div class="form-group">
		{!!Form::label('name',"Team Name:")!!}
		{!!Form::text('name',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('slug',"Slug:")!!}
		{!!Form::text('slug',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email',"Email:")!!}
		{!!Form::text('email',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('phone',"Phone:")!!}
		{!!Form::text('phone',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('player_name',"Player 1:")!!}
		{!!Form::text('player_name',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::submit('Register',['class'=>'btn btn-primary form-control'])!!}
	</div>
	{!!Form::close() !!}

	
@stop

