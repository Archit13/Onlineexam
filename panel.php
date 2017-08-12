<?php
include("signup.php");
mysql_query("delete from exam where id='".$_GET['id']."'");
$q=mysql_query("select * from exam");
//$arr=mysql_fetch_array($q);
$c=mysql_num_rows($q);
?>
<div align="left"></div>
<table width="366" height="139" border="1" align="center">
<tr>
  <td width="61">id</td>
    <td width="61">Username</td>
    <td width="33">Email</td>
    <td width="52">phoneno</td>
    <td width="59">password</td>
    <td width="60">Actions</td>
  </tr>
  <?php
  if($c>0)
  {
  
  while($arr=mysql_fetch_array($q))
  {
  ?>
  <tr>
    <td><?php echo $arr['0'] ?>&nbsp;</td>
    <td><?php echo $arr['Username'] ?> &nbsp;</td>
    <td><?php echo $arr['Email']?> &nbsp;</td>
    <td><?php echo $arr['phoneno'] ?> &nbsp;</td>
    <td><?php echo $arr['password'] ?> &nbsp;</td>
    <td><a href="panel.php?id=<?php echo $arr['id'] ?>"><img src="img/symbols-delete.png" width="56" height="50"/></a></td>
  </tr>
  <?php
  }
 }
  ?>
  <tr>

    <td height="23" colspan="5">no record found   </td>
</table>


