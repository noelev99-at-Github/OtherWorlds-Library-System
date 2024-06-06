<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/addBookCSS.css')}}">
</head>
<body>

    <h1 class="libraryName">OtherWorlds Library System</h1>

    <ul>
      <li><a  class="notActive"  href="/homePage">View Books Registered in the Archives</a></a></li> 
      <li><a  class="active" href="addBook">Add a Book</a></a></li>
      <li><a  class="logOut" href="LogOut">Log Out</a></li>
    </ul>

    <div class="box">
        
            <form action="{{ url('/addBook/store')}}" method="POST">
            @csrf

            <h3 class="bookInformation">Book Information</h3>

            <div class="bookDetails">
                <label>Book Title</label>
            </div>
                <input align = "center" type="text" placeholder="Enter Book Title" name="BookTitle" required>
    
            <div class="bookDetails">
                <label>Book Publisher</label>
            </div>
                <input type="text"placeholder="Enter Book Publisher" name="Publisher" required>

            <div class="bookDetails">
                <label>Book Author/s</label>
            </div>
                <input type="text" placeholder="Enter Book Author/s" name="Author" required>
           
            <div class="bookDetails">
                <label>Year Published</label>
            </div>
                <input type="text" placeholder="Enter Published Year of Book" name="YearPublished" required>

            <div class="bookDetails">
                <label>Volume</label>
            </div>
                <input type="text" placeholder="Enter Book Volume Number" name="Volume" required>

            <button class="login">Submit</button>
        </form>
    </div>

</body>
</html>