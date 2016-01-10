<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM illness where cat_id =".$_GET['id']);
    $illnesses = $rs->fetchAll();

$rs = $db->query("SELECT * FROM category where id =".$_GET['id']);
    $category = $rs->fetch();

?>
<?php require_once 'header.php' ?>
<style type="text/css">
    .title{ background: url('_/img/ill-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $lang['illness']?></h2>
 
</section>


<div class="content_box">


  <!-- Portfolio items -->
  <section class="row">
  <p class="break-menu"><a ><?php echo $lang['illness']?></a> ><?php echo $category[$current_lang.'_category']?></p>
    <ul class="portfolio filterable clearfix">
     
        
        
       <?php  foreach($illnesses as $ill)          
{?>
      <li class="visual_identity illustrations one_third">
        <a href="illness.php?id=<?php echo  $ill['id'];?>" >
          <img width="200px" src="<?php echo  $imgurl.$ill['image'];?>" alt="" />
        </a>
        <h3><a href="illness.php?id=<?php echo  $ill['id'];?>"><?php echo  $ill[$current_lang.'_title'];?></a></h3>
        <p><?php echo  $ill[$current_lang.'_desc'];?></p>
      </li>
        <?php
}
 ?>
      
        
        
        
     
        
      
        

    </ul>
  
  </section>


</div> 
<?php require_once 'footer.php' ?>