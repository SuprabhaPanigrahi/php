
<?php

    $products = [
        ["id"=>1,"name"=>"Laptop","quantity"=>4 ,"price"=>50000],
        ["id"=>2,"name"=>"Television","quantity"=>5,"price"=>40000],
        ["id"=>3,"name"=>"Mobile","quantity"=>3 ,"price"=>50000]
    ];

    

    function addProduct(&$inventory,$id, $name,$quantity, $price){
         $product =  ["id"=>$id,"name"=>$name,"quantity"=>$quantity ,"price"=>$price];
         array_push($inventory,$product);
    }   
    
    function updateQuantity(&$inventory,$id,$newQuantity){

           for($i=0 ; $i<count($inventory);$i++){
                if($inventory[$i]["id"]===$id)
                {
                    $inventory[$i]["quantity"]  = $newQuantity ;
                    break;
                }
           }
    } 

    function  deleteProduct(&$inventory, $id) {
           $inventory = array_filter($inventory,fn($product)=> $product["id"] != $id );
    }

    function calculateTotalValue($inventory){
           return array_reduce($inventory,function($prev,$product){
                    $prev = $prev + ($product["quantity"]*$product["price"]) ;
                    return $prev;
           },0);
    }

    if(isset($_POST['productId'])){
          $id =$_POST['productId'];
          $name =$_POST['productName'];
          $price =$_POST['productPrice'];
          $quantity=$_POST['productQuantity'];
          $btnValue = $_POST['btnAdd'];
          $product =["id"=>$id,"name"=>$name,"quantity"=>$quantity ,"price"=>$price];
          if($btnValue =='ADD'){
            array_push($products,$product);
          }else{
            for($i=0 ; $i<count($products);$i++){
                if($products[$i]["id"]==$id)
                {
                    $products[$i]["name"]  = $name ;
                    $products[$i]["price"]  = $price ;
                    $products[$i]["quantity"]  = $quantity ;
                    break;
                }
            }
          }
         
    }
    // print_r($products);
    // addProduct($products,4,"Apple",100,50);
    // addProduct($products,5,"Banana",100,50);
    // addProduct($products,6,"Table",100,50);
    // addProduct($products,7,"Chair",100,50);
    // echo"<hr/>";
    // print_r($products);
    // echo"<hr/>";
    // updateQuantity($products,1,10);
    // print_r($products);
    // deleteProduct($products,2);
    // echo"<hr/>";
    // print_r($products);
    // echo"<hr/>";
    // echo "TotalValue :".calculateTotalValue($products);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div  id="form-section">
          <?php
               $productToUpdate='';
               if($_SERVER['QUERY_STRING']){
                    $id = $_GET['id'];
                    if(isset($_GET['action']) && $_GET['action']=='delete')
                    {
                       deleteProduct($products,$id); 
                    }else{
                        foreach($products as $product)
                        {
                            if($product["id"]==$id)
                            {
                                $productToUpdate = $product;
                            }
                        }
                    }
                    
               }
               //print_r($productToUpdate);
          ?>
          <form method="post" action="ims.php">
              <div>
                  <label>Enter Product ID:</label>
                  <input type="text" name="productId" value="<?php echo $productToUpdate !='' ? $productToUpdate['id']:'' ?>"/> 
              </div>
              <div>
                  <label>Enter Product Name:</label>
                  <input type="text" name="productName" value="<?php echo $productToUpdate !='' ?$productToUpdate['name']:'' ?>"/> 
              </div>
              <div>
                  <label>Enter Product Price:</label>
                  <input type="text" name="productPrice" value="<?php echo $productToUpdate !='' ?$productToUpdate['price']:'' ?>"/> 
              </div>
              <div>
                  <label>Enter Product Quantity:</label>
                  <input type="text" name="productQuantity" value="<?php echo $productToUpdate !='' ?$productToUpdate['quantity']:'' ?>"/> 
              </div>
              <div>
                  
                  <input type="submit" name="btnAdd" value="<?php echo $productToUpdate !='' ?'UPDATE':'ADD' ?>"/> 
                  <input type="reset" value="RESET"/> 
              </div>
         </form>
     </div>

     <div id="display-section">
         <table border="1">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>ACTION</th>
            <tr>
            <?php
                foreach($products as $product)
                {
                   echo "<tr>";
                   echo "<td>".$product['id']."</td>";
                   echo "<td>".$product['name']."</td>";
                   echo "<td>".$product['price']."</td>";
                   echo "<td>".$product['quantity']."</td>";
                   echo "<td><a href=ims.php?id=".$product['id'].">Edit</a>|<a href=ims.php?id=".$product['id']."&action=delete>Delete</a></td>";
                   echo "</tr>";
                }
            ?>
         <table>
         
     </div>
</body>
</html>
