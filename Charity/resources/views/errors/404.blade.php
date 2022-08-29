@extends('layouts.error')
@section('error')
<!-- ===============================  CONTENT ======================================== -->
<div class="overlay"></div>
<div class="terminal">
	<h1>Error <span class="errorcode">404</span></h1>
	<p class="output">The page you are looking for might have been removed, had its name changed or is temporarily unavailable</ü>
		<p class="output">Please try 
			<a href="{{ url('/') }}">Home</a>
		</p>
		<p class="output">Good luck</p>
	</div>
	<!-- ========================== CONTENT : END ============================================== -->
	@endsection
