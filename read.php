<?php

include 'connect.php';

$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table border='1'>
              <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
              </tr>
    ";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>   
                <td>" . $row["email"] . "</td>
             </tr>
         ";
    }
} else {
    echo "0 results";
}
