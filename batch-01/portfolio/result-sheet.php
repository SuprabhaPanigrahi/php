<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Result Sheet</title>
</head>
<body>
    <div class="container">
         <!--Form Section-->
         <div class="row">
             <div class="col-8">

             <h1 class="text-center text-danger">RESULT SHEET</h1>
             <hr/>
             <form action="result-sheet.php" method="post">
               <div class="mb-3">
                   <label>NAME :</label>
                   <input type="text" placeholder="Enter Name" name="txtName" class="form-control" required/>
               </div>
               <div class="mb-3">
                   <label>ROLL :</label>
                   <input type="text" placeholder="Enter Roll No" name="txtRoll" class="form-control" required />
               </div>

               <div class="mb-3">
                   <label>PHY :</label>
                   <input type="number" placeholder="Enter Physic Mark" name="txtPhy" class="form-control" required/>
               </div>

               <div class="mb-3">
                   <label>CHEM :</label>
                   <input type="number" placeholder="Enter Chemistry Mark" name="txtChem" class="form-control" required />
               </div>

               <div class="mb-3">
                   <label>MATH :</label>
                   <input type="number" placeholder="Enter Math Mark" name="txtMath" class="form-control" required/>
               </div>

               <div class="mb-3">
                   <label>BIO :</label>
                   <input type="number" placeholder="Enter Biology Mark" name="txtBio" class="form-control" required/>
               </div>

               <div class="mb-3">
                   <button type="submit" class="btn btn-success">Save</button>
                   <button type="reset" class="btn btn-warning">Reset</button>
               </div>
             </form>
             </div>
         </div>
         <!--Result Section-->
         <div class="row">
            <div class="col-8">
                <?php
                   if(isset($_POST['txtName']))
                   {
                       /* 
                        * Collect Form Data
                        */
                       $name = $_POST['txtName'];
                       $roll = $_POST['txtRoll'];
                       $phy  = $_POST['txtPhy'];
                       $chem  = $_POST['txtChem'];
                       $math  = $_POST['txtMath'];
                       $bio  = $_POST['txtBio'];
                       
                       /*
                          Calculate totalmark
                       */
                      $totalMark = $phy + $chem + $math + $bio ;
                    
                      /* 
                         Calculate Percentage
                      */
                     
                      $percentage = $totalMark / 400 * 100 ;

                      /* 
                         Calculate Grade
                      */
                      $grade ='FAIL';
                      if($percentage > 50 && $percentage <=60)
                      {
                          $grade = 'C';
                      }elseif($percentage >60 && $percentage<=70){
                          $grade = 'B';
                      }elseif($percentage >70 && $percentage<=80){
                        $grade = 'A';
                      }elseif($percentage >80 && $percentage<=90){
                        $grade = 'E';
                      }elseif($percentage >90 && $percentage<=100){
                        $grade = 'O';
                      }
                     
                      /*
                         Get the result Status
                      */
                      $status='Congratulation!!!!';
                      if($grade === 'FAIL')
                      {
                           $status = 'Sorry !! Try Again';
                      }

                      echo "<div><br/>";
                      echo "<h1 class='text-center text-info'>RESULT SHEET</h1>";
                      echo "<p>NAME:$name</p>";
                      echo "<p>ROLL NO:$roll</p>";
                      echo "<p>PHYSICS MARK:$phy</p>";
                      echo "<p>CHMISTRY MARK:$chem</p>";
                      echo "<p>MATH MARK:$math</p>";
                      echo "<p>BIOLOGY MARK:$bio</p>";
                      echo "<p>TOTAL MARK:$totalMark</p>";
                      echo "<p>PERCENTAGE:$percentage</p>";
                      echo "<p>GRADE:$grade</p>";
                      echo "<p class='alert alert-success'>$status</p>";
                      echo "<button onclick='window.print()'>Print</button>";
                      echo "</div>";
                   }

                   
                ?>
            </div>
        </div>
    <div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>