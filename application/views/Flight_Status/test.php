<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($rute_tujuan as $value) { ?>
        <?php echo $value['kota_berangkat']; ?>
        <?php echo $value['kota_datang']; ?>
        <br>
<?php } ?>

</body>
</html>
