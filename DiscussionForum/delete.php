<?php

if(isset($_GET['del']))
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
}

?>