@extends('app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Biodata Detail</div>
				<div class="panel-body">
				<div class="form-horizontal">
        		<div class="form-group">
				 {!! Form::label('name', 'Name', array('class' => 'col-md-4 control-label'))  !!}
					<div class="col-md-6">
					{!! Form::text('name', $name , ['class' => 'form-control', 'readonly' => 'true' ]) !!}</div>
				</div>
				<div class="form-group">
				{!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label')) !!}
					<div class="col-md-6"> 
					{!! Form::text('email', $email, ['class' => 'form-control', 'readonly' => 'true' ]) !!} 	</div>
				</div>
				<div class="form-group">
				{!! Form::label('dateofbirth', 'Date of Birth (YYYY-MM-DD)', array('class' => 'col-md-4 control-label')) !!}
					<div class="col-md-6"> 
					{!! Form::text('dateofbirth', $dateofbirth, ['class' => 'form-control', 'readonly' => 'true' ]) !!} 	
					</div> 
				</div>
				<div class="form-group">
				{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
					<div class="col-md-6"> 
					{!! Form::text('alamat', $alamat, ['class' => 'form-control', 'readonly' => 'true' ]) !!} 	</div>
				</div>
				<div class="form-group">

				</div>
				</div>
    			
				{!! link_to_route('biodata.create', 'Back') !!} </div> 
				</div>
			</div>
		</div>
	</div>
</div>	
@endsection