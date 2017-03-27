<?php
if(isset($_POST['submit'])==true)
{
	$con=mysqli_connect('localhost','root','','client1')or die("couldnot connect server");
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$salary=$_POST['sal'];
	$query="insert into client(id,name,age,salary) values(UNHEX(REPLACE(UUID(),'-','')),'$name','$age','$salary')";
	mysqli_query($con,$query);
	
	//echo "<table border=1>";
	$query1="select * from client";
	$var=array();

	$result=mysqli_query($con,$query1);
	//$emparray=array();
	while($row=mysqli_fetch_array($result))
	
{
	
		$var[]=$row['name'];
		$var[]=$row['age'];
		$var[]=$row['salary'];
}
		
	
	print json_encode($var);
}
?>
