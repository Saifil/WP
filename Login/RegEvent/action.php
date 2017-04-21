<?php
//connect to MySQL DBMS
//$hostname="localhost";
//$username="mitchell";
//$password="dsilva";
$conn=mysql_connect("localhost","root","");
echo "Connected to MySQL<br>";
//select database
$db=mysql_select_db("asm",$conn);
//Writing and Executing queries
$query1="INSERT into login VALUES ('$_POST[fname]','$_POST[dob]','$_POST[email]','$_POST[user]','$_POST[password]','$_POST[cpassword]')";
$result=mysql_query($query1,$conn);
if($result){
echo "one record inserted";}
/*$query2="UPDATE login SET Password='abcd' WHERE Username='Rishi'";
$result=mysql_query($query2,$conn);
echo "one record updated";
/*$query3="DELETE from login WHERE ID='3' ";
$result=mysql_query($query3, $conn);
echo "one record deleted";
$query4="SELECT * from login";
$result=mysql_query($query4, $conn);
echo "<table><tr><th>Username</th><th>Password</th></tr>";
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['Username']."</td>";
echo "<td>".$row['Password']."</td>";
echo "</tr>";
}
echo "</table>";*/
//close connection
mysql_close($conn);
echo "<script>window.location.href='finallog.html'</script>"
?>