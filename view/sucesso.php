<?php

    if($_REQUEST){
        $pessoa = $_REQUEST['pessoa'];
    }else{
        header("Location:index.php?pessoas");
    }

    ?>

    <h1><?php echo $pessoa->getNome(); ?> seu cadastro foi concluído</h1>