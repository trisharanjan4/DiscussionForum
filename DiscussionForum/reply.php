<html>
<head>
<link href="style.css" rel="stylesheet" title="Style" />
<body>
<a href="login.html"><h5 align="right">Logout</h5></a>
<form name="frm" action="" method="post">
<h2 align="center" style="padding-top: 5%;">Reply</h2>
<table align="center" style="padding-top: 3%;">
<?php

if(isset($_GET['topic']))
{
    $name=$_GET['topic'];
    /*$link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select T_Name from topic where T_Name='$name'";
    $resultset=mysqli_query($link,$qry);
    while(list($name)=mysqli_fetch_row($resultset))
    */{
        $str=<<<Reply
            <tr><td width='50' height='30'>Question</td><td><input type="text" name="txt1" value="$name" readonly </td></tr>
            <tr><td>Reply</td><td><textarea name="txt2" value="reply"></textarea></td></tr>           
Reply;
        echo $str;
    }
}
if(isset($_POST['post']))
{
                    $name=$_POST['txt1'];
                    $id=$_GET['id'];
                    $reply=$_POST['txt2'];
                    $link=mysqli_connect("localhost","root","","DiscussionForum");
                    $qry="insert into topic values('$name','$id','$reply')";
                    $res=mysqli_query($link,$qry);

                    if($res)
                    {
                        echo "<br>Reply posted!";
                        header("location:showtopic.php");
                    }                      
                    else
                        echo "<br>Reply could not be posted. Try again.";
}
?>
<tr><td><input type="submit" name="post" value="Post Reply"/></td></tr>
</table></form></body></head></html>