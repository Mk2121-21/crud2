<?php include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <button class="btn" name="add"><a href="studadd.php">ADD STUDENTS</a></button>
    <button class="btn" name="delet "><a href="studdelete.php">DELETE STUDENTS</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLASS</th>
                <th>MARK</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($connection,$query);
            
            if(!$result){
                die("Query failed".mysqli_error());
            }
             else{
            while($row = mysqli_fetch_assoc($result)){

?>
       
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['class'];?></td>
                    <td><?php echo $row['mark'];?></td>
                </tr>
                <?php
            }
        }
            ?>
            
</tbody>
</table>
</body>
</html>