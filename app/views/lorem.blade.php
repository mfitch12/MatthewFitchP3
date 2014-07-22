@extends('_master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('description')
	Fill out the options below and click "Generate" to create lorem ipsum paragraphs.
@stop

@section('head')
    
@stop

@section('content')
	  <div class = "row">
		<div class = "col-md-6">
		<form role="form" method="post" action="index.php">
		  
		  <div class="form-group">
		    <label for="numberOfWords"># of paragraphs</label>
		    <input maxlength=2 type="text" name = "numberOfWords" id="numWords"> (Max 99)
		  </div>

		  <button type="submit" class="btn btn-success">Generate</button>
		  <br><br>
		</form>
	</div>
	<div class = "col-md-6">
		<p>Other Developer Tools:</p>
		<a href = '/usergenerator' role="button" class="btn btn-default">Random User Generator</a>
		<br><br>
	</div>
	</div>

	<div class="footer">
	<p>	


	</p>
		</div>
@stop

@section('footer')
   
@stop