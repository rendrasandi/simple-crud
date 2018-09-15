@extends('app')
 
@section('content')
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Biodata</div>
				<div class="panel-body">
				@if ($errors->any())
					<div class='alert alert-danger'>
					@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>
					@endforeach
					</div>
				@endif
 
    			{!! Form::model(new App\Biodata, ['class' => 'form-horizontal','route' => ['biodata.store']]) !!}
        		@include('biodata/form/form', ['submit_text' => 'Create Data'],['cancel' => 'Reset'])
    			{!! Form::close() !!}
	
					</div>
			</div>
		</div>
	</div>
</div>	
@endsection