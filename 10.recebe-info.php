<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<h1>
    <?php
        echo $_GET['nome'];
        echo $_POST['nome'];
    ?>
</h1>