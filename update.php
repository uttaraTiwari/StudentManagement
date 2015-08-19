<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dolphin</title>
<script type="text/javascript">
function delete()
{
alert("Are You sure! You want to delete this record");
}
</script>
</head>

<body bgcolor="#C6ECFB">
<table width="1029" height="589" border="0" align="center" bgcolor="#FFFFFF">
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
    <td height="119">
    <table width="475" align="center" bgcolor="#9DF0F7" border="0">
    <tr bgcolor="#36E4E0">
    <td height="28"><h2>Rollno</h2></td>
    <td><h2>Name</h2></td>
    <td><h2>Address</h2></td>
    <td><h2>Class</h2></td>
        <td><h2>Image</h2></td>
    <td></td>
    <td></td>
    </tr>
    <?php
    $con=mysql_connect("localhost","root","");
    mysql_select_db("dolphin",$con);
    $qry="select * from student";
    $result=mysql_query($qry);
    while($row=mysql_fetch_array($result))
    {
    echo "<tr>";
    echo  "<td><h3>".$row["rollno"]."</h3></td>";
    echo  "<td><h3>".$row["name"]."</h3></td>";
    echo  "<td><h3>".$row["address"]."</h3></td>";
    echo  "<td><h3>".$row["class"]."</h3></td>";
echo "<td>
	  
	           <img src='myphotos/".$row["image"]."' width='80' height='50'>
	  
	       </td>";    echo "<td>
    <a href='edit.php?rno=".$row["rollno"]."'>
    <input type='button' name='edit' value='  Edit  '/>
			  </a></td>";
	echo "<td>
	 <a href='delete.php?rno=".$row["rollno"]."'>
      <input type='button' name='delete' value='Delete'/>
			 </a>
 </td>"   ;
    echo "</tr>";
    }
    mysql_close($con);
    ?>
    </table>
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
