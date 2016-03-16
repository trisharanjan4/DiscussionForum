<?php

$link=mysqli_connect("localhost","root","","DiscussionForum");
$qry="select * from category";
$resultset=mysqli_query($link,$qry);
while($res=mysqli_fetch_row($resultset))
{
    echo "<tr style=background-color:lightgrey;><td>$res[0]</td><td>$res[2]</td><td><a href=topicforum.php?cid=$res[1]>Select</a></td><td><a href=showtopic.php?tid=$res[1]>Select</a></td></tr>";
}

?>