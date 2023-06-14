<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Cultures </h2>
    <br>
    <form action='culturedb.php' method="POST">
      <div class="input-row">
        <label for="name">Name Of Culture</label>
        <input type="text" name="namc" id="namc" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Sample ID</label>
        <input type="text" name="samplec" id="samplec" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Price</label>
        <input type="text" name="pricec" id="pricec" />
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
          <th><h4>Name Of Culture</h4></th>
          <th><h4>Sample ID</h4></th>
          <th><h4>Price</h4></th>
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
        $sql = "SELECT namc, samplec, pricec FROM cultures";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["namc"]. "</td><td>" . $row["samplec"] . "</td><td>"
        . $row["pricec"]. "</td></tr>";
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