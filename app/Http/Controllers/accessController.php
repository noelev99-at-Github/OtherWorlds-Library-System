<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserLoginInformation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class accessController extends Controller
{
    public function LogInPage()
    {
        return view('LogInPage');
    }

    public function LogInUser(Request $request)
    {
        session_start();

        $usename = "localhost";
        $email = "root";
        $pssword = "165692768";
        $db_name = "library_management_system";

        $conn = mysqli_connect($usename, $email, $pssword, $db_name);

        if(!$conn){
            echo "Connection Failed!";
            exit();
        }

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            if(!empty($username) && !empty($password) && !is_numeric($username))
            {
                
    
                //read from database
                $query = "select * from user_login_information where Username = '$username' limit 1";
                $result = mysqli_query($conn, $query);
    
                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
    
                        $user_data = mysqli_fetch_assoc($result);
                        
                        if($user_data['Password'] === $password)
                        {
    
                            $_SESSION['Username'] = $user_data['Username'];
                            return redirect('homePage');
                            die;
                        }
                    }
                }
                
                echo "wrong username or password!";
            }else
            {
                echo "wrong username or password!";
            }
        }

        //return redirect('homePage');
    }

    public function createUser()
    {
        return view('createUser');
    } 

    public function createUserPost(Request $request)
    {

        function validate($request){
            $request = trim($request);
            $request = stripslashes($request);
            $request = htmlspecialchars($request);
            return $request;
        }

        $userlogininformation = new UserLoginInformation();
        $userlogininformation->Username = $request->username;
        $userlogininformation->Email = $request->email;
        $userlogininformation->Password = $request->password;
        $res = $userlogininformation->save();

        if ($res) {
			return redirect('homePage');
		}else {
			echo "Your account could not be added!";
		}
    }

    public function LogOut()
    {
        session_write_close();

        if(isset($_SESSION['Username']))
        {
            unset($_SESSION['Username']);
        }
        return redirect('LogInPage');
        die;
    }
}
