<?php  

if (isset($_POST['BookTitle']) && isset($_POST['Publisher']) && isset($_POST['Author']) && isset($_POST['YearPublished']) && isset($_POST['Volume'])) 
{

	include 'dp_conn_addBook.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$booktitle = validate($_POST['BookTitle']);
	$bookpublisher = validate($_POST['Publisher']);
    $bookauthor = validate($_POST['Author']);
    $yearpublished = validate($_POST['YearPublished']);
    $volume = validate($_POST['Volume']);

	if (empty($booktitle) || empty($bookpublisher) || empty($bookauthor) || empty($yearpublished) || empty($volume)){
		header("Location: ifsecond.html");
	}else {

		$sql = "INSERT INTO book_details(Book_Title, Publisher, Author, Year_Published, Volume) VALUES('$booktitle', '$bookpublisher', '$bookauthor', '$yearpublished', '$volume')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			header("Location: thirdif.html");
		}else {
			echo "Your account could not be added!";
		}
	}

}else {
	header("Location: firstloop.html");
}