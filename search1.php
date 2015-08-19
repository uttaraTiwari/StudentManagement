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
<title>Untitled Document</title>
</head>
<body bgcolor="#BE9981">
<table width="601" border="0" align="center" bgcolor="#FFFFFF">
  <tr bgcolor="#F7EADF">
    <td height="75">
	<h1 align="center">
	Welcome To Student Management System
	</h1>
	 </td>
  </tr>
  <tr>
    <td><table width="595" bgcolor="#DFE7EC" border="0">
      <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="insert.php">Insert</a></td>
        <td><a href="display.php">Display</a></td>
        <td><a href="update.php">Update</a></td>
        <td><a href="search.php">Search</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="15"><hr size="4" color="#C0D8E9" /></td>
  </tr>
  <tr>
    <td height="191">
	
	
	
	<form method="post" action="search.php">
	<table width="417" align="center" bgcolor="#36E4E0" border="0">
  <tr>
    <td align="center"><h1>Rollno 
      <input type="text" name="rno" /> <input type="submit" name="Submit" value="Search" /></h1></td>
  </tr>
</table>
</form>
<p>

	
	
	
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
		
		
	echo  "	<table bgcolor='#E7CAB8' width='442' align='center' border='0'>
  <tr bgcolor='#36E4E0'>
    <td><h2>Rollno</h2></td>
    <td><h2>Name</h2></td>
    <td><h2>Address</h2></td>
    <td><h2>Class</h2></td>
  </tr>";
		
		
		while($row=mysql_fetch_array($result))
		{
		  echo "<tr>";
		    echo "<td><h2>".$row["rollno"]."</h2></td>";
		    echo "<td><h2>".$row["name"]."</h2></td>";
		    echo "<td><h2>".$row["address"]."</h2></td>";
		    echo "<td><h2>".$row["class"]."</h2></td>";
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
  <tr>
    <td><hr size="4" color="#C0D8E9" /></td>
  </tr>
</table>
</body>
</html>