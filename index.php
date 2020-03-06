<!DOCTYPE HTML>
<html>
<head>
<title>Login Sistem</title>
<style type="text/css">
body {
}
#body {
	position:absolute;
 	margin:auto;
 	left:0;
	right:0;
	top:0;
	bottom :0;	
	border:1px solid #333;;
}

#log_head{
	background-image: url(images/menu-biru.gif);
	padding:8px;
	border:1px solid #000;;
	color:#FFF;
	text-align:center;
	margin-bottom:10px;
}
</style>

</head>
<body>
<div id="body" style="width:350px; height:160px;">
	
    <div id="log_head"><strong>Menu Login</strong>
    </div>
    <div id="log_cont">
    <form action="cek-login.php" method="POST">
    <table width="100%" style="background:#FFF; ">
    	<tr>
        	<td width="20%">Username</td>
            <td>:</td>
            <td><input type="text" name="user" size="30%" required></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td>:</td>
            <td><input type="password" name="pass" size="30%" required></td>
        </tr>
        <tr>
        	<td></td>
            <td></td>
            <td><button type="submit" name="log">LOGIN</td>
        </tr>
    </table>
    </form>
    
    
</div>
</body>
</html>