<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="index.php">
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2"     text-align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['username'];
            if (empty($name)) {
            echo "Name is empty";
            echo "<br>";
            } else {
            echo $name;
            echo "<br>";
            }

            $pas = $_POST['password'];
            if (empty($pas)) {
            echo "Pass is empty";
            } else {
            echo $pas;
                }
            }
        ?>
</body>
</html>