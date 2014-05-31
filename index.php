<?php
require_once 'MinecraftUserImage.php';

try {
    if(isset($_GET['helm'])) {
        $helm = true;
        $size = empty($_GET['size']) ? 32 : $_GET['size'];
        $mui = new MinecraftUserImage($_GET['helm'], $helm);
        $mui->create_avatar($size)->display_avatar();
    }
} catch(MinecraftUserImage_Exception $e) {
    echo '<strong>Error:</strong> '.$e->getMessage();
}

?>
