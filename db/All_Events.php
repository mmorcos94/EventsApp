<?php
$servername = "sql1.njit.edu";
$username = "bar25_proj";
$password = "bindi123";
$dbname = "bar25_proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Events</title>
<link rel="stylesheet" href="../jquery.mobile-1.4.5.css" />
    <script src="../jquery-1.11.0.js" type="text/javascript"></script>
    <script src="../jquery.mobile-1.4.5.js" type="text/javascript"></script>
    <meta name="viewport" content="width=device-width"/>
    
<style type="text/css">
    	  .bindi {
    width: 70px;
    float:right;
   vertical-align: middle;
    } 
    .ui-header .ui-title
    {
    	margin:0px;
    	
    }
    </style>
</head>

<body>
	<div data-role="header" style="background-color:#8d0904;color:#FFFFFF;">
        <h1 style="font-weight: normal;">NJIT EVENTS<img class="bindi" src="../images/icons-png/gmail.png"></h1>
       
 		<a href="homepage.html" data-rel="home" data-icon="home" data-iconpos="notext">Home</a>
     
    </div><!-- /header -->
    
    <?php
    $sql = "SELECT name FROM academics";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo  $row["name"]."" . "<br>";
    
    }
} else {
    echo "0 results";
}
$conn->close();
     ?>
   
       <div data-role="footer" style="background-color:#8d0904;color:#FFFFFF;"> 
	<h1 style="font-weight: normal;" >To Create Events Sign In with Webmail</h1> 
</div>   
           
         
    
       
</body>

</html>