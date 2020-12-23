<?php 
   $page="home";
   if(isset($_GET['page'])){
        $page=$_GET['page'];
        $page="./view/".$page.".php";
    }
  
   if(file_exists($page)){
        include $page;
   }else{
    echo "404 Not Found";
   }
  
  
?>