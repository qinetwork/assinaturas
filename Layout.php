<?php

$name = $_POST['nome'];
$texto = $_REQUEST['assinatura'];
$file = $_POST['file'];

echo $name;
echo "\n";
echo "voce editou \n"; 
echo $texto; 
echo "\n";

echo $file;

?>
    <html>
        <Form Action="index.php">
            <input type="Submit" value="Voltar" Size="20">
        </form>
    </html>
    