<?php
$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
$query2 = "SELECT * FROM ceco_database";
$result = $mysqli->query($query2);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table id='tsa' border='1' id='example' class='table table-striped responsive-utilities table-hover'>
            <thead>
               <tr>
               
               <th>Name</th>
               <th>Email</th>
               <th>Message</th>
               
               </tr>
            </thead>
              ";
    while($row = $result->fetch_assoc()) {
       echo "<tr id='green' ",">",
            
            "<td>", $row["name"],"</td>",
            "<td>", $row["email"],"</td>",
            "<td>", $row["message"],"</td>",
            "</tr>";
            };
    echo "</table>";
            
}
?>