<?php 

    if(isset($_POST['codes'])){
        $file = "../output.php";
        $data = $_POST['codes'];

        $txt = fopen($file, "w") or die("Unable to generate output file!");
        fwrite($txt, $data);
        fclose($txt);
    }
    elseif(isset($_POST['clear'])){
        $txt = fopen("../output.php", "w") or die("Unable to generate output file!");
        fwrite($txt, "");
        fclose($txt);
    }
    else{
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    }


?>