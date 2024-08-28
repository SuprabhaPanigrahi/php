<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <form action="cal.php" method="get">
          <fieldset>
             <legend>Simple Calculator</legend>
             <div>
                <label>Num1 :</label>
                <input type="number" name="num1" />
             </div>
             <div>
                <label>Num2 :</label>
                <input type="number" name="num2" />
             </div>
             <div>
               <button type="submit" name="btnaction" value="add">+</button>
               <button type="submit" name="btnaction" value="sub">-</button>
               <button type="submit" name="btnaction" value="mul" >*</button>
               <button type="submit" name="btnaction" value="div">/</button>
             </div>
          </fieldset>
       </form>
       
    </div>
    <div>
        <?php
        if(isset($_GET['num1'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $action = $_GET['btnaction'];
    
            switch($action)
            {
                    case 'add' :
                    echo "$num1 + $num2 =".($num1+$num2) ;
                    break;
                    case 'sub' :
                        echo "$num1 - $num2 =".($num1-$num2) ;
                    break;
                    case 'mul' :
                        echo "$num1 * $num2 =".($num1*$num2) ;
                    break;
                    case 'div' :
                        echo "$num1 / $num2 =".($num1/$num2) ;
                    break;
            }
         }
        ?>
   </div>
</body>
</html>
