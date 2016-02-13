@extends('layouts.error')
@section('error_content')

	<div class='error-type'>
	        <i class='icon-question-sign'></i>
	        <span>404</span>
	    </div>
	    <div class='error-message'>
	        Ooops! We can't find what you're looking for.
	    </div>
	    <div class='youcan'>
	        <small class='text-center'>You can</small>
	    </div>
	    <div class='search'>
	        <form accept-charset="UTF-8" action="#" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="CFC7d00LWKQsSahRqsfD+e/mHLqbaVIXBvlBGe/KP+I=" /></div>
	            <input id="q_" name="q[]" placeholder="Search..." size="30" type="text" />
	            <button class="btn"><i class='icon-search'></i>
	            </button>
	        </form>
	    </div>
	    <div class='youcan'>
	        <small class='text-center'>or</small>
	    </div>
	    <a class="btn btn-block" onclick="history.back(-1)" ><i class='icon-chevron-left'></i>
	        Go back
	    </a>

@stop