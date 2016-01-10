<?php
require_once 'init.php';



$rs = $db->query("select * from lhm_chinese_med.column");
    $columns = $rs->fetchAll();



?>
<?php require_once 'header.php' ?>
<style type="text/css">
    .title{ background: url('_/img/ill-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $lang['case']?></h2>
 
</section>


<div class="content_box">


  <!-- Portfolio items -->
  <section class="row">
    <ul class="portfolio filterable clearfix">
     
        
        
       <?php  foreach($columns as $col)          
{?>
      <li class="visual_identity illustrations one_third">
        <a href="column.php?id=<?php echo  $col['id'];?>" class="">
          <img width="200px" src="<?php echo  $imgurl.$col['image'];?>" alt="" />
         
        </a>
        <h3><a href="column.php?id=<?php echo  $col['id'];?>"><?php echo  $col[$current_lang.'_title'];?></a></h3>
        <p><?php echo  $col[$current_lang.'_desc'];?></p>
      </li>
        <?php
}
 ?>
      
        
        
        
     
        
      
        

    </ul>
  
  </section>


</div> 
<?php require_once 'footer.php' ?>