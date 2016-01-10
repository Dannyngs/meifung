<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM lhm_chinese_med.column where id =".$_GET['id']);
    $column = $rs->fetch();



?>
<?php require_once 'header.php' ?>

<style type="text/css">
    .title{ background: url('_/img/ill-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $column[$current_lang.'_title']?></h2>
 
</section>


<div class="content_box">


  <!-- Sidebar layout -->
  <div class="sidebar_layout">
 
    <!-- Main column -->
    <div class="main_column differ" style="padding-left:0;">

      <!-- Article -->
      <section>
          <p class="break-menu" style="margin-left:25px;">
              <a href="cases.php"> <?php echo $lang['case']?></a>>
              <?php echo $column[$current_lang.'_title']?>
          </p>
        <ul class="articles">

          <li class="single">

            

            <article>

              <h3><?php echo $column[$current_lang.'_title']?></h3>
             
              <p><?php echo $column[$current_lang.'_content']?></p>
             

            </article>

          </li>

        </ul>
      
      </section>

    </div>


  </div>


</div>
  <div class="clearfix"></div>

<?php require_once 'footer.php' ?>