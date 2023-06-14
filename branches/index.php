<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Hospital Branches</h2>
    <br>
    <form method="post" action="basedata.php">
      <div class="input-row">
        <label for="name">Name Of Organisation</label>
        <input type="text" name="nameo" id="nameo" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Phone</label>
        <input type="text" name="phoneo" id="phoneo" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Address</label>
        <input type="text" name="addresso" id="addresso" />
      </div>
      <br>
      <div class="input-row">
        <label for="discount">Discount</label>
        <input type="text" name="discounto" id="discounto" />
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
          <th><h4>Name Of Organisation</h4></th>
          <th><h4>Phone</h4></th>
          <th><h4>Address</h4></th>
          <th><h4>Discount</h4></th>
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
        $sql = "SELECT nameo, phoneo, addresso, discounto FROM branch";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nameo"]. "</td><td>". $row["phoneo"]. "</td><td>" . $row["addresso"] . "</td><td>" . $row["discounto"] . "</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        }
        ?>
      </tbody>
    </table>
        </div>
    </div>
</body>
</html>
