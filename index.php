<head>
<body>
<?php
mysql_connect("localhost","DBLOGINNAME","DBLOGINPASS")or die("cannot connect"); 
mysql_select_db("DBNAME")or die("cannot select DB");
mysql_query("INSERT INTO `TABLENAME` (`ROW1`, `ROW2`) VALUES ('ROW1VALUE', AES_ENCRYPT('ROW2VALUE', 'ENCRYPTIONCODE'))");

$sql = mysql_query("SELECT AES_DECRYPT(ROW2,  'ENCRYPTIONCODE')  FROM `TABLENAME` where ROW1 = 'VALUE');

while ($row = mysql_fetch_array($sql))
{
echo $row["AES_DECRYPT(ROW2,  'ENCRYPTIONCODE')"] ;
}

?>
</body>
</html>
