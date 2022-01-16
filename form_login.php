<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style>
		*{
			margin:0;
			padding: 0;
			box-sizing: border-box;
		}
		html{
			height: 100%;
		}
		body{
			font-family: 'Segoe UI', sans-serif;;
			font-size: 1rem;
			line-height: 1.6;
			height: 100%;
		}
		.wrap {
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background: orange;
		}
		.login-form{
			width: 350px;
			margin: 0 auto;
			border: 1px solid #ddd;
			padding: 2rem;
			background: #ffffff;
		}
		.form-input{
			background: #fafafa;
			border: 1px solid #eeeeee;
			padding: 12px;
			width: 100%;
		}
		.form-group{
			margin-bottom: 1rem;
		}
		.form-button{
			background: orange;
			border: 1px solid #ddd;
			color: #ffffff;
			padding: 10px;
			width: 100%;
			text-transform: uppercase;
		}
		.form-button:hover{
			background: yellow;
			color: #000000;
		}
		.form-header{
			text-align: center;
			margin-bottom : 2rem;
		}
		.form-footer{
			text-align: center;
		}
	</style>
</head>
<body>
<?php
echo "<h2>Login</h2>
<form method=post action=cek_login.php>
<table>
<tr><td>Username</td><td> : <input name='username' type='text'></td></tr>
<tr><td>Password</td><td> : <input name='password' type='text'></td></tr>
<tr><td>Captcha<br>
<img src='captcha.php' /></td><td> : <input name='captcha_code' type='text'></td></tr>
<tr><td colspan=2><input type='submit' value='LOGIN'></td></tr>
</table>
</form>";
?>