<?php
    include 'conn.php';

    // Registering new student

    if (isset($_POST['insert'])){
        $studentId = $_POST['student_id'];
        $studentName = $_POST['student_name'];
        $studentClass = $_POST['student_class'];

        
        $query = "INSERT INTO student(id, name, class) VALUES('$studentId','$studentName','$studentClass')";

        $result = $connection->query($query);

        if($result){
            echo "Successfully inserted";
        }
        else {
            echo $conn->error;
        }
    }

    else if (isset($_POST['update'])){
        $studentId = $_POST['student_id'];
        $studentName = $_POST['student_name'];
        $studentClass = $_POST['student_class'];

        
        $query = "UPDATE student set name= '$studentName' , class='$studentClass' WHERE id ='$studentId'";

        $result = $connection->query($query);

        if($result){
            echo "Successfully Updated";
            header("Location:list.php");
        }
        else {
            echo $conn->error;
        }
    }

    else{
        if (isset($_GET['id'])){
            $studentId = $_GET['id'];

            $query = "DELETE FROM student WHERE id = $studentId";

            $result = $connection->query($query);

           if($result){
                echo "Successfully Updated";
                header("Location:list.php");
            }
            else {
                echo $conn->error;
            }
        }
    }
?>