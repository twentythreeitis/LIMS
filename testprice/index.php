<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Test Price </h2>
    <br>
    <form action='testpricedb.php' method="POST">
      <div class="input-row">
        <label for="name">Test</label>
        <input type="text" name="tets" id="tets" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Price</label>
        <input type="text" name="pricet" id="pricet" />
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
          <th><h4>Test</h4></th>
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
        $sql = "SELECT tets, pricet FROM testprice";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["tets"]. "</td><td>" . $row["pricet"]. "</td></tr>";
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