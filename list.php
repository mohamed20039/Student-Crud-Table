<?php
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-sm-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            NAME
                        </th>
                        <th>
                            CLASS
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $query = "SELECT * FROM student";
                        $result = $connection->query($query);

                        if ($result) {
                            $htmlTable .= "<tr>";
                            while ($row = $result->fetch_assoc()) {
                                $htmlTable .= "<td>" . $row['id'] . "</td>";
                                $htmlTable .= "<td>" . $row['name'] . "</td>";
                                $htmlTable .= "<td>" . $row['class'] . "</td>";
                                $update_link = "form.php?" . "id=" . $row['id'] . "&name=" . $row['name'] . "&class=" . $row['class'];
                                $delete_link = "operation.php?" . "id=" . $row['id'];
                                $htmlTable .= "<td>" . '<a href="'.$update_link.'" class="btn btn-success">UPDATE</a>' . "</td>";
                                $htmlTable .= "<td>" . '<a href="'.$delete_link.'" class="btn btn-danger">DELETE</a>' . "</td>";
                                $htmlTable .= "</tr>";
                            }
                            echo $htmlTable;
                        }

                        else{
                            $connection->error;
                        }


                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>