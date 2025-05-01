<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body{
    background:blue; 
  }
  .container{
    background-color:white;
    border:1px solid lightgray;
    box-shadow:5px 10px 10px 5px rgb(0,0,0,0.5);
    color:black;
    font-family:Arial;
    font-size:20px;
    font-weight:300px;
    width:400px;
    height:230px;
    line-height:35px;
    justify-content:center;
    align-items:center;
    margin-top:120px;
    margin-bottom:0;
    margin-right:300px;
    margin-left:500px;
    border-radius:10px;
  }
  .members{
    font-family:Arial;
    font-weight:400px;
    font-size:35px;
    text-align:center;
    border-bottom:1px solid lightgray;
    text-transform:uppercase;
  }
  .btn{
    height:60px;
    width:120px;
    text-align:center;
    font-family:Arial;
    margin-top:0;
    margin-left:20px;
    margin-right:10px;
    margin-bottom:2px;
  }
  #button{
    background-color:blue ;
    height: 40px;
    width: 350px;
    color: white;
    font-family: Arial;
    font-size: 14px;
    border-style: none;

  }
  h3{
    color: white;
  }
  p{
    color: blue;
    margin-left: 20px;
  }
  .confirm{
    margin: auto;
    background-color: white;
    color: blue;
    height: 120px;
    width: 350px;
    box-shadow:5px 5px 5px 5px rgb(0,0,0,0.5);

  }
  .text_confirm{
    border-radius: 5px;
    text-align: center;
    font-size: 20px;
    color: blue;
    border-bottom: 2px solid black;
  }
  h2{
    color: white;
  }
</style>
<body>
  
    <form action="submit.php" method="post">
      <div class="members">
        <h3><upper>Paliamentary candidate for Ho central</upper></h3>
      </div>
      <h2>Welcome <?php
      include_once 'db_connect.php';
        echo htmlspecialchars($fullname);
      ?></h2>
      <div class="container">
        <label for="" >
          <input type="radio" name="vote" value="Afenu Obed Enam">Afenu Obed Enam
        </label><br>
        <label for="" >
          <input type="radio" name="vote" value="Ekor John">Ekor John
        </label><br>
        <label for="" >
          <input type="radio" name="vote" value="Agbadi Caleb">Agbadi Caleb
        </label><br>
        <label for="" >
          <input type="radio" name="vote" value="Dogbevia Godwin">Dogbevia Godwin
        </label><br>
        <label for="" >
          <input type="radio" name="vote" value="Defor Emmanuel">Defor Emmanuel
        </label><br>
        <div class="btn">
          <button  type="submit" name="votefor" id="button">
            Submit Vote
          </button>
        </div>
</form>
         
     


</body>
</html>