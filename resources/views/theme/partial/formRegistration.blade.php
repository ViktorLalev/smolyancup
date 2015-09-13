{!!Form::open(['url'=>'/teams','class'=>'center','role'=>'form']) !!}
	<div class="input_fields_wrap">
	<div class="form-group">
		{!!Form::label('name',"Име на отбор:")!!}
		{!!Form::text('name',null,['class'=>'form-control','required'=>'required'])!!}
	</div>
	<div class='container-fluid'>
		<div class="row">
			<div class='col-md-6'>
				<div class="form-group">
					{!!Form::label('email',"E-mail :")!!}
					{!!Form::text('email',null,['class'=>'form-control','required'=>'required'])!!}
				</div>
			</div>
			<div class='col-md-6'>
				<div class="form-group">
					{!!Form::label('phone',"Телефон:")!!}
					{!!Form::text('phone',null,['class'=>'form-control','required'=>'required'])!!}
				</div>
			</div>
		</div>	
	</div>		
	
<hr />
<h3 class='center'>Играчи</h3>
<div class='container-fluid'>
		<div class="row">
			<div class='col-md-3'>
				{!!Form::label('players[0]',"Играч 1:")!!}
			</div>
			<div class='col-md-9'>
				{!!Form::text('players[0]',null,['class'=>'form-control','required'=>'required'])!!}
			</div>
</div>
<div class="row">
			<div class='col-md-3'>
				{!!Form::label('players[1]',"Играч 2:")!!}
			</div>
			<div class='col-md-9'>
				{!!Form::text('players[1]',null,['class'=>'form-control','required'=>'required'])!!}
			</div>
</div>
<div class="row">
			<div class='col-md-3'>
				{!!Form::label('players[2]',"Играч 3:")!!}
			</div>
			<div class='col-md-9'>
				{!!Form::text('players[2]',null,['class'=>'form-control','required'=>'required'])!!}
			</div>
</div>
<div class="row">
			<div class='col-md-3'>
				{!!Form::label('players[3]',"Играч 4:")!!}
			</div>
			<div class='col-md-9'>
				{!!Form::text('players[3]',null,['class'=>'form-control','required'=>'required'])!!}
			</div>
</div>

</div>

	
	</div>
	<div class='container-fluid'>
		<div class="row">
			<div class='col-md-6'>
				<div class="form-group">
				{!!Form::submit('Регистрирай',['class'=>'btn btn-primary form-control'])!!}
				</div>
			</div>
			<div class='col-md-6'>
				<a href="javascript:void(0)" id="addPlayer" class="btn btn-primary form-control" role="button">Добави играч <span class="glyphicon glyphicon-plus"></span>
				</a>
	
			</div>
	

	
	
	</div>
	</div>
	{!!Form::close() !!}


	@section('footer')

	<script type="text/javascript">

	$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $("#addPlayer"); //Add button ID
   
    var x = 4; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row"><div class="col-md-3"><label for="player_name">Играч '+x+':</label></div><div class="col-md-9"><input class="form-control" name="player_name[0]" type="text"></div></div>'); //add input box
        }
    });

    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
   
    
});

	</script>
    @stop   