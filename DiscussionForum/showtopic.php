<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
    <link href="style.css" rel="stylesheet" title="Style" />
	<title>Topics</title>
</head>

<body bgcolor="teal" text="white">
<a href="login.html"><h5 align="right">Logout</h5></a>
    <h2 align="center" style="padding-top: 5%;">Topics</h2>
    <form name="frm" method="post">
        <table align="center" style="padding-top: 2%">
        
<?php

if(isset($_GET['tid']))
{
    $res[1]=$_GET['tid'];
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select T_Name, C_ID from topic where C_ID=$res[1]";
    $resultset=mysqli_query($link,$qry);
    while(list($topic, $id)=mysqli_fetch_row($resultset))
    {
        echo "<tr><td>Topic:</td><td>$topic</td>";
        echo '<td><a href="reply.php?topic='.urlencode($topic).'">Write a reply</a><a href=#?id=$id</a></td></tr>';
    }
    /*$qry="select Reply from topic where C_ID=$res[1] and Reply in ('')";
    $resultset=mysqli_query($link,$qry);
    while(list($reply)=mysqli_fetch_row($resultset))
    {
        echo "<tr><td>Replies:</td><td>$reply</td></tr>";
    }*/
    
}
/*if(isset($_GET['del']))
{
    {
        $delete=$_GET['del'];
        $link=mysqli_connect("localhost","root","","DiscussionForum");
        $qry="delete from topic where C_ID=$delete";
        $res=mysqli_query($link,$qry);

        if($res)
        {
            echo "<br>Deleted";
            header("location:showtopic.php");
        }                      
            else
            echo "<br>This record could not be deleted!";
    }
}*/

else
{
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select T_Name, Reply from topic where Reply not in ('')";
    $resultset=mysqli_query($link,$qry);
    while(list($name, $reply)=mysqli_fetch_row($resultset))
    {
        echo "<tr><td>Topic:</td><td>$name</td>";
        echo '<td><a href="reply.php?topic='.urlencode($name).'">Write a reply</a><a href=#?id=$id</a></td></tr>';
        echo "<tr><td>Replies:</td><td>$reply</td></tr>";
    }
}
?>

</table>
</form>


</body>
</html>