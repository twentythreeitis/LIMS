<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Home Visits </h2>
    <br>
    <form action='homevisitdb.php' method="POST">
      <div class="input-row">
        <label for="name">Name Of Patient</label>
        <input type="text" name="nahv" id="nahv" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Phone</label>
        <input type="text" name="phonehv" id="phonehv" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Address</label>
        <input type="text" name="pricehv" id="pricehv" />
      </div>
      <br>
        <div class="input-row">
        <label for="phone">Visit Date</label>
        <input type="text" name="datehv" id="datehv" />
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
          <th><h4>Name Of Patient</h4></th>
          <th><h4>Phone</h4></th>
          <th><h4>Address</h4></th>
          <th><h4>Visit Date</h4></th>
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
        $sql = "SELECT nahv, phonehv, pricehv, datehv FROM homevisit";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nahv"]. "</td><td>" . $row["phonehv"] . "</td><td>"
        . $row["pricehv"]. "</td><td>" . $row["datehv"]. "</td></tr>";
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