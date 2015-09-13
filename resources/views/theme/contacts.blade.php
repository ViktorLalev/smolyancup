@extends("master")

@section('title','Контакти | SmolaynCup')

@section('content')
<section id="title" class="emerald">
   <div class="container">
      <div class="row">
         <div class="col-sm-10">
            <p></p>
            <h1>Вашите съвети са важни за нас.</h1>
            <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
               -->
         </div>
      </div>
   </div>
</section>
<!--/#title--> 
	
	<div class="container">
	<div class="row">
     <div class="col-sm-7">
<h2>Email форма</h2>
        <hr />
        {!!Form::open(['url'=>'/contacts','id'=>'form-send-email']) !!}
        
	<div class="form-group">
		{!!Form::label('subject',"Тема:")!!}
		{!!Form::text('subject',null,['class'=>'form-control'])!!}
	</div>
	
	<div class="form-group">
		{!!Form::label('email',"Email:")!!}
		{!!Form::text('email',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('message',"Съобщение:")!!}
		{!!Form::textarea('message',null,['class'=>'form-control'])!!}
	</div>
	
	<div class="form-group">
		{!!Form::submit('Изпрати съобщение',['class'=>'btn btn-primary form-control'])!!}
	</div>
	{!!Form::close() !!}
</div>
<div class="col-sm-5">

<div class="container">
	<h2>Контакти</h2>
	<hr />
<div class="row">

      <div class="col-sm-6">
        
        	<p>Антоан Шотаров</p>
       </div>
        <div class="col-sm-6">
        		<p>Телефон: 359 88 7 65 64 43</p>
        		<p>Email: tonishotarov@gmail.com</p>
        	</div>
 </div>
 <div class="row">

      <div class="col-sm-6">
        
        	<p>Цветан Петров</p>
       </div>
        <div class="col-sm-6">
        		<p>Телефон: 359 87 8 65 54 71</p>
        		
        	</div>
 </div>
  <div class="row">

      <div class="col-sm-6">
        
        	<p>Божидар Шуманов</p>
       </div>
        
 </div>
  <div class="row">

      <div class="col-sm-6">
        
        	<p>Младен Кадиев</p>
       </div>
        
 </div>
  <div class="row">

      <div class="col-sm-6">
        
        	<p>Виктор Лалев</p>
       </div>
        <div class="col-sm-6">
        		<p>Телефон: 359 88 3 60 46 77</p>
        		<p>Email: viktor.lale@yahoo.com</p>
        	</div>
 </div>
        
   </div>
</div>
</div>
	</div>
@stop

