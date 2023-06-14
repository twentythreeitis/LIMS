<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Types Of Tests </h2>
    <br>
    <form action='testlistdb.php' method="POST">
      <div class="input-row">
        <label for="namm">Name Of Test</label>
        <input type="text" name="namm" id="namm" />
      </div>
      <br>
      <div class="input-row">
        <label for="short">Short Name For Test</label>
        <input type="text" name="short" id="short" />
      </div>
      <br>
      <div class="input-row">
        <label for="sample">Sample Type</label>
        <input type="text" name="sample" id="sample" />
      </div>
      <br>
      <div class="input-row">
        <label for="price">Price Of Test</label>
        <input type="text" name="price" id="price" />
      </div>
      <br>
      <input type="submit" class="btn btn-primary" />
    </form>
    <hr>
    <form method="post" formaction="<<?php buttton() ?>">
    <input type="submit" class="btn btn-primary" name="read" value="Click To View" />
    <table cellpadding="20px">
      <thead>
        <tr>
          <th><h4>Name Of Test</h4></th>
          <th><h4>Short Name For Test</h4></th>
          <th><h4>Sample Type</h4></th>
          <th><h4>Price Of Test</h4></th>
          <th></th>
        </tr>
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
        $sql = "SELECT namm, short, sample, price FROM testlist";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["namm"]. "</td><td>". $row["short"]. "</td><td>" . $row["sample"] . "</td><td>" . $row["price"] . "</td></tr>";
        }
        echo "</table>";
        } else { echo "0 results"; }
        $conn->close();
        }
        ?>
      </thead>
      <tbody></tbody>
    </table>
  </body>
</html>