@extends("master")

@section('title','Контакти | SmolaynCup')

@section('content')
	<h1>Свържете се с нас</h1>
	<hr />

	{!!Form::open(['url'=>'/']) !!}
	<div class="form-group">
		{!!Form::label('name',"Тема:")!!}
		{!!Form::text('name',null,['class'=>'form-control'])!!}
	</div>
	
	<div class="form-group">
		{!!Form::label('email',"Email:")!!}
		{!!Form::text('email',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('phone',"Съобщение:")!!}
		{!!Form::text('phone',null,['class'=>'form-control'])!!}
	</div>
	
	<div class="form-group">
		{!!Form::submit('Изпрати съобщение',['class'=>'btn btn-primary form-control'])!!}
	</div>
	{!!Form::close() !!}

	
@stop

