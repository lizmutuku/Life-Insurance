<!DOCTYPE html>

<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Client</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php 
include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Clients Information  
						<button class="btn" align="center"> 
						<a href="editClient.php" class="btn">Add Client</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$client_id = $_GET["client_id"];
		
		
	}
	$sql = "SELECT client_id, client_password, name, sex,birth_date, phone,agent_id,policy_id from client where client_id='$client_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateClient.php" method="post">';
	    echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" value=\"$client_id\"name=\"client_id\"/>"."</br>";
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">PASSWORD</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"client_password\" placeholder=\"password..\" value=\"$row[client_password]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
	    		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"clients NID..\" value=\"$row[nid]\">";
	echo "<label for=\"fname\">SEX</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Sex..\" value=\"$row[sex]\">";
	    echo "<label for=\"fname\">BIRTH DATE</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\" Birth Date..\" value=\"$row[birth_date]\">";
	    	echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" agent_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
	    echo "<label for=\"fname\">AGENT ID</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"agent_id\" placeholder=\"Agent ID..\" value=\"$row[agent_id]\">";
	    echo "<label for=\"fname\">POLICY ID</label>";
	    echo "<input type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"Policy ID..\" value=\"$row[policy_id]\">";
	
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deleteClient.php?client_id=".$client_id."'>Delete Client</a>";
echo "</div>\n";
echo "\n";

?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
