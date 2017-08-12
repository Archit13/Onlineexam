<?php
include("insert.php");
extract($_REQUEST);
if(isset($_REQUEST['Submit']))
{
mysql_query("insert into exam set Username='".$username."',Email='".$email."',phoneno='".$phoneno."',password='".$password."'");
                                                      $msg="successfully created new account";
													  //header("location: index.php");
													  }
													  

?>
<style type="text/css">
<!--
.style5 {color: #CCFF66}
.style6 {font-weight: bold; font-size: large;}
.style9 {color: #110000}
body {
	background-color: #EEEEEE;
	background-image: url();
}
-->
</style>
<body tracingsrc="img/quiz-software.png" tracingopacity="100"><form action="" method="get" class="style5">
  <div align="center" class="style9">
    <table width="306" border="0" bgcolor="#6699FF">
      <tr>
        <td colspan="2"><span class="style6">welcome to sign up page </span></td>
      </tr>
      <tr>
        <td width="57">&nbsp;</td>
        <td width="233"><em>Already have an account</em><a href="index.php"> login here </a></td>
      </tr>
      <tr>
        <td>username</td>
        <td><input name="username" type="text"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" type="text"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>phone no. </td>
        <td><input name="phoneno" type="text"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>password</td>
        <td><input name="password" type="password"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>confirm password </td>
        <td><input name="confirmpassword" type="text"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      
      <tr>
        <td height="23">&nbsp;</td>
        <td><input name="Submit" type="submit" id="Submit" value="Submit"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
<div align="right"></div></form>
