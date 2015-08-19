<?php
$rollno=$_GET["rno"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dolphin</title>
</head>

<body bgcolor="#C6ECFB">
<table width="1029" height="542" border="0" align="center" bgcolor="#FFFFFF">
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
    <td height="72">
    <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("dolphin",$con);
    $qry="select * from student where rollno='$rollno'";
    $result=mysql_query($qry);
    while($row=mysql_fetch_array($result))
    {
    echo"<form method='post' action='updated.php' enctype='multipart/form-data'>";
    echo"<table align='center' bgcolor='#9DF0F7' width='400'>";
    echo"<tr>";
    echo"<td><h2 align='center'>Rollno</h2></td>";
    echo"<td align='center'><input type ='text' name='rno' value'".$row["rollno"]."'></td>";
    echo"</tr>";
         
     echo"<tr>";
     echo"<td ><h2 align='center'>Name</h2></td>";
     echo"<td align='center'><input type='text' name='nam' value='".$row["name"]."'></td>";
     echo"</tr>";
     
     echo"<tr>";
     echo"<td ><h2 align='center'>Address</h2></td>";
     echo"<td align='center'><input type='text' name='add' value='".$row["address"]."'></td>";
     echo"</tr>";
     
     echo"<tr>";
     echo"<td  ><h2 align='center'>Class</h2></td>";
     echo"<td align='center'><input type='text' name='cls' value='".$row["class"]."'></td>";
     echo"</tr>";
     
     echo"<tr>";
     echo"<td><h2 align='center'>Photo</h2></td>";
     echo"<td align='center'><input type='file' name='file' value='".$row["image"]."'></td>";
     echo"</tr>";
     
        echo "<tr>";
	  echo "<td></td>";
        echo "<td align='center'><input type='submit' value='update'> </td>";
        echo "</tr>";  
        echo"</table>";
     echo"</form>";
    }
    mysql_close($con);
    ?>
    
    
    </td>
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
