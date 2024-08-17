<?php

        // THIS CODES ARE FOR EMPLOYEES & ADMIN 
$EmailID = $_POST['email'];
$Pass_word = $_POST['password'];

        // THIS CODES ARE FOR CONNECTION OF THE DATABASE TO THE SITE

$con = new mysqli("localhost" , "root" , "" , "KualaDB");

    if($con -> connect_error) {

    //for connection error if the details are not TRUE !!!
die("Connection failed to connect :".$con -> connect_error);
}

else{
            // the tables where it is being selected !!!

        $stmt = $con -> prepare("select * from userlogin where emailID = ?");
        $stmt -> bind_param("s", $EmailID);
        $stmt -> execute();
        $stmt_result = $stmt -> get_result();

                // IF PASSWORD IS TRUE ---> SHOW THIS for the ADMIN DETAILS
            if ($stmt_result -> num_rows > 0)
            {
                $data = $stmt_result -> fetch_assoc();

                if($data['Pass_word'] === $Pass_word)
                    {
                    header("location:userDashboard.php");
                    }
                     
                        // IF PASSWORD IS NOT TRUE 
                else 
                    {
                    echo ("<h1><br> Your Email or Password is Incorrect.</h1>");             
                    }
                    
            }

                // show this if BOTH password / email are not TRUE!!
            else {
                    echo("<h1><br>Incorrect email or password.</h1>");

                    
                    }
                    
    }

?>

















