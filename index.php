<?php $title = "index";
require_once("header.php"); ?>

<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$decodedData = json_decode($response, true);
curl_close($curl);
?>

<header>
  <nav>
      <ul>
          <li class="logo"><img src="./Images/logo.png" alt="logo"/></li>
          <li><a href="./create.php">Add Product</a></li>
          <li><a href= "" Target="_blank">Github</a></li>
          <li><a href="./detail.php">View Product</a></li>
      </ul>
  </nav>
</header>

<main>
  <h1 class="title">Orders</h1>
  <div class="order_main" name="order">
    <table class="order_table">
      <tr>
        <th>orderID</th>
        <th>orderDate</th>
        <th>customerName</th>
        <th>deliveryAddress</th>
        <th>deliveredDate</th>
      </tr>
      <?php  foreach($decodedData as $row): ?>
          <tr>
              <td><?=$row['orderID'];?></td>
              <td><?=$row['orderDate'];?></td>
              <td><?=$row['customerName'];?></td>
              <td><?=$row['deliveryAddress'];?></td>
              <td><?=$row['deliveredDate'];?></td>
              <td><a href="./detail.php">detail</a></td>
          </tr>
      <?php endforeach;?>
    </table>
  </div>
</main>

<?php require_once("footer.php"); ?>
