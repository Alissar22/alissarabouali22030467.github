<?php
    include "connection.php"; 
 
  $watching=$_POST['watching'];
  $movie_type=$_POST['music_type'];
  $actor=$_POST['artist'];


    mysqli_query($db,"INSERT INTO music VALUES('$watching', '$movie_type','$actor');");

?>
 <!DOCTYPE html>
        <html>
       
       <script type="text/javascript">
        
     window.location="music.php"
    </script>
   
        </html>