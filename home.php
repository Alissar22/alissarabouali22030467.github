<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>*{
        margin: 0;
        padding: 0;
    }
    body{
       background: palevioletred;
       height: 100vh;
      
    }
    a{
        text-decoration: none;
        color:pink;
    }
    
    header{
        
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 30px;
    }
    
    h2{
        text-decoration: none;
        color: w;
    font-size: 30px;
    text-transform:uppercase ;
    }
    ul{
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
      
         
    }
    
    .li1{
        border: 2px solid pink ;
    }
    
    .li1:hover{
        background-color: white;
    }
    
    li{
       margin-right: 30px;
    }
    header:hover{
        background-color: palevioletred;
    }
    a{
    padding: 6px 15px;
    border: 20px;
    }
    h1{
        color: antiquewhite;
    }
    form{
        margin-top: 50px;
        color: pink;
    }
    button:hover{
       background-color: white;
    }
    </style>
</head>
<body>
    <header> <ul class="ul1">
        <li class="li1"><a href="music.php" >Music</a></li>
         <li  class="li1"><a href="artists.php">Artists</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
       
     </ul></header>
    <h1 align="center" >Welcome to the Music App</h1>

    <form name="" action="insertmusic.php" method="post" align="center">
        
        <div class="login">
            <label for="">what is your favorite music?</label>
           <input class="form-control" type="text" name="watching" placeholder="" required=""> <br>
          <br> <label for="">What type of muscic you prefer?</label>
          <input class="form-control" type="text" name="movie_type" placeholder="" required=""> <br>
          <br><label for="">who is your lovely artist?</label>
          <input class="form-control" type="text" name="actor" placeholder="" required=""> <br>
          <br><input class="btn btn-default" type="submit" name="submit" value="submit" > </div>
      </form>
         </div>
  </section>

 

</body>
</html>