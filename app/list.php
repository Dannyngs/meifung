<?php
require_once 'init.php';


// Read pRODUCT
$rs = $db->query("SELECT * FROM T_Product where cid=".$_GET['id']);
    $products = $rs->fetchAll();

// Read pRODUCT
$rs = $db->query("SELECT * FROM T_Category where id=".$_GET['id']);
    $category = $rs->fetch();


$ranPic = rand(1, 3);
?>
<?php require_once 'header.php' ?>

<div class="page-title">
     <div class="container clearfix">
       
       <div class="twelve columns"> 
         <h1><?php echo $category[$current_lang.'_category'];?></h1>
       </div>
         
          <div class="four columns" style="text-align:right"> 
          <img src="_/images/tit<?php echo $ranPic;?>.png"/>
       </div>
       
     </div><!-- End Container -->
   </div><!-- End Page title -->
   
   <!-- Start main content -->
   <div class="container main-content clearfix">
   
     <div class="blog-3 bottom-2 top-1">
    
    <div id="contain">
	
	<?php  foreach($products as $pro)          
{?>     
	<div class="one-third column item  Web" data-categories="Web">
       <div class="contain"> 
        <div class="image-post"> 
            <a class="fancybox" href="<?php echo $imgurl.$pro['image'];?>" data-fancybox-group="gallery-3" 
        title="<?php echo $pro[$current_lang.'_product'];?>">
              <img width="800" height="600" src="<?php echo $imgurl.$pro['image'];?>">
            </a>
        </div><!-- End slider image-post -->
        
        <div class="data">
        <p class="title"><?php echo $pro[$current_lang.'_product'];?></p>
        <div class="post-meta">
        <div class="meta"><?php echo $pro[$current_lang.'_desc'];?></div><!-- Date -->
        
        </div><!-- End post-meta -->
        <div class="post-content">
        <p>
          <?php echo $pro[$current_lang.'_attribute'];?>
         
        </p>
        </div><!-- End post-content -->
        </div><!-- End data -->
      
       </div><!-- End contain --> 
      </div>
      <!-- ==================== End  ==================== -->
		
<?php
    }
   
    ?>
  
    
     
    
    </div><!-- End contain-->
    
    
   
    

    
    </div><!-- End blog-3 -->
    
   </div><!-- <<< End Container >>> -->

<?php require_once 'footer.php' ?>