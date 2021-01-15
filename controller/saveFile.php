<?php 

    if(isset($_POST['submit'])){
        $file = "code.txt";
        $data = $_POST['code'];

        $txt = fopen($file, "w") or die("Unable to generate output file!");
        fwrite($txt, $data);
        fclose($txt);

        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        header("Content-Type: text/plain");
        readfile($file);
        unlink($file);

        header("Locaion: ../");
        exit;
    }
    else{
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    }


?>