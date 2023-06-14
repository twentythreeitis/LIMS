<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Antibiotics Details </h2>
    <form action='contactanti.php' method="POST">
      <div class="input-row">
        <label for="name">Serial No.</label>
        <input type="text" name="serialno" id="serialno" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Name Of Antibiotic</label>
        <input type="text" name="antiname" id="antiname" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Commercial Name Of Antibiotic</label>
        <input type="text" name="commname" id="commname" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Price</label>
        <input type="text" name="antiprice" id="antiprice" />
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
          <th><h4>Serial No.</h4></th>
          <th><h4>Name Of Antibiotic</h4></th>
          <th><h4>Commercial Name Of Antibiotic</h4></th>
          <th><h4>Price</h4></th>
          <th></th>
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
        $sql = "SELECT serialno, antiname, commname, antiprice FROM antibiotics";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["serialno"]. "</td><td>" . $row["antiname"] . "</td><td>"
        . $row["commname"]. "</td><td>" . $row["antiprice"] . "</td></tr>";
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