@extends('layouts.master')

@section('title')
Notification
@endsection

@section('header')
@include('psra.header')
@endsection

@section('menu')
@include('psra.menu')
@endsection

@section('content')
<div class="container-fluid mt-5">
	<div class="row">
		<div>
			<div style="; margin-top: 10px; ">
			    <a href="{{asset('uploads/notification-2021-2022.pdf')}}">Notification regarding starting of 2021-2022 session</a><br>
			    <a href="{{asset('uploads/procedures.pdf')}}">Procudure for change of name/change of building/change of ownership</a>
			    </div>
			

		</div>
	</div>
		
	

</div>
<br><br>
@endsection


@section('footer')
@include('psra.footer')
@endsection
