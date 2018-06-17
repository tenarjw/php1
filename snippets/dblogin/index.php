<?php
include('classes.inc.php');
?>

<html>
<head>
    <title>Login - demo</title>  
</head>
<body>
    <div class="container" id="content">
     <h2>Login</h2>
	<form action="login.php" method="POST">
		<table>
			<tr>
				<th>Username</th>
				<td><input name="username" type="text"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input name="password" type="password"></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Go"></td>
			</tr>
		</table>
	</form>

</body>

</html>