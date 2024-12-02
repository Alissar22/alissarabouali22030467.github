<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop</title>
   
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
        margin-top: 5px;
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
        <h1 align="center">Pop Music</h1><br><br>

        <h3>Just Dance </h3>
        <h3>LoveGame </h3>
        <h3>Rain on Me </h3>
        <h3>Hold My Hand </h3>
        <h3>Billie Jean  </h3>
        <h3>Blood on the Dance Floor  </h3>
        <h3>Dancing Queen</h3>
        <h3>I Wanna Dance with Somebody</h3>
        <h3>Thriller</h3>
        <h3>As It Was</h3>
  
</body>
</html>