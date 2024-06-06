<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="{{ url('/assets/editBookCSS.css')}}">
</head>
<body>
    <h1 class="libraryName">OtherWorlds Library System</h1>

    <ul>
      <li><a  class="notActive"  href="/homePage">View Books Registered in the Archives</a></a></li> 
    </ul>

    <div class = "box">
        <div align = "center">
            <form action="{{ url('updateBook/'.$bookInformationTable->id) }}" method="POST">
                @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf

                <h3 class="bookInformation">Editing Book Information</h3>

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
                  <tr>
                    <td>{{ $bookInformationTable->id }}</td>
                    <td>{{ $bookInformationTable->BookTitle }}</td>
                    <td>{{ $bookInformationTable->Publisher }}</td>
                    <td>{{ $bookInformationTable->Author }}</td>
                    <td>{{ $bookInformationTable->YearPublished }}</td>
                    <td>{{ $bookInformationTable->Volume }}</td>
                    <td>
                      <a href="{{ url('homePage') }}">Save Changes</a>  
                    </td>
        </div>
        
    </div>
</body>
</html>



