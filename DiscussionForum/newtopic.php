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
    <h1 align="center" style="padding-top: 5%;">Topics</h1>
    <form name="frm" method="post">
        <table align="center" style="padding-left: 10%;">
<?php

$link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select T_Name, Reply from topic where Reply in ('')";
    $resultset=mysqli_query($link,$qry);
    while(list($name, $reply)=mysqli_fetch_row($resultset))
    {
        echo "<tr><td>Topic:</td><td>$name</td>";
        echo '<td><a href="reply.php?topic='.urlencode($name).'">Write a reply</a><a href=#?id=$id</a></td></tr>';
    }


?>
</table>
</form>


</body>
</html>