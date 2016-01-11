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
          <li style="background:url(/_/images/banner11.jpg) no-repeat;background-position:50% 0">
          
           <div class="container">
           <div class="sixteen columns contain">
            
            
             
           
           </div>
         </div><!-- End Container -->
          
          </li><!-- End item -->
          
          <li style="background:url(/_/images/banner22.jpg) no-repeat;background-position:50% 0">
          
           <div class="container">
           <div class="sixteen columns contain">
            
            
             
           
           </div>
         </div><!-- End Container -->
          
          </li><!-- End item -->
           
         
          <li style="background:url(/_/images/banner33.jpg) no-repeat;background-position:50% 0">
          
           <div class="container">
           <div class="sixteen columns contain">
            
            
             
           
           </div>
         </div><!-- End Container -->
          
          </li><!-- End item -->
         
      
         
        
         
        </ul>
       </div>
      </div>
     
   </div><!-- End slider -->
   
  
   
   
   
   <!-- Start main content -->
 <div class="container main-content clearfix">
 
 
   
     <div class="bottom-3 top-3">
       <h3 class="title bottom-2" ><?php echo $system[$current_lang.'_home_tit'];?></h3> 
       <p >
	   <?php echo $system[$current_lang.'_home_content'];?>
       </p>
     </div><!-- End who we are -->
 
 <div class="sixteen columns"><hr class="line bottom-3"></div>
     <div class="gallery bottom-3 top-1">
        
         <h3 class="title bottom-2">Our work</h3> 
   
    <div id="contain"> 
      
       <?php  foreach($products as $pro)          
{?>     
	 <div class="one-third column item element-3">
	     
        <a class="fancybox" href="<?php echo $pro['image'];?>" data-fancybox-group="gallery-3" 
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

     <!--  <div class="visual_identity illustrations one_third">
        <a href="case.php?id=<?php echo  $case['id'];?>" class="">
          <img width="200px" src="<?php echo  $imgurl.$case['image'];?>" alt="" />
        </a>
        <h3><a href="case.php?id=<?php echo  $case['id'];?>"><?php echo  $case[$current_lang.'_title'];?></a></h3>
        <p><?php echo  $case[$current_lang.'_desc'];?></p>
      </div> -->
       
      
    
      
    </div><!-- End contain-->
    
    </div><!-- End gallery -->
  </div>


<?php require_once 'footer.php' ?>


