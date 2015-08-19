<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dolphin</title>
<script type="text/javascript">
function validation()
{
var rno=document.f1.rno.value;
var nam=document.f1.nam.value;
var add=document.f1.add.value;
var cls=document.f1.cls.value;

if(rno=="")
{
alert("Please Enter Rollno:");
document.f1.rno.focus();
return false;
}
if(nam=="")
{
alert("Please Enter Name:");
document.f1.nam.focus();
return false;
}
if(add=="")
{
alert("Please Enter Address:");
document.f1.add.focus();
return false;
}
if(cls=="")
{
alert("Please Enter Class:");
document.f1.cls.focus();
return false;
}
}
</script>
</head>

<body bgcolor="#C6ECFB">
<form action="save.php" method="post" enctype="multipart/form-data"  name="f1" onsubmit="return validation();">
<table width="1029" height="643" border="0" align="center" bgcolor="#FFFFFF">
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
    <td height="173"><table width="466" height="297" border="0" align="center" bgcolor="#9DF0F7" style="border:solid #727A9A">
      <tr>
        <td colspan="4" align="center" bgcolor="#36E4E0"><h1>Insert Student Record</h1></td>
        </tr>
      <tr>
        <td width="78">&nbsp;</td>
        <td width="167"><h2>Rollno:</h2></td>
        <td width="185"><input type="text" name="rno" /></td>
        <td width="18">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h2>Name:</h2></td>
        <td><input type="text" name="nam" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h2>Address:</h2></td>
        <td><input type="text" name="add" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><h2>Class:</h2></td>
        <td><input type="text" name="cls" /></td>
        <td>&nbsp;</td>
      </tr>
	<tr>
        <td>&nbsp;</td>
        <td><h2>Image:</h2></td>
        <td><input type="file" name="file" /></td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td colspan="4" align="center"><input type="submit" name="Submit" value="   Save   " /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
