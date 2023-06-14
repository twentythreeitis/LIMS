<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Reports </h2>
    <br>
    <form action='repotdb.php' method="POST">
      <div class="input-row">
        <label for="name">Patient ID</label>
        <input type="text" name="patiid" id="patiid" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Patience Name</label>
        <input type="text" name="paname" id="paname" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Gender</label>
        <input type="text" name="gender" id="gender" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Age</label>
        <input type="text" name="age" id="age" />
      </div>
      <br>
      <div class="input-row">
        <label for="emailo">Phone</label>
        <input type="text" name="phone" id="phone" />
      </div>
      <br>
       <div class="input-row">
        <label for="emailo">Tests</label>
        <input type="text" name="tst" id="tst" />
      </div>
      <br>
      <div class="input-row">
        <label for="emailo">Status</label>
        <input type="text" name="stat" id="stat" />
      </div>
      <br>
      <input type="submit" class="btn btn-primary" />
      
    </form>
    <hr>
    <form method="post" formaction="<<?php buttton() ?>">
    <input type="submit" class="btn btn-primary" name="read" value="Click To View" />
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
      </thead>
      <tbody>
        <?php
        if (array_key_exists('read', $_POST)) {
        buttton();
        }
        function buttton(){
        $conn = mysqli_connect("localhost", "root", "", "odlms_db");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT patiid, paname, gender, age, phone, tst, stat FROM repot";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["patiid"]. "</td><td>" . $row["paname"] . "</td><td>"
        . $row["gender"]. "</td><td>" . $row["age"] . "</td><td>". $row["phone"]. "</td><td>". $row["tst"]. "</td><td>". $row["stat"]. "</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        }
        ?>
      </tbody>
    </table>
  </body>
</html>