<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
   
</head>
<style>*{
    margin: 0;
    padding: 0;
}
body{
   background: palevioletred;
   height: 100vh;
  
}
a{
    background-color: white;
    text-decoration: none;
    color: pink(30,7,93);
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

   ul:hover{
    background-color: palevioletred;
   }
   header:hover{
    background-color: palevioletred;
   }
    
    .li1:hover{
        background-color: pink(30,7,93);
    }
    
    li{
       margin-right: 30px;
    }
    a{
    padding: 6px 15px;
    border: 20px;
    }
    h1{
        color: antiquewhite;
    }
    .ul2{
        margin-top: 100px;
       
    }
    .li2{
        border: 10px solid pink(7, 86, 92) 
    }
    
    .li2:hover{
        background-color: pink;
    }

</style>
<body>
    
    <header> <ul class="ul1">
        <li class="li1"><a href="home.php" >Home</a></li>
         <li  class="li1"><a href="artists.php">Artists</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
        </ul></header>
        <h1 align="center">Types of Music</h1>
    <ul class="ul2">
        <li class="li2"><br><a href="music_pop.php">Pop</a></li>
        <li class="li2"><br><a href="music_rock.php">Rock</a></li>
        <li class="li2"><br><a href="music_hiphop.php">Hip Hop</a></li>
    </ul>
</body>
</html>