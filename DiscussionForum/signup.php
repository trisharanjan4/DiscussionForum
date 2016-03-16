<html>
<head>
<title>Sign Up</title>
<link href="style.css" rel="stylesheet" title="Style" />
<body style='padding-top: 10%;'>
<p align="center">
<?php

 if(isset($_POST['signup']))
{
    //$id=$_POST['txt1'];
    $f_name=$_POST['txt2'];
    $l_name=$_POST['txt3'];
    $pwd=$_POST['pwd'];
    $u_type=$_POST['type'];
    $date=$_POST['dob'];
    $email=$_POST['email'];
    $gen=$_POST['r1'];
    echo "<i>Welcome to Discussion forum <b>$f_name</b></i><br>";
    //echo "Your ID is $id <br>";
    echo "Your Email is $email <br>";
    
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="insert into user values('$f_name','$l_name','$pwd','$u_type','$date','$email','$gen','')";
    $res=mysqli_query($link,$qry);
    if($res)
    {
        echo "You have successfully registered now..!!";
        echo "<h3 align='center'><a href=login.html>Login</a></h3>";
    }
    else
    {
        echo "Failed to register. Try again.. ";
    }
}

?>
</p>
</body></head></html>