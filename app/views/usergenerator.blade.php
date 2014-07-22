@extends('_master')

@section('title')
    Random User Generator
@stop

@section('description')
	Fill out the options below and click "Generate Users" to create random users.
@stop

@section('head')
    
@stop

@section('content')
	  <div class = "row">
		<div class = "col-md-6">
		<form role="form" method="post">
		  
		  <div class="form-group">
		    <label for="numberOfWords"># of users</label>
		    <input maxlength=2 type="text" name = "numberOfUsers" id="numWords" value = {{{ $users }}}> (Max 9)
		  </div>

		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name = "birthdate"> Include Birthdate
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name = "profile"> Include Profile
		    </label>
		  </div>
		  <input type = "submit" value = "Submit">
		  <button type="submit" class="btn btn-success">Generate Users</button>
		  <br><br>
		</form>
	</div>
	<div class = "col-md-6">
		<p>Other Developer Tools:</p>
		<a href = '/lorem' role="button" class="btn btn-default">Lorem Ipsum Generator</a>
		<br><br>
	</div>
	</div>

	<div class="footer">
	<p>	
		users: {{{ $users }}}
		<br>
		birthdate: {{{ $birthdate }}}
		<br>
		profile: {{{ $profile }}}

	</p>
		</div>
@stop

@section('footer')
   
@stop