<?php
$rollno=$_POST["rno"];
$name=$_POST["nam"];
$address=$_POST["add"];
$class=$_POST["cls"];
?>
\<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dolphin</title>
</head>

<body bgcolor="#C6ECFB">
<table width="1029" height="536" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="241"><img src="images/[WallpapersMania]_vol100-087.jpg" width="1018" height="323" /></td>
  </tr>
  <tr>
    <td height="58"><table width="1019" height="38" border="0">
      <tr>
        <td colspan="5"><hr color="#2D66EC" /></td>
        </tr>
      <tr>
        <td><h2><a href="index.php">Home</a></h2></td>
        <td><h2><a href="insert.php">Insert</a></h2></td>
        <td><h2><a href="display.php">Display</a></h2></td>
        <td><h2><a href="update.php">Update</a></h2></td>
        <td><h2><a href="search.php">Search</a></h2></td>
      </tr>
      <tr>
        <td colspan="5"><hr color="#2D66EC" /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="66">
    <?php
    move_uploaded_file($_FILES["file"]["tmp_name"], "myphotos/".$_FILES["file"]["name"]);
$image=$_FILES["file"]["name"];
    $con=mysql_connect("localhost","root","");
    mysql_select_db("dolphin",$con);
    $qry="insert into student(rollno,name,address,class,image)values('$rollno','$name','$address','$class','$image')";
    mysql_query($qry);
    mysql_close($con);
    echo"<h1 color='green' align='center'> Record Saved ! ! !</h1>";
    ?>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
