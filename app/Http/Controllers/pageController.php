<?php

namespace App\Http\Controllers;

use App\Models\BookInformationTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class pageController extends Controller
{

    public function homePage()
    {
        return view('homePage');
    }

    public function addBook()
    {
        return view('addBook');
    }

    public function store(Request $request)
    {
        function validate($request){
            $request = trim($request);
            $request = stripslashes($request);
            $request = htmlspecialchars($request);
            return $request;
        }

        $bookInformationTable = new BookInformationTable();
        $bookInformationTable->BookTitle = $request->BookTitle;
        $bookInformationTable->Publisher = $request->Publisher;
        $bookInformationTable->Author = $request->Author;
        $bookInformationTable->YearPublished = $request->YearPublished;
        $bookInformationTable->Volume = $request->Volume;

        $res = $bookInformationTable->save();

        if ($res) {
			return view('addBook');
		}else {
			echo "Your account could not be added!";
		}
    }

    public function edit($id)
    {
        $bookInformationTable = BookInformationTable::find($id);
        return view('editBook', compact('bookInformationTable'));
    }


    public function update(Request $request, $id)
    {
        function validat($request){
            $request = trim($request);
            $request = stripslashes($request);
            $request = htmlspecialchars($request);
            return $request;
        }
        $bookInformationTable = BookInformationTable::find($id);
        $bookInformationTable->BookTitle = $request->input('BookTitle');
        $bookInformationTable->Publisher = $request->input('Publisher');
        $bookInformationTable->Author = $request->input('Author');
        $bookInformationTable->YearPublished = $request->input('YearPublished');
        $bookInformationTable->Volume = $request->input('Volume');
        $bookInformationTable->update();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $bookInformationTable = BookInformationTable::find($id);
        $bookInformationTable->delete();
        return redirect()->back()->with('status','Book Deleted Successfully');
    }
}
