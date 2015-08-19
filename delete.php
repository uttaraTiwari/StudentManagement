<?php
$rollno=$_GET["rno"];
?>

    <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("dolphin",$con);
    $qry="delete from student where rollno='$rollno'";
    mysql_query($qry);
    mysql_close($con);
   
   header("location: update.php") ;
   ?>
    
