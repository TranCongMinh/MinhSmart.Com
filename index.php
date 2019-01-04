<?php 
	session_start();
    include 'common/header.php';

        //<!-- Main Header Area End Here -->
   
    include 'common/sidebar-menu.php';
    ?>
            

       <!--  Nội Dung website ở đâyy
 -->
	

    <?php 
    	$Controller = new Frontend_Controller();
    	$Controller->handleRequest();
     ?>








<?php 
    include 'common/fooder.php';
 ?>    













