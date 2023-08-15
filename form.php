<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT CRUD TABLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $name = $_GET['name'];
            $class = $_GET['class'];
        }
        else {
            $id = "";
            $name = "";
            $class = "";
        }
    ?>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form action="operation.php" method="POST">
                            <div class="form-group m-2">
                                <label for="id" class="form-label">
                                    Student Id
                                </label>
                                <input type="text" class="form-control" name="student_id" value="<?php echo $id ?>" >
                            </div>
                            <div class="form-group m-2">
                                <label for="id" class="form-label">Student Name</label>
                                <input type="text" name="student_name" id="" class="form-control" value="<?php echo $name ?>">
                            </div>
                            <div class="form-group m-2">
                                <label for="id" class="form-label">Student Class</label>
                                <input type="text" name="student_class" id="" class="form-control" value="<?php echo $class ?>">
                            </div>
                            <button type="submit" class="btn bg-success btn-block m-2" name="insert">Save Info</button>
                            <button type="submit" class="btn bg-info btn-block m-2" name="update">Update Info</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>