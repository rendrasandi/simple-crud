<div class="form-group">
 {!! Form::label('name', 'Name', array('class' => 'col-md-4 control-label'))  !!}
	<div class="col-md-6">
	{!! Form::text('name', null,array('class' => 'form-control'),'') !!}</div>
</div>
<div class="form-group">
{!! Form::label('email', 'Email', array('class' => 'col-md-4 control-label')) !!}
	<div class="col-md-6"> 
	{!! Form::text('email', null, array('class' => 'form-control'),'') !!} 	</div>
</div>
<div class="form-group">
{!! Form::label('dateofbirth', 'Date of Birth (YYYY-MM-DD)', array('class' => 'col-md-4 control-label')) !!}
	<div class="col-md-6"> 
	{!! Form::text('dateofbirth', null, array('class' => 'form-control'),'') !!} 	
	</div> 
</div>
<div class="form-group">
{!! Form::label('alamat', 'Alamat', array('class' => 'col-md-4 control-label')) !!}
	<div class="col-md-6"> 
	{!! Form::text('alamat', null, array('class' => 'form-control'),'') !!} 	</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-4">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
    {!! Form::reset($cancel, ['class'=>'btn primary']) !!}
</div>
