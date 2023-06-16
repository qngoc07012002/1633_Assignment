<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pet Shop Store Backend</title>
<link rel="shortcut icon" href="img/petshop_icon.ico" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<?
	$action = $_GET['action'];
?>


<body class="bodylogin">
	<div class="login">
    <div class="logo">
    <img src="img/petshop.png"  /> </div>
    
	<div class="box">
      <form action="validateuser.php" method="post">
        <table width="260" cellpadding="0" cellspacing="0">
            <tr height="30px">
            <td width="92" align="right"><b>User Name:<b></td>
          <td width="124"><input name="username" type="text" id="username" size="20" /></td>
        </tr>
        <tr height="30px">
            <td align="right"><b>Password:</b></td>
            <td><input name="password" type="password" id="password" size="20" /></td>
        </tr>
        <tr align="center" height="30px">
        <td colspan="2"><input class="button" type="submit" value="Log In" /><input class="button" type="reset" value="Reset" /></td>
        </tr>
        </table>
      </form>
     </div>
     <?
	 	if($action == 'fail'){
			echo('<div class="faillogin" align="center"><font color="#CC0000">Invalid username and password!!</font></div>');
		}
	 ?>
     
    </div>
</body>
</html>
