<?php $lang = $_POST["lang"] ;?>
<?php include "./actions.php";?>
<?php include('inc/header.php');?>
<?php $lang == "vi"?include("inc/thank-content-vi.php"):include("inc/thank-content-en.php")?>
<?php include('inc/footer.php');?>
