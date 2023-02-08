<?php
session_start();
if(empty($_SESSION['email']))
{
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(projectimg.jpg);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  cellspacing="00" cellpadding="00">
  <tr bgcolor="">
    <th width="7%" scope="col">&nbsp;</th>
    <th width="12%" scope="col">  </th>
    <th width="62%" scope="col"><font size="8" color="Black">Project Management System</font></th>
    <th width="13%" scope="col"><font size="5" color="Black">&nbsp;</font></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><br/><br/><div style="width:50%;background-color:Skin; margin-left:24%;margin-top:100px;border:0px solid black;">
    	<br><br>
                <form name="login" action="chk.php" method="post">
                    
        <table width="100%"  cellspacing="02" cellpadding="05">
  <tr>
      <th colspan="2" scope="col"><font size="9">LOG IN</font></th>
    </tr>
  <tr>
      <td align="right"><font size="5"><B> User Id</b> &nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="text" name="id"/><br/>
    </td>
  </tr>
  <tr>
      <td align="right"><font size="5"> <B>Password</b> &nbsp;:&nbsp;</font></td>
    <td><input style="height: 20px; font-size: 15px;" type="password" name="pass" /></td>
  </tr>
  <tr>
      <td align="right"><font size="5"> <B> Log_As </b> &nbsp;:&nbsp;</font></td>
    <td>
        <select name="role" style="width: 13em; height: 2em; font-size: 15px;">
        <option value="Student">Student</option>
        <option value="Faculty">Faculty</option>
        <option value="Admin">Admin</option>          
        </select>
      </td>
  </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" style="width: 4em;  height: 2em; font-size: 20px;" name="register" value="Submit" /></td>
            </tr>
</table> 

        <br/>
        &nbsp;
        </form>
    	</div>
     </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <marquee> <B>WELCOME TO CSIBER </B> </marquee>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</div>
    
</html>

<?php
}
else
{
header("location:Admin.php");
}

?>