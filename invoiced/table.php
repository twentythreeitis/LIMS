<table cellpadding ="20px">
      <thead>
        <tr>
          <th><h4>Patient ID</h4></th>
          <th><h4>Patience Name</h4></th>
          <th><h4>Subtotal</h4></th>
          <th><h4>Discount</h4></th>
          <th><h4>Total</h4></th>
          <th><h4>Paid</h4></th>
          <th><h4>Dues</h4></th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "odlms_db");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT patiid, paname, subtotal, disco, totalo, paid, dues FROM invoiced";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["patiid"]. "</td><td>" . $row["paname"] . "</td><td>"
        . $row["subtotal"]. "</td><td>" . $row["disco"] . "</td><td>". $row["totalo"]. "</td><td>". $row["paid"]. "</td><td>". $row["dues"]. "</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        ?>
      </thead>
      <tbody></tbody>
    </table>