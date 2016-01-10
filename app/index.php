<?php
require_once 'init.php';


// Read
$rs = $db->query("SELECT * FROM T_Product where isShown=1");
    $products = $rs->fetchAll();



echo $system[$current_lang.'_home_content'];

?>

<?php require_once 'header.php' ?>




<?php require_once 'footer.php' ?>


