<?php
    $students =[];

    function addStudent(&$students, $name, $subjects)
    {
           array_push($students,["name"=>$name,"subjects"=>$subjects]);
    }

    function updateGrade(&$students, $name, $subject, $newGrade){
            $recordno=0;
            foreach($students as $student){
                     
                      if($student["name"]===$name)
                      {    
                           $i=0;
                           foreach($student["subjects"] as $subject1)
                           {
                                if($subject1[0]===$subject) 
                                {
                                    $students[$recordno]["subjects"][$i][1]=$newGrade; 
                                    return;
                                }
                                $i++;
                           }
                      }
                      $recordno++;
            }
    } 

    function calculateAveragefromAllStudent(&$students, $name) 
    {
        $total =0;
        foreach($students as $student)
        {
            if($student["name"]===$name)
            {
                foreach($student["subjects"] as $subject){
                    $total += $subject[1];
                }
                return $total / count($student["subjects"]);
            }
        }
    }

    function calculateAverage($student) 
    {
            $total =0;
            foreach($student["subjects"] as $subject){
                    $total += $subject[1];
            }
            return $total / count($student["subjects"]);  
    }


    function listPassedStudents(&$students, $passingGrade)
    {
         $pass_student_list =[];
         foreach($students as $student)
         {
               if(calculateAverage($student)>=$passingGrade){
                    array_push($pass_student_list,$student);
               }
         }
         return $pass_student_list;
    }

    function displayStudents($students){
        print_r($students);
    }
    addStudent($students,"Alok Kumar",[["Physics",50],["Chemistry",70],["Mathematics",80],["Biology",90]]);
    addStudent($students,"Sanjib Kapoor",[["Physics",50],["Chemistry",70],["Mathematics",80],["Biology",90]]);
    addStudent($students,"Rahul Kumar",[["Physics",50],["Chemistry",80],["Mathematics",90],["Biology",30]]);
    addStudent($students,"Motilal Jiswal",[["Physics",50],["Chemistry",20],["Mathematics",20],["Biology",40]]);
    addStudent($students,"Rakesh Roshan",[["Physics",30],["Chemistry",30],["Mathematics",60],["Biology",50]]);

    print_r($students);

    updateGrade($students,"Alok Kumar","Mathematics",90);

    print_r($students);

    print_r (listPassedStudents($students,50));
?>