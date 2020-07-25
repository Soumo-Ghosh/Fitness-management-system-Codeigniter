<html>
<head>
<title>members signin</title>
<body>
<form action="<?php echo base_url();?>index.php/MyController/memberdosignup" method="post">
Name:<input type="text" name="name"><br>
Email:<input type="email" name="email"><br>
Phone:<input type="number" name="phone"><br>
password:<input type="password" name="password"><br>
<input type="submit" value="signup">
</form>
</body>
</html>