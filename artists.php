<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
    
</head>
<style>*{
    margin: 0;
    padding: 0;
}
body{
   background: linear-gradient(white,rgb(218, 96, 192),rgb(218, 96, 192));
   height: 100vh;
  
}
a{
    text-decoration: none;
    color: pink;
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
        color: antiquewhite;
    }
    .ul2{
        margin-top: 100px;
       
    }
    .li2{
        border: 5px solid rgb(7, 86, 92) 
    }
    
    .li2:hover{
        background-color: pink;
    }
h2{
    color: antiquewhite;
}
</style>
<body>
    <header> <ul class="ul1">
        <li class="li1"><a href="home.php" >Home</a></li>
         <li  class="li1"><a href="music.php">Musics</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
        </ul></header>
    <h1 align="center">Famous atrist by Song Type</h1>
    
    <ul class="ul2">
        <li class="li2"><h2>Pop: </h2></li><h2> Lady Gaga, Micheal Jacskon </h2></ul><br>

       <ul class="ul3"><li class="li2"><h2> Rock: </h2></li><h2>The Beatles, The Rolling Stones</h2></ul> <br>
        <ul class="ul4"><li class="li2"><h2> Hip Hop: </h2></li> <h2>Kanye West, Eminem</h2></ul>
   
</body>
</html>