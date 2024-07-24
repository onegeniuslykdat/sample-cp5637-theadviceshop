<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Advice Shop - Login</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); 
if (isset($_SESSION['username'])) {
    echo "<h2>Already Logged In</h2>";
}
else {
    echo "<h2>Login</h2>
    <div id='content'>
<form action='login.php?page=<?php echo $name; ?>' method='post'>
<p>
<label for='username'>JCU Number:</label>
<input name='username' id='username' type='text' placeholder='JCU Number' required>
</p>
<p>
<label for='fname'>First Name:</label>
<input name='fname' id='fname' type='text' placeholder='First Name' required>
</p>
<p>
<label for='lname'>Last Name:</label>
<input name='lname' id='lname' type='text' placeholder='Last Name' required>
</p>
<p>
<input name='submit' type='submit' value='JCU Login'>
</p>
</form>
</div>
<p>&nbsp;</p>";
}
include("inc_footer.php"); ?>
</body>
</html>