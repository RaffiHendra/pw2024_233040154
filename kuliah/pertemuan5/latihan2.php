<?php
$binatang = ["😼","🐶","🐰","🐮","🐵"];
$makanan = ["ramen","bakso","ayam","tahu","tempe"];
array_pop($binatang);
array_pop($binatang);
array_pop($binatang);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <h3>daftar binatang</h3>
    <ol>
        <?php for($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ol>
    <h3>daftar makanan</h3>
    <ul>
    <?php for($i = 0; $i < count($makanan); $i++) { ?>
        <li><?php echo $makanan[$i]; ?></li>
        <?php } ?>
    </ul>
</body>
</html>