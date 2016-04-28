<!--
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>About me</h1>

</body>
</html>
-->
@extends('main')
@section('content')
	<h1>About</h1>
	
    <h3>People I Like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@stop
@section('footer')
    <script>alert('Contact Form');</script>
@stop