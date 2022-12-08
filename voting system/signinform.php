<?php
include ("config.php");
session_start();



if(isset($_POST['submit'])){
        
    $username = $_POST['uname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `reguser`";
    if($select_query = mysqli_query($link, $query)){

        if(mysqli_num_rows($select_query) > 0){	

                        while($row = mysqli_fetch_assoc($select_query)){

                                $username_check = $row['firstName'];
                                
                                $email_check = $row['email'];
                                $password_check = $row['password'];
                                $ID_check = $row['regUserID'];

                                
                                if(($username == $username_check and $password == $password_check) || ($username == $email_check and $password == $password_check )){
                                        echo$username_check;
                                        echo $username;

                                        $_SESSION["usertype"] = "user";
                                        $_SESSION["ID"] = $ID_check;
                                        $_SESSION["name"] = $username_check;
                                        /*
                                        $cookie_name = "user";
                                        $cookie_value = "competitor";
                                        setcookie($cookie_name, $cookie_value, time() + (86400), "/");
                                        */

                                        header('Location: homepage.php');
                                }
                        }
                }
    }

//}


$query2 = "SELECT * FROM `judge`";
if($select_query2 = mysqli_query($link, $query2)){

        if(mysqli_num_rows($select_query2) > 0){	

        while($row2 = mysqli_fetch_assoc($select_query2)){

                $username_check = $row2['firstName'];
                
                $email_check = $row2['email'];
                $password_check = $row2['password'];
                $ID_check = $row2['JID'];

                        
                if(($username == $username_check and $password == $password_check) || ($username == $email_check and $password == $password_check )){
                        echo$username_check;
                        echo $username;

                                $_SESSION["usertype"] = "judge";
                                $_SESSION["ID"] = $ID_check;
                                $_SESSION["name"] = $username_check;
                        /*
                        $cookie_name = "user";
                        $cookie_value = "competitor";
                        setcookie($cookie_name, $cookie_value, time() + (86400), "/");
                        */

                        header('Location: homepage.php');
                }
        }
        } 
        
}

}
//echo( '<script> alert("Wrong Password :( \n Try Again!")</script>');
//header('Location: signinform.php');

//SELECT * FROM `reguser`

?>


