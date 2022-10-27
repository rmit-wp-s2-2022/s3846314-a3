<?php
$title = "Add Product";
require_once("functions.php");
require_once("header.php");
?>

<header>
  <nav>
      <ul>
          <li class="logo"><img src="./Images/logo.png" alt="logo"/></li>
          <li><a href="./index.php">Index page</a></li>
          <li><a href= "" Target="_blank">Github</a></li>
      </ul>
  </nav>
</header>

<main class="order-main">

  <div class="form">
        <form action="#" id="postForm" method="post">
                <div class="item">
                      <label>Product Id</label>
                      <input type="number" id="pid" class="input" name="pid"
                             min="1" step="number" value="0"/>
                           </div>

                  <div class="item">
                      <label>Product Name</label>
                        <input type="text" class="input" name="name" id="name"
                                value=""
                                onkeyup="this.value = this.value.toUpperCase();"/>
                      </div>
                 <div class="item">
                    <label>Product Price</label>
                        <input type="number" class="input" name="price" id="price"
                            min="1" max="1000" step="any" value="0"/>
                          </div>
                  <div class="submit">
                    <input class="" type="submit" name="button" value="Submit"/>
                        </div>
                </form>
              </div>
</main>

<?php require_once("footer.php"); ?>
