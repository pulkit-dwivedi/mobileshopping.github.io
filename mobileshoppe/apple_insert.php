<?php include 'database_connection.php' ?>
<html>
<head>
    <style>
        .insert{
            width: 40%;
            height: 50%;
            background-color: aqua;
            position: relative;
            left: 30%;

        }
    </style>
</head>
<body>
    <div class="insert">
        <form action="" method="post" enctype="multipart/form-data">
            <label>Select Image File:</label>
            <input type="file" name="image"><br>

            <input type="text" placeholder="enter name" name="name"><br><br>
            <input type="text" placeholder="enter camera " name="camera"><br><br>
            <input type="text" placeholder="enter brand" name="brand"><br><br>
            <input type="text" placeholder="enter memory" name="memory_storage"><br><br>
            <input type="text" placeholder="enter complete name" name="complete_name"><br><br>
            <input type="text" placeholder="enter description" name="description"><br><br>
            <input type="text" placeholder="enter price" name="price"><br><br>
            <input type="submit" name="submit" value="Upload"><br><br>

        </form>
    </div>

    <?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $camera=$_POST['camera'];
        $brand=$_POST['brand'];
        $memory_storage=$_POST['memory_storage'];
        $description=$_POST['description'];
        $image=$_FILES['image'];
        $complete_name=$_POST['complete_name'];
        $price=$_POST['price'];
        // print_r($image);
        $filename=$image['name'];
        $filepath=$image['tmp_name'];
        $fileerror=$image['error'];

        if($fileerror==0){
            $destinationfile='photos/'.$filename;
            echo "$destinationfile";
            move_uploaded_file($filepath,$destinationfile);
            $insert="INSERT INTO `apple` (`name`, `camera`, `brand`, `memory_storage`, `description`, `image`, `complete_name`, `price`) VALUES ('$name', '$camera', '$brand', '$memory_storage', '$description', ' $destinationfile', '$complete_name', '$price')";
            $query=mysqli_query($conn,$insert);
            if($query){
                echo "inserted successfully";
            }
            if(!$query){
                echo "not inserted";
            }
        }
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
    }
    
?>
</body>

</html>