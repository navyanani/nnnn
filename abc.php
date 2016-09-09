<?php
<html>
<head>
<title>Class Info</title>
</head>
<body>
<a href="logout.php" style="float: right;">Logout</a> <form method="post">
class:<select name="pages" onchange="this.form.submit();">
<option value="">Select Class</option>
<option value="sc" <?php if(isset($_POST['pages']) && $_POST['pages']=="sc"){ echo 'selected' ; }?>>sc</option>
<option value="sl" <?php if(isset($_POST['pages']) && $_POST['pages']=="sl"){ echo 'selected' ; }?>>sl</option>
<option value="st" <?php if(isset($_POST['pages']) && $_POST['pages']=="st"){  echo 'selected' ; }?>>st</option>
</br></br>
<?php echo $result;?>
</body>
</html>
?>