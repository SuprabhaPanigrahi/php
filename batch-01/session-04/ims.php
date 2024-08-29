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
    print_r($products);
    addProduct($products,4,"Apple",100,50);
    addProduct($products,5,"Banana",100,50);
    addProduct($products,6,"Table",100,50);
    addProduct($products,7,"Chair",100,50);
    echo"<hr/>";
    print_r($products);
    echo"<hr/>";
    updateQuantity($products,1,10);
    print_r($products);
    deleteProduct($products,2);
    echo"<hr/>";
    print_r($products);
    echo"<hr/>";
    echo "TotalValue :".calculateTotalValue($products);
?>