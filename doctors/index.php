<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Doctors Details </h2>
    <br>
    <form action='doctordb.php' method="POST">
      <div class="input-row">
        <label for="name">Name Of Doctor</label>
        <input type="text" name="namd" id="namd" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Doctor ID</label>
        <input type="text" name="doctorid" id="doctorid" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Phone</label>
        <input type="text" name="phoned" id="phoned" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Address</label>
        <input type="text" name="addressd" id="addressd" />
      </div>
      <br>
      <div class="input-row">
        <label for="emailo">Email</label>
        <input type="text" name="emaild" id="emaild" />
      </div>
      <br>
       <div class="input-row">
        <label for="emailo">Commision</label>
        <input type="text" name="commision" id="commision" />
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
          <th><h4>Name Of Doctor</h4></th>
          <th><h4>Doctor ID</h4></th>
          <th><h4>Phone</h4></th>
          <th><h4>Address</h4></th>
          <th><h4>Email</h4></th>
          <th><h4>Commision</h4></th>
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
        $sql = "SELECT namd, doctorid, phoned, addressd, emaild, commision FROM doctor_list";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["namd"]. "</td><td>" . $row["doctorid"] . "</td><td>"
        . $row["phoned"]. "</td><td>" . $row["addressd"] . "</td><td>". $row["emaild"]. "</td><td>". $row["commision"]. "</td></tr>";
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