@extends('_master')

@section('title')
    Key Idenfifier
@stop

@section('description')
	Press any key on the keyboard to view the corresponding key code.
@stop

@section('head')
    
@stop

@section('header')
    
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="/">Home</a></li>
          <li><a href="/lorem">Lorem</a></li>
          <li><a href="/usergenerator">Users</a></li>
          <li class="active"><a href="/keyidentifier">Key Identifier</a></li>
        </ul>
        <h3 class="text-muted">Dev Tools</h3>
      </div>
@stop

@section('content')
	<div class = "row">
		<div class = "col-md-6">
			<div id='keyIdentifier'>
			</div>
		</div>
		<div class = "col-md-6">
			<p>Other Developer Tools:</p>
			<a href = '/lorem' role="button" class="btn btn-default">Lorem Ipsum Generator</a>
			<br><br>
			<a href = '/usergenerator' role="button" class="btn btn-default">User Generator</a>
			<br>
			<br>
		</div>
	</div>
	<script src='js/keyidentifier.js'></script>

@stop

@section('footer')
   
@stop