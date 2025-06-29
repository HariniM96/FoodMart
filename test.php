<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn=mysqli_connect("localhost","root","","foodmart_form");



    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=date('Y-m-d');
    $status=2;

    $qry="INSERT into `discount`(`NAME`,`email`,`date`,`status`) VALUES('$name','$email','$date','$status')";
    $sql =mysqli_query($conn,$qry);
    if(!$sql){
        echo "Error Occured";
    }
    else{
        echo "Data inserted successfully";
    }

   
   
    
   

    ?>
</body>
</html>