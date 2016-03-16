<html><head><link href="style.css" rel="stylesheet" title="Style" /></head>
<table align="center"></table><body>
<?php

if(isset($_POST['login']))
{
    $username=$_POST['txt1'];
    $password=$_POST['txt2'];

    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select * from user where F_Name='$username' and Pwd='$password'";
    $resultset=mysqli_query($link,$qry);
    while($res=mysqli_fetch_row($resultset))
    {
        if(strcmp($res[3],'Admin')==0)
            header("location:admin.php");
        else if(strcmp($res[3],'User')==0)
            header("location:user.php");
            
    }
   
}

?>
</body>
</html>