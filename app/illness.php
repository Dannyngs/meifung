<?php
require_once 'init.php';



$rs = $db->query("SELECT * FROM illness where id =".$_GET['id']);
    $illness = $rs->fetch();

$rs = $db->query("SELECT * FROM category where id =".$illness['cat_id']);
    $category = $rs->fetch();

?>
<?php require_once 'header.php' ?>

<style type="text/css">
    .title{ background: url('_/img/ill-tit.jpg') repeat-x top;}
</style>
<section class="title box">

  <h2><?php echo $illness[$current_lang.'_title']?></h2>
 
</section>


<div class="content_box">


  <!-- Sidebar layout -->
  <div class="sidebar_layout">
 
    <!-- Main column -->
    <div class="main_column differ" style="padding-left:0;">

      <!-- Article -->
      <section>
          <p class="break-menu" style="margin-left:25px;">
              <a href=""><?php echo $lang['illness']?></a> >
              <a href="illnesses.php?id=<?php echo $category['id']?>"> <?php echo $category[$current_lang.'_category']?></a>>
              <?php echo $illness[$current_lang.'_title']?>
          </p>
        <ul class="articles">

          <li class="single">

            

            <article>

              <h3><?php echo $illness[$current_lang.'_title']?></h3>
             
              <p><?php echo $illness[$current_lang.'_content']?></p>
             

            </article>

          </li>

        </ul>
      
      </section>

    </div>


  </div>


</div>
  <div class="clearfix"></div>

<?php require_once 'footer.php' ?>