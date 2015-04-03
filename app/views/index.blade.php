@extends('_master')

@section('title')
    Developer Tools
@stop

@section('description')
	Select one of the development tools below.
@stop

@section('head')
    
@stop

@section('header')
    
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/lorem">Lorem</a></li>
          <li><a href="/usergenerator">Users</a></li>
          <li><a href="/keyidentifier">Key Identifier</a></li>
        </ul>
        <h3 class="text-muted">Dev Tools</h3>
      </div>
@stop

@section('content')

	<div class = "row">
		<div class = "col-md-4 btnCenter">
			<a href = '/lorem' role="button" class="btn btn-default">Lorem Ipsum Generator</a>
		</div>
		<div class = "col-md-4 btnCenter">
			<a href = '/usergenerator' role="button" class="btn btn-default">Random User Generator</a>
		</div>
		<div class = "col-md-4 btnCenter">
			<a href = '/keyidentifier' role="button" class="btn btn-default">Key-Press Identifier</a>
		</div>
	</div>
	<br>
	<br>


@stop

@section('footer')
   
@stop