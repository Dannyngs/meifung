<?php
require_once 'init.php';


// Read
  $rs = $db->query("SELECT * FROM T_Product where isShown=1");
  $products = $rs->fetchAll();



// echo $system[$current_lang.'_home_content'];

?>

<?php require_once 'header.php' ?>

 <div class="slider-1 clearfix">
   
     <div class="flex-container">
       <div class="flexslider loading">
        <ul class="slides">
          <li>
              <a href="list.php?id=1"><img style="max-width:100%" src="/_/images/banner11.jpg"></a>
        
          </li><!-- End item -->
          
          <li >
              <a href="list.php?id=2"><img style="max-width:100%" src="/_/images/banner22.jpg"></a>
          
          </li><!-- End item -->
           
         
          <li >
              <a href="list.php?id=3"><img style="max-width:100%" src="/_/images/banner33.jpg"></a>
        
          </li><!-- End item -->
         
      
         
        
         
        </ul>
       </div>
      </div>
     
   </div><!-- End slider -->
   
  
   
   
   
   <!-- Start main content -->
 <div class="container main-content clearfix" >
 
 
   
     <div class="bottom-3 top-3">
       <h3 class="title bottom-2" ><?php echo $system[$current_lang.'_home_tit'];?></h3> 
       <div id="aboutp">
	    <?php echo $system[$current_lang.'_home_content'];?>
      
       </div>
     </div><!-- End who we are -->
 
 <div class="sixteen columns"><hr class="line bottom-3"></div>
     <div class="gallery bottom-3 top-1">
        
         <h3 class="title bottom-2"><?php echo $lang['our_work'];?></h3> 
   
    <div > 
      
       <?php  foreach($products as $pro)          
{?>     
	 <div class="one-third column item element-3">
	     
        <a class="fancybox" href="<?php echo $imgurl.$pro['image'];?>" data-fancybox-group="gallery-3" 
        title="<?php echo $pro[$current_lang.'_product'];?>">
         <img width="300" height="225" src="<?php echo $imgurl.$pro['image'];?>" >
          <div class="img-caption">
          <div class="desc"><p><?php echo $pro[$current_lang.'_desc'];?></p>
          <span><i class="icon-search"></i></span></div>
          </div><!-- hover effect -->
          </a>
      </div>
<?php
}
 ?>

    
      
    </div><!-- End contain-->
    
    </div><!-- End gallery -->
  </div>


<?php require_once 'footer.php' ?>


