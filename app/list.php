<?php
require_once 'init.php';
//read product count
$rs = $db->query("SELECT * FROM T_Product where cid=".$_GET['id']);
$totalCount =$rs->rowCount();
$totalPage = intval($totalCount / $pageSize);
if($totalCount % $pageSize) $totalPage++;
// Read pRODUCT
$pageNum =  isset($_GET['page'])?intval($_GET['page']):0;
$rs = $db->query("SELECT * FROM T_Product where cid=".$_GET['id']." limit ".($pageNum * $pageSize).",".$pageSize);
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
	
	<?php  
        
        foreach($products as $pro)          
{
        
        ?>     
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
    
    <div class="pagination-contain top-3">
     <div class="pagination">
         <?php if($pageNum>0){?>
      <a href="list.php?id=<?php echo $_GET['id'];?>&page=<?php echo $pageNum-1;?>" class="prev-button"><i class="icon-angle-left"></i></a>
           <?php } ?>
         
         <?php   for($i=0;$i<$totalPage;$i++) { 
         if($pageNum!=$i){
         ?>         
 
      <a href="list.php?id=<?php echo $_GET['id'];?>&page=<?php echo $i;?>"><?php echo $i+1;?></a>
         <?php }} ?>
         
         
           <?php if($pageNum<$totalPage-1){?>
      <a href="list.php?id=<?php echo $_GET['id'];?>&page=<?php echo $pageNum+1;?>" class="next-button"><i class="icon-angle-right"></i></a>
           <?php } ?>
    </div>
    </div>
   
    

    
    </div><!-- End blog-3 -->
    
   </div><!-- <<< End Container >>> -->

<?php require_once 'footer.php' ?>