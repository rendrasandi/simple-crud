@extends('app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Biodata Result</div>
					<div class="panel-body">

 				
        		<div class="form-group">
				{!! Form::label('', 'Terima kasih telah mengisi form', array('class' => 'col-md-4 control-label')) !!} 
				</div>
				<div class="form-horizontal">
				<div class="col-md-8 control-label">
				{!! link_to_route('biodata.create', 'Create Biodata') !!} </div>
				</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>	
@endsection