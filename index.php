<?php
extract($_REQUEST);
include("insert.php");

if(isset($_REQUEST['Submit']))
{
$q=mysql_query("select * from exam where Username='".$USERNAME."' and password='".$password."'");
$arr=mysql_fetch_array($q);

if($USERNAME==$arr[1] && $password==$arr[4])
             {
			header("location:ok.php");
			}else
			{
			$aaa="incorrect details";
			
             }

}















				
?>
<style type="text/css">
<!--
.style1 {color: #880000}
-->
</style>







<form action="" method="post" > 
  <div align="center">
    <table width="269" height="55" border="0">
      <tr>
        <td colspan="2"><div align="right" class="style4"><a href="signup.php">SIGN UP</a> </div></td>
      </tr>
      <tr>
        <td width="74" align="center">&nbsp;</td>
        <td>&nbsp;
            <div align="center"><?php echo "$aaa"?> </div>
          <div align="center"></div></td></tr>
      <tr>
        <td>USERNAME</td>
        <td><input type="text" name="USERNAME"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="24">PASSWORD</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td height="24">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="24">&nbsp;</td>
        <td><input type="submit" name="Submit" value="Submit"></td>
      </tr>
      <tr>
        <td height="24">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </table>
  </div>
</form>
