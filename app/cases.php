<?php
require_once 'init.php';



$rs = $db->query("select * from lhm_chinese_med.case");
    $cases = $rs->fetchAll();



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
     
        
        
       <?php  foreach($cases as $case)          
{?>
      <div class="visual_identity illustrations one_third">
        <a href="case.php?id=<?php echo  $case['id'];?>" class="">
          <img width="200px" src="<?php echo  $imgurl.$case['image'];?>" alt="" />
        </a>
        <h3><a href="case.php?id=<?php echo  $case['id'];?>"><?php echo  $case[$current_lang.'_title'];?></a></h3>
        <p><?php echo  $case[$current_lang.'_desc'];?></p>
      </div>
        <?php
}
 ?>
      
        
        
        
     
        
      
        

    
  
  </section>


</div> 
<?php require_once 'footer.php' ?>