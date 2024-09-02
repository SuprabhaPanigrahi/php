<?php
$orders = [
            // [
            //   "orderid"=>1,
            //   "customerName"=>"John",
            //   "items"=>[
            //      ["itemName"=>"Item1","price"=>500],
            //      ["itemName"=>"Item2","price"=>100],
            //      ["itemName"=>"Item3","price"=>200],
            //      ["itemName"=>"Item4","price"=>300],
            //      ["itemName"=>"Item5","price"=>400],
            //   ],
            //   "totalcost"=>0
            // ],
            // [
            //     "orderid"=>2,
            //     "customerName"=>"John",
            //     "items"=>[
            //        ["itemName"=>"Item1","price"=>500],
            //        ["itemName"=>"Item2","price"=>100],
            //        ["itemName"=>"Item3","price"=>200],
            //        ["itemName"=>"Item4","price"=>300],
            //        ["itemName"=>"Item5","price"=>400],
            //     ],
            //     "totalcost"=>0
            // ],
          ];

          function addOrder(&$orders, $orderId, $customerName,$items)
          {
               $newOrder =[
                    "orderid"=>$orderId,
                    "customerName"=> $customerName,
                    "items"=>$items,
                    "totalcost"=>0
               ];
               array_push($orders,$newOrder);
               calculateTotalCost($orders,$orderId);
          } 

          function updateOrderItems(&$orders, $orderId, $newItems) {
                   
          }

          function calculateTotalCost(&$orders, $orderId){
               for($i=0;$i<count($orders);$i++)
               {
                   if($orders[i]["orderid"]===$orderId)
                   {
                    $orders[i]["totalcost"] = array_reduce($orders[i]["items"],fn($sum,$item) => $sum += item["price"],0);
                   }
               }
          }

          function findHighestOrder(&$orders){
                  
                $highestCost = array_reduce($orders,function($highestOrder,$order){
                       if($order["totalcost"]>$highestOrder){
                           $highestOrder = $order["totalcost"];
                       }
                       return $highestOrder;
                 },0);

                 return array_filter($orders,function($order){
                       if($order["totalcost"] == $highestCost)
                       {
                          return $order;
                       }
                 });
          }

          function displayOrders(&$orders){
              print_r($orders);
          }
?>