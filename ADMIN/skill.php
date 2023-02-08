<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];



include './connection.php';


 
   if (isset($_POST['view']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from faculty where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }

if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
if($role=="Admin")
{
?>


<!DOCTYPE>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="../css.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background-image:url(background.jpg);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
    <th width="74" scope="col">&nbsp;</th>
    
    <th width="646" scope="col"><font size="8" color="White">Project Management  System</font></th>
    <th width="140" scope="col"><font color="White" size="5">
	<?php
    print $role;
    ?></font></th>
    <th width="63" scope="col">&nbsp;</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="01" cellpadding="01">
  <tr bgcolor="blue">
      <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a href="student.php">Add Student</a></th>
      <th width="11%" scope="col"><a href="faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a href="stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a href="fa_search.php">Search Faculty </a></th>
      <th width="11%" scope="col"><a href="allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a href="skill.php">Skill Matrix</a></th>
      
      <th width="11%" scope="col"><a href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
</table>
    <br/><br/>
    <form method="post" action="skill.php">
      <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
       <table align="center"  cellspacing="05" cellpadding="05">
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Faculty ID&nbsp;:&nbsp;</font>  </td>
    
    <td><?php
            include '../connection.php';
             $sql="select f_id from faculty";
             $result=  mysqli_query($conn, $sql)
                     ?> <select name="id" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected="selected">Faculty</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['f_id'];
                     ?>
                 <option  value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
                     </select>
    </td></tr>
           <tr>
               <td align="center" colspan="3">
                   <input type="submit" id="bt" name="view" value="View" />  </td>
    <td>&nbsp;</td>
  </tr>
       </table>
          </div>
       <br/>
       <div style="background-color: beige; margin-left: 33%; alignment-adjust: central; width: 35%">
       <table align="center"  width="40%" cellspacing="05" cellpadding="05">
       <?php
       if (isset($_POST['view']))
       {
                    $username=$_POST['id'];
                    $sql1="select * from faculty where f_id ='$username'; ";
                    $rec=mysqli_query($conn, $sql1);
                    $row=mysqli_fetch_assoc($rec);
       }
       ?>
       
       <tr>
           <br/>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Faculty ID&nbsp;:&nbsp;</font></td>
    <td><br/><input id="in" type="text" readonly name="faid" value="<?php echo $row['f_id'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faname" value="<?php echo $row['name'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Qualification&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faqualification" value="<?php echo $row['qualification'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Domain&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="fadomain" value="<?php echo $row['domain'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Research&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faresearch" value="<?php echo $row['research'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Others&nbsp;:&nbsp;</font></td>
    <td><input id="in" type="text" readonly name="faothers" value="<?php echo $row['others'];?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>&nbsp;</td>
    <td colspan="2">   				
    <td>&nbsp;</td>
  </tr>
</table>
       </div><br/><br/>
        <br/></div>
  </form>
 <?php
}
elseif($role=="Faculty")    
{
?>
    <?php
   header('Location:../Admin.php');
   ?>
 <?php
}
else   
{
?>
    <?php
   header('Location:../Admin.php');
   ?>
<?php
}
?>
</table>
<?php
}
?>
      


