<?php
require_once 'init.php';
$rs = $db->query("SELECT * FROM lhm_chinese_med.pricing_methods ");
    $pm = $rs->fetch();
?>


<?php require_once 'header.php' ?>
<style type="text/css">
    .title{ background: url('_/img/price-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $lang['pricing']; ?>
</h2>
  

</section>


<div class="content_box">


  <!-- Sidebar layout -->
  <div class="sidebar_layout">


    <!-- Sidebar -->
    <div class="left_sidebar sidebar clearfix">
      
    
<?php echo $pm[$current_lang.'_pricing']; ?>

    </div>


    <!-- Main column -->
    <div class="main_column two_thirds leftl">

      <!-- Features -->
     <?php echo $pm[$current_lang.'_methods']; ?>


      <hr />
      

    </div>


  </div>


</div> 

<?php require_once 'footer.php' ?>
