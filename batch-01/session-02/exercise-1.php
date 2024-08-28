<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store Discount Calculator</title>
</head>
<body>
     <form action="exercise-1.php" method="post">
          <label>Enter Purchase Amount :</label>
          <input type="number" name="txtPurchaseAmount" />
          <input type="submit" value="Get Total Amount"/>
     </form>
</body>
</html>

<?php

    if(isset($_POST["txtPurchaseAmount"]))
    {
        $purchase_amount = $_POST["txtPurchaseAmount"];

        $total_purchase_amount = 0 ;

        if($purchase_amount <= 50)
        {
            $total_purchase_amount =  $purchase_amount ;

        }elseif($purchase_amount > 50 && $purchase_amount <=100)
        {
            $total_purchase_amount =   $purchase_amount - $purchase_amount * 0.1 ;

        }elseif($purchase_amount > 100 && $purchase_amount <=200)
        {
            $total_purchase_amount =   $purchase_amount -$purchase_amount * 0.2 ;

        }elseif($purchase_amount > 200)
        {
            $total_purchase_amount =   $purchase_amount - $purchase_amount * 0.3 ;
        }
        $total_purchase_amount = number_format($total_purchase_amount,2);
        
        echo "<h1 style='color:blue;font-size:1.2rem;'>Total Purchase Amount is $ $total_purchase_amount</h1>" ;
    }
    
?>