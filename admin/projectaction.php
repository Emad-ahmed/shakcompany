<?php
include 'config.php';



$name = $_POST['name'];
$languageused = $_POST['languageused'];
$category = $_POST['category'];
$client_name = $_POST['client_name'];
$project_link = $_POST['project_link'];
$description = $_POST['description'];
$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = 'ProjectImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);





$sql = "INSERT INTO `project`(`name`, `langage_used`, `category`, `client_name`, `link_project`, `description`, `image`) VALUES ('$name','$languageused','$category','$client_name','$project_link','$description','$imageSave')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Image Inserted!!')</script>";
    echo "<script>location.href='project.php'</script>";
}


