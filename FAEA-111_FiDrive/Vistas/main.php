<?php
$title = "Main";
$cardtitle = "Main";
include_once ('../Vistas/Basicframe/header.php');
?>
<script>
    function ocultaCards(){
        document.getElementById("cardyb").style.display = "None";
    }
    ocultaCards();
</script>

<div class="row">
    <div class="col col-xl-4"></div>
    <div class="col col-xl-4"><img src="https://i.gyazo.com/1ffe63950025fc24bb23de2b87d37a68.png" alt=""></div>
    <div class="col col-xl-4"></div>
</div>
<?php
include_once ('../Vistas/Basicframe/footer.php');
?>

