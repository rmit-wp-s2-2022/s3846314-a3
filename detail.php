<?php
$title = "Product detail";
require_once("header.php"); ?>

<header>
  <nav>
      <ul>
          <li class="logo"><img src="./Images/logo.png" alt="logo"/></li>
          <li><a href="./index.php">Index page</a></li>
          <li><a href= "" Target="_blank">Github</a></li>
      </ul>
  </nav>
</header>

<?php
$id = $_GET['id'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.orders/?id=1000".$id);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$decodedData = json_decode($response);
curl_close($curl);
?>

<main>
  <h1>Order Detail</h1>
  <div class="order">
    <h2>orderID:<?php echo $decodedData->orderID ?></h2>
    <h2>orderDate:<?php echo $decodedData->orderDate ?></h2>
    <h2>customerNames:<?php echo $decodedData->customerName ?></h2>
    <h2>deliveryAddress:<?php echo $decodedData->deliveryAddress ?></h3>
    <h2>deliveredDate:<?php echo $decodedData->deliveredDate ?></h2>
    <h3>Ordered Product:</h3>
<table class="order_table">
  <tbody>
    <tr>
      <th>Product ID</th>
      <th>Name</th>
      <th>Price</th>
    </tr>
    <tr>
      <td>4000</td>
      <td>Ufo desk</td>
      <td>179</td>
    </tr>
  </tbody>
</table>
</div>
</main>

<?php require_once("footer.php"); ?>
