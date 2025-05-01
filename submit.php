<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .qualify{
            margin-top: 250px;
            margin-bottom: 250px;
            margin-left: 300px;
            margin-right: 400px;
            background-color: white;
            font-family: Arial;
            height: 80px;
            width: 800px;
            font-size: 26px;
            color: black;
            font-weight: 400px;
            box-shadow:2px 3px 5px 3px rgb(0,0,0,0.5);
        }
        .fail{
            margin-top: 250px;
            margin-bottom: 250px;
            margin-left: 300px;
            margin-right: 400px;
            background-color: white;
            font-family: Arial;
            height: 80px;
            width: 800px;
            font-size: 26px;
            color: black;
            font-weight: 400px;
            box-shadow:5px 5px 10px 5px rgb(0,0,0,0.5);
        
        }
        .btn{
            height:50px;
            width:120px;
            text-align:center;
            font-family:Arial;
            margin-top:10px;
            margin-left:10px;
            margin-right:50px;
            margin-bottom:2px;
        }
    </style>
</head>
<body>
    
    <?php
    include_once 'db_connect.php';
       $fullname  = $_POST['fullname'];
       $yob  = $_POST['yob'];
       $country  = $_POST['country'];
       $vote = $_POST['vote'];
       $candidate = $_POST['candidate'];


       $today = date('Y');
       $age = $today - $yob;
       echo "$age";
    
       function Direct(){
        global $age,$country;
        if ($age > 18 && $country=="Ghana" ) {
            header('location:formA.php');
            return false;
        }
        else {
            header('location:formB.php');
            return false;
        }
       }
       Direct();


$sql = "INSERT INTO voters_info (Fullname, Year_of_Birth, Country_of_Origin)
VALUES ('$fullname', '$yob', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "New record:<br>($fullname,$yob,$country) </br> created successfully"  . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*
$sql = "INSERT INTO Actual_Voters (id, candidate,)
VALUES ('$fullname')";

if ($conn->query($sql) === TRUE) {
    echo "New record:<br>($fullname) </br> created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();
?>

</body>
</html>