<?php 
 $page="./view/home.php";
   if(isset($_GET['page'])){
        $page=$_GET['page'];
        $page="./view/".$page.".php";
    }
  
   if(file_exists($page)){
        include $page;
   }else{
    include './view/pagenotfound.php';
   }
  
  
?>