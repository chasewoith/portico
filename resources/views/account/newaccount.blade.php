@extends('layout')

@section('content')
	<h1>Add an Account</h1>
	<hr/>
	{!! Form::open(['url' => 'new-account']) !!}
		<div class="form-group" >
			{!! Form::label('username', 'Username:') !!}
			{!! Form::text('username', null, ['class' => 'form-control']) !!}
			<br>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
			<br>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', null, ['class' => 'form-control']) !!}
			<br>
			{!! Form::submit('Add User', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}

	@if ($errors->any())
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop