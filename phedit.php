<html>
<title> City Health Office - Dental Services</title>
<head>
<style>
input[type=submit] {
   background-color: #008CBA;
    border: 5px solid;;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
a{
   background-color: #008CBA;
    border: 5px solid;;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;	
}
</style>
</head>
<center>
  <p><font size="4"><img src="logo_main.png" alt="Logos" width="600" height="175" align="middle" hspace="20"><br>
            
	  <img></font></p>
</center>
<center>
 
    <h1 style="font-family:Tahoma">Pharmacy Services Division</h1>
</center>

<body bgcolor="#31E509">
<?php


$Serving = $_POST['serving'];


$connection = mysql_connect('localhost','cityhealth','123');
mysql_select_db('cho') ;
$query 	= "UPDATE queue SET Serving ='$Serving'WHERE Counter='C3' ";
$result = mysql_query($query) ;
mysql_close($connection);
?>
<center>
<h1 style="font-family:Arial">Update Process Done </h1><br>
<a href="ph.php"> View </a>
</center>
</body>
</html>
