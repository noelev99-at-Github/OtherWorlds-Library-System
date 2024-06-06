
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('/assets/createUserCSS.css')}}">
</head>
<body>

    <h1 class="libraryName">OtherWorlds Library</h1>

    <form action="{{route('createUserPost')}}" method="POST">
        @csrf
        <div align="center">
            <input type="username" placeholder="Enter Librarian Username" value="" name="username" required>
        </div>

        <div align="center">
            <input type="email" placeholder="Enter Librarian Email" value="" name="email" required>
        </div>
        
        <div align="center">
            <input type="password" placeholder="Enter Librarian Password" value="" name="password" required>
        </div>
            
        <div align="center">
            <button class="signUp">
                Create an Account
            </button>
        </div>
   </form>
   
</body>
</html>