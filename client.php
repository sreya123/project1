<!DOCTYPE html>
<html>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function status()
    {
        if(navigator.onLine)
        {
            alert("Browser is online");
        }
        else
        {
            alert("Browser is offline");
        }
    }
	 	
</script>
</head>
<body>
<form name="form" id="form" action="action.php" method="POST">
<table border="1">
<tr><td>Id:<input type="text" name="id" id="id" ></td></tr>
<tr><td>Name:<input type="text" name="name" id="name" ></td></tr>
<tr><td>age:<input type="text" name="age" id="age" ></td></tr>
<tr><td>salary:<input type="text" name="sal" id="sal1" ></td></tr>
<tr><td><input type="submit" name="submit" value="submit"  ></td></tr>
<button onclick="status();">Check connectivity status</button>
</table>
</form>
<br><hr><br>

</form>
</body>
</html>