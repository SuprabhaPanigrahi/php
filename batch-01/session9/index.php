<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       require_once("header.php");
       require_once("header.php");
    ?>
    <section id="main">
          <div>
              <h1>MAIN SECTION OF HOME PAGE</h1>
              <?php 
                include("product.php") ;

                include("product.php") ;
                echo "<h3>PRODUCT NAME :".$product["productName"]."</h3>";
                echo "<h3>PRODUCT PRICE :".$product["productPrice"]."</h3>";
              ?>
          </div>
    </section> 
    <?php
    include("footer.php");
    ?>
</body>
</html>