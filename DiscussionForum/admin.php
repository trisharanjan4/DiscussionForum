<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
    <link href="style.css" rel="stylesheet" title="Style" />
	<title>Admin Page</title>
</head>

<body>
    <a href="login.html"><h5 align="right">Logout</h5></a>
    <table align="center" cellspacing=3 align=center cellpadding=5 style="padding-left: 10%; padding-top: 1%;">
        <tr style="background-color: black; color: white;"><th>Category ID</th><th>Category Name</th><th>Description</th><th>View Topics</th></tr>
<?php
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    echo "<h2 align=center style='padding-top: 4%;'>Welcome, Administrator</h2>";
    $qry="select * from category";
    $resultset=mysqli_query($link,$qry);
    $count=0;
    while($result=mysqli_fetch_row($resultset))
    {
        if($count%2==0)
            echo "<tr style=background-color:lightgrey;><td>$result[1]</td><td>$result[0]</td><td>$result[2]</td><td><a href=showtopic.php?tid=$result[1]>View</a></td></tr>";
        else
            echo "<tr style=background-color:grey;><td>$result[1]</td><td>$result[0]</td><td>$result[2]</td><td><a href=showtopic.php?tid=$result[1]>View</a></td></tr>";
        $count++;
    }
?>
</table>
<a href="categories.html" align="center"><h3>Add New Category</h3></a>
</body>
</html>