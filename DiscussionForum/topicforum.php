<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="" />
    <link href="style.css" rel="stylesheet" title="Style" />
	<title>Edit Records</title>
</head>

<body bgcolor="teal" text="white">
    <a href="login.html"><h5 align="right">Logout</h5></a>
    <h1 align="center" style="padding-top: 5%;">Topics</h1>
    <form name="frm" method="post">
        <table align="center">
        
            <?php
                if(isset($_GET['cid']))
                {
                    $res[1]=$_GET['cid'];
                    $link=mysqli_connect("localhost","root","","DiscussionForum");
                    $qry="select C_Name from category where C_ID=$res[1]";
                    $resultset=mysqli_query($link,$qry);
                    while(list($id)=mysqli_fetch_row($resultset))
                    {
                        $str=<<<Update
                        <tr><td>Category</td><td><input type="text" name="txt1" value="$id" readonly </td></tr>
                        <tr><td>Question/Topic</td><td><textarea name="txt2" value="topic"></textarea></td></tr>
                        
Update;
                        echo $str;
                    }
                }
                if(isset($_POST['create']))
                {
                    $id=$_GET['cid'];
                    $name=$_POST['txt2'];
                    $link=mysqli_connect("localhost","root","","DiscussionForum");
                    $qry="insert into topic values('$name','$id','')";
                    $res=mysqli_query($link,$qry);

                    if($res)
                    {
                        echo "<br>New topic created!";
                        header("location:newtopic.php");
                    }                      
                    else
                        echo "<br>Topic could not be created. Try again.";
                }
                
            ?>
            <tr><td colspan=2><input type="submit" name="create" value="Create Topic"></td></tr>
        </table>
    </form>


</body>
</html>