
<?php
//connect to MySQL DBMS
//$hostname="localhost";
//$username="mitchell";
//$password="dsilva";
$conn=mysql_connect("localhost","root","");
//echo "Connected to MySQL<br>";
//select database
$db=mysql_select_db("asm",$conn);
//Writing and Executing queries
$email=$_POST["email"];
$password=$_POST["password"];
if(!$conn){
	die("Unable to connect");
}		
else{
	$query="SELECT email,password FROM  login WHERE email='$email' and password='$password'";
	$result=mysql_query($query,$conn);
	if(!$result){
		die("Error");
	}
	else
	{
		if(mysql_num_rows($result)!=0)
		{
			header('Location: http://www.google.com');
		}
		else
		{
			/*while($row = mysql_fetch_assoc($result)){
    		foreach($row as $cname => $cvalue){
        print "$cname: $cvalue\t";
    }
    print "\r\n";*/
			echo "Invalid username or password";
		}
	}
	die();
}

mysql_close($conn);
echo "<script>window.location.href='finallog.html'</script>"
?>
