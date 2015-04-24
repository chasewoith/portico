@extends('layout')

@section('content')
	<h1>My Account</h1>
		<div>
			<h3>Username: {{$user->username}} </h3>
			<h3>Email: {{$user->email}} </h3>
			<h3>Password: {{$user->password}} </h3>
		</div>
@stop