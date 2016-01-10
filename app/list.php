<?php
require_once 'init.php';


// Read pRODUCT
$rs = $db->query("SELECT * FROM T_Product where cid=".$_GET['id']);
    $products = $rs->fetchAll();

print_r($products)

?>
<?php require_once 'header.php' ?>


<?php require_once 'footer.php' ?>