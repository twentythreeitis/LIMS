<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <h2>Expenses </h2>
    <br>
    <form action='expensedb.php' method="POST">
      <div class="input-row">
        <label for="name">Category Of Expense</label>
        <input type="text" name="cate" id="cate" />
      </div>
      <br>
      <div class="input-row">
        <label for="patient">Expense</label>
        <input type="text" name="expensed" id="expensed" />
      </div>
      <br>
      <div class="input-row">
        <label for="phone">Date</label>
        <input type="text" name="dated" id="dated" />
      </div>
      <br>
      <div class="input-row">
        <label for="address">Amount</label>
        <input type="text" name="amount" id="amount" />
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
          <th><h4>Category Of Expense</h4></th>
          <th><h4>Expense</h4></th>
          <th><h4>Date</h4></th>
          <th><h4>Amount</h4></th>
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
        $sql = "SELECT cate, expensed, dated, amount FROM expense";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["cate"]. "</td><td>" . $row["expensed"] . "</td><td>"
        . $row["dated"]. "</td><td>" . $row["amount"] . "</td></tr>";
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