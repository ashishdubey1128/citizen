<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<script type="text/javascript" >
   history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="background: url(https://images.unsplash.com/photo-1534844978-b859e5a09ad6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d4a8317a07ad1f11aec1735bae0cc83b&auto=format&fit=crop&w=1567&q=80);background-size: cover;">

		<div class="nav1">
		<a href="site.html"><img src="logo.png" height="100px"></a>
	</div>
	<div class="container">
		<form method="post" action="">
			<table class="table table-hover" style="width: 50%;font-weight: 700;background-color: grey;margin-top: 15%;margin-left: 25%;">
				<tr> 
					<td>User Name</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="text" name="aname"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td style="text-align: center;padding-top: .5em;padding-bottom: .5em"><input type="password" name="pass"></td>
				</tr>
			</table>
		
	<input type="submit" name="submit" value="Login" class="btn btn-success btn large" style="margin-left: 45%;width: 100px;">
	</form>
	</div>

</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$ad=$_POST['aname'];
	$pass=$_POST['pass'];
	if($ad=='ashishdubey' && $pass=='ashish')
	{
		header("Location: adminpage.html");
	}
	else
	{
		echo "<script type='text/javascript'>alert('INVALID CREDENTIALS');</script>";
	}
}
?>