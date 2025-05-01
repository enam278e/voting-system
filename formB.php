<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            background-color: white;
            border: 1px solid lightgray;
            height: 300px;
            width: 400px;
            margin:200px 400px 100px 500px;
            box-shadow:2px 3px 5px 3px rgb(0,0,0,0.5);
            text-align: center;

        }
        h2{
            border-bottom: 1px solid black;
        }
        .container{
            height:100px;
            width:200px;
            background-color:white;
            box-shadow:2px 3px 5px 3px rgb(0,0,0,0.5);
            padding-top:5px;
            padding-left:10px;
            padding-right:10px;
            padding-bottom:5px;
            margin-left: 100px;
            
        }
        .btn{
            height:50px;
            width:120px;
            text-align:center;
            font-family:Arial;
            margin-top:10px;
            margin-left:15px;
            margin-right:50px;
            margin-bottom:2px;
        }
        button{
            background-color:blue ;
            height: 25px;
            width: 180px;
            color: white;
            font-family: Arial;
            font-size: 14px;
            border-style: none;
        }
    </style>
</head>
<body>
   
    <form action="submit.php" method="post">
    
        <h2>Select your preffered candidate you had wish to vote for</h2>
        <div class="container">
        <label for="candidate">Candidates:</label><br>
        <select name="candidate" id="">
        <option value="candidate" >select</option>
        <option value="candidate 1 : Afenu Obed Enam" name="candidate" >Afenu Obed Enam</option>
        <option value="candidate 2 : Ekor John" name="candidate">Ekor John</option>
        <option value="candidate 3 : Agbadi Caleb" name="candidate">Agbadi Caleb</option>
        <option value="candidate 4 : Dogbevia Godwin" name="candidate">Dogbeviade Godwin</option>
        <option value="candidate 5 : Defor Emmanuel" name="candidate">Defor Emmanuel</option>
        </select>
        <div class="btn">
          <button>Submit Vote</button>
        </div>
        </div>
    </form>
  
  </body>
</html>