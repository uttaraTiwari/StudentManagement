<?php
  
   if(isset($_POST["Submit"]))
	{
	 $rollno=$_POST["rno"];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dolphin</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body bgcolor="#C6ECFB">
<table width="1029" height="606" border="0" align="center" bgcolor="#FFFFFF">
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
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td>
    
	<form method="post" action="search.php">
	<table width="417" align="center" bgcolor="#36E4E0" border="0">
  <tr>
    <td align="center"><h1>Rollno 
      <input type="text" name="rno" /> <input type="submit" name="Submit" value="Search" /></h1></td>
  </tr>
</table>
</form>



	  <?php

    if(isset($_POST["Submit"]))
	{	  
	  
	    $con=mysql_connect("localhost", "root", "");
		mysql_select_db("dolphin", $con);
		$qry=" select * from student where rollno like '$rollno%' ";
		$result=mysql_query($qry);
        $num=mysql_num_rows($result);
		
		if($num>=1)
	{	
		
		
	echo  "	<table bgcolor='#36E4E0' width='442' align='center' border='0'>
  <tr bgcolor='#36E4E0'>
    <td>Rollno</td>
    <td>Name</td>
    <td>Address</td>
    <td>Class</td>
  </tr>";
		
		
		while($row=mysql_fetch_array($result))
		{
		  echo "<tr>";
		    echo "<td>".$row["rollno"]."</td>";
		    echo "<td>".$row["name"]."</td>";
		    echo "<td>".$row["address"]."</td>";
		    echo "<td>".$row["class"]."</td>";
		  echo "</tr>";
		}
	mysql_close($con);
	echo "</table>";
}
else
{
 echo "<div align='center'><font color='red'> No Record Found This Keyword</font></div>";
}	
	
}		
	  ?>
    
    </td>
  </tr>
</table>
</body>
</html>
