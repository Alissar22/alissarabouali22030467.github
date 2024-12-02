<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock</title>
   
</head>
<style>*{
    margin: 0;
    padding: 0;
}
body{
   background:palevioletred;
   height: 100vh;
  
}
a{
    text-decoration: none;
    color: aliceblue;
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 30px;
}

ul{
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
      
         
    }
    
    .li1{
        border: 2px solid rgb(7, 86, 92) 
    }
    
    .li1:hover{
        background-color: #075055;
    }
    
    li{
       margin-right: 30px;
    }
    a{
    padding: 6px 15px;
    border: 20px;
    }
    h1{
        color: aliceblue;
    }

    h3{
        color: aliceblue;
        text-align: center;
        margin-top: 15px;
    }
</style>
<body>
    
    <header> <ul class="ul1">
        <li class="li1"><a href="home.php" >Home</a></li>
         <li  class="li1"><a href="music.php">Music</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
        </ul></header>
        <h1 align="center">Rock Music</h1><br><br>

        <h3>Twist and Shout</h3>
        <h3>I Saw Her Standing There</h3>
        <h3>Can’t Buy Me Love</h3>
        <h3>Satisfaction (I Can’t Get No)</h3>
        <h3>Paint It Black</h3>
        <h3>Stairway to Heaven</h3>
        <h3>Born to Run</h3>
        <h3>You Shook Me All Night Long</h3>
        <h3>Whole Lotta Love</h3>
        <h3>Smells Like Teen Spirit</h3>
        
  
</body>
</html>