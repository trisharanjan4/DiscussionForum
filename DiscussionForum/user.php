<html>
<head><title>Welocome-User</title>
<link href="style.css" rel="stylesheet" title="Style" />
<body>
<a href="login.html"><h5 align="right">Logout</h5></a>
<table align="center" cellspacing=3 align=center cellpadding=5 style="padding-left: 10%; padding-top: 1%;">
        <tr style="background-color: black; color: white;"><th>Category ID</th><th>Category Name</th><th>Add a New Topic</th><th>View Topics</th></tr>
<?php

$link=mysqli_connect("localhost","root","","DiscussionForum");

echo "<h2 align=center style='padding-top: 5%;'>Welcome, User</h2>";

$qry="select * from category";
$resultset=mysqli_query($link,$qry);
$count=0;
while($res=mysqli_fetch_row($resultset))
{
    if($count%2==0)
        echo "<tr style=background-color:lightgrey;><td>$res[0]</td><td>$res[2]</td><td><a href=topicforum.php?cid=$res[1]>Add</a></td><td><a href=showtopic.php?tid=$res[1]>View</a></td></tr>";
    else
        echo "<tr style=background-color:grey;><td>$res[0]</td><td>$res[2]</td><td><a href=topicforum.php?cid=$res[1]>Add</a></td><td><a href=showtopic.php?tid=$res[1]>View</a></td></tr>";
    $count++;
}

?>
</table></body></head></html>