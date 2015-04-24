@extends('layout')

@section('content')
	<h1>Users</h1>
	@foreach ($users as $user)
		<div>
			<h3>Username: <a href="my-account/{{$user->username}}" style="text-transform: capitalize;">{{$user->username}}</a></h3>
		</div>
	@endforeach
@stop