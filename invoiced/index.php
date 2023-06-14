<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Invoices </h2>
    <br>
    <form action='invoicedb.php' method="POST">
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
        <label for="phone">Subtotal</label>
        <input type="text" name="subtotal" id="subtotal" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Discount</label>
        <input type="text" name="disco" id="disco" />
      </div>
      <br>
      <div class="input-row">
        <label for="emailo">Total</label>
        <input type="text" name="totalo" id="totalo" />
      </div>
      <br>
       <div class="input-row">
        <label for="emailo">Paid</label>
        <input type="text" name="paid" id="paid" />
      </div>
      <br>
      <div class="input-row">
        <label for="emailo">Dues</label>
        <input type="text" name="dues" id="dues" />
      </div>
      <br>
      <input type="submit" class="btn btn-primary" /> 
      <hr>

  </form>
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
      <!--php code to print database value in the form of table-->
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
            }
            ?>
      </tbody>
    </table>
  </form>
  </body>
</html>