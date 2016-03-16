<html>
<head>
<title>Categories page</title>
<link href="style.css" rel="stylesheet" title="Style" />
</head>
<body>
<a href="login.html"><h5 align="right">Logout</h5></a>
<h2 align="center" style="padding-top: 5%;">Categories</h2>
<table align="center" cellspacing=2 cellpadding="5" style="padding-top: 1%; padding-left: 12%;">
<tr style="background-color:black;color:white;"><th>Category</th><th>Description</th><th>Add New Topic</th><th>Select Category</th></tr>
<?php
if(isset($_POST['save']))
{
    $C_Name=$_POST['cat'];
    $C_ID=$_POST['id'];
    $C_Desc=$_POST['desc'];
    
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="insert into category values('$C_Name','$C_ID','$C_Desc')";
    $res=mysqli_query($link, $qry);
    if($res)
    {
        echo '<script language="javascript">alert("The saving was successful.");
                </script>';
    }  
    else
    {
         echo '<script language="javascript">alert("The saving was unsuccessful.");</script>';
    }
    $qry="select * from category";
    $resultset=mysqli_query($link,$qry);
    while($res=mysqli_fetch_row($resultset))
    {
        echo "<tr style=background-color:lightgrey;><td>$res[0]</td><td>$res[2]</td><td><a href=topicforum.php?cid=$res[1]>Add</a></td><td><a href=showtopic.php?tid=$res[1]>Select</a></td></tr>";
    }
}
else if(isset($_POST['show']))
{
    $link=mysqli_connect("localhost","root","","DiscussionForum");
    $qry="select * from category";
    $resultset=mysqli_query($link,$qry);
    while($res=mysqli_fetch_row($resultset))
    {
        echo "<tr style=background-color:lightgrey;><td>$res[0]</td><td>$res[2]</td><td><a href=topicforum.php?cid=$res[1]>Add</a></td><td><a href=showtopic.php?tid=$res[1]>Show Topics</a></td></tr>";
    } 
}
?>
</table></body>
</html>
