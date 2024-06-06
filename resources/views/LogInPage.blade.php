<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ url('/assets/cascadingstylesheet.css')}}">
</head>
<body>

	<h1 class="libraryName">OtherWorlds Library</h1>
	
		<form action="{{route('LogInUser')}}" method="post">
		@if(Session::has('success'))
		<div class="alert alert-success">{{Session::get('success')}}</div>
		@endif
		@if(Session::has('fail'))
		<div class="alert alert-danger">{{Session::get('fail')}}</div>
		@endif
		@csrf
			<div align="center">
				<input type="username" placeholder="Enter Librarian Username" name="username" required>
			</div>
			
			<div align="center">
				<input type="password" placeholder="Enter Librarian Password" name="password" required>

			</div>
				
			<div align="center">
				<button class="login">Login</button>
			</div>
		</form>

    <div class="box">
        <p align = "center">Not a Guardian of Realms? Offer your Soul!</p>
        <div class="signUpButton"">
            <a class="signUp" href="createUser"> Sign Up</a>
        </div>
    </div>

</body>
</html>