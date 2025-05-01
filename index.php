<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    /* Bordered form */
form {
    width:700px;
    height:420px;
    margin: auto;
    border: 3px solid #f1f1f1;
    background-color:white;
}

/* Full-width inputs */
input[type=text], input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-transform: uppercase;
}

/* Set a style for all buttons */
button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:active {
    background-color:lightblue;
    transition-duration: 0.15s;
   
}


/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 60px;
  height:60px;
  border-radius: 30px;
}

/* Add padding to containers */
.container {
  padding: 16px;
}
.head{
  font-size:25px;
  font-family:Arial;
  color:black;
  text-align:center
}
</style>
<body>
  <h1 class="head">Vote Eligibility Check</h1>
<form  action="submit.php" method="post">
  <div class="imgcontainer">
    <img src="images/DSC_0073.JPG" alt="Avatar" class="avatar">
  </div>

  <div class="container">
        <label for="fullname" name="fullname"><b>Full Name</b></label>
        <input type="text" placeholder="Enter fullname" name="fullname" required>

        <label for="yob" name="yob"><b>Date Of Birth</b></label><br>
        <input type="number" placeholder="Enter year of birth" name="yob" required>

        <label for="country" name="country"><b>Country Of Origin</b></label><br>
        <input type="text" placeholder="Enter your country of origin" name="country" required>

        <button type="submit">Submit</button>
        
</form>
</body>
</html>