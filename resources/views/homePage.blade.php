<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/homePageStyleSheet.css')}}"homePageStyleSheet>
</head>
<body>

    <h1 class="libraryName">OtherWorlds Library System</h1>

    <ul>
      <li><a  class="active"  href="homePage">View Books Registered in the Archives</a></li> 
      <li><a  class="notActive" href="addBook">Add a Book</a></li>
      <li><a  class="logOut" href="LogOut">Log Out</a></li>
    </ul>

    <div class="box">
      <div align = "center">
        <table class="styletable">
          <thead>
            <tr>
              <th>#</th>
              <th>Book Title</th>
              <th>Publisher</th>
              <th>Author/s</th>
              <th>Year Published</th>
              <th>Volume No.</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i = 1;   
              $table = DB::table('book_information_tables')->get();
            @endphp
            @foreach($table as $key=>$book)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $book->BookTitle }}</td>
                  <td>{{ $book->Publisher }}</td>
                  <td>{{ $book->Author }}</td>
                  <td>{{ $book->YearPublished }}</td>
                  <td>{{ $book->Volume }}</td>
                  <td>
                    <a href="{{ url('editBook/'.$book->id) }}" >Edit</a>
                    <a href="{{ url('deleteBook/'.$book->id) }}">Delete</a>  
                  </td>
                </tr>
            @endforeach
      </div>

      
    </div>
    
</body>
</html>