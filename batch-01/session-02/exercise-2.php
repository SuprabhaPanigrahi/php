<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Employee Bonus Calculator</title>
</head>
<body>
    <h1 style="text-align:center;color:green"> Employee Bonus Calculator</h1>
    <div>
        <form action="exercise-2.php" method="post">
            <label for="txtSalary">Enter Employee Salary :</label>
            <input type="text" id="txtSalary" name="txtSalary"/> 
            <br/> 
            <br/> 
            
            <label for="txtYearsOfService">Enter Employee's Years of Service :</label>
            <input type="text" id="txtYearsOfService" name="txtYearsOfService"/> 
            <br/> 
            <br/> 
            <input type="submit" value="Calculate"/>
        </form>
    </div>
    <div>
        <?php

             if(isset($_POST['txtSalary']) && isset($_POST['txtYearsOfService']))
             {
              
                 # Accept the Salary from the Client Request
                 $salary = $_POST['txtSalary'] ;

                 # Accept the Years of Service from the CLient Request

                 $years_of_service = $_POST['txtYearsOfService'];

                 $bonous = 0;

                 if($years_of_service <=2){
                    $bonous = 0;
                 }elseif($years_of_service>2 && $years_of_service <= 5){
                    $bonous = $salary * .05 ;
                 }elseif($years_of_service>5 && $years_of_service <= 10){
                    $bonous = $salary * .1 ;
                 }else{
                    $bonous = $salary * .15 ;
                 }

                 $bonous = number_format($bonous,2);

                 echo "<h1>The yearly bonous of the employee is Rs. $bonous </h1>";

             }
        ?>
    </div>
</body>
</html>