<!DOCTYPE html>
<html>
<head>
    <title>Cetak Label</title>
    <style>
        /* Gaya label */
        .label {
            width: 100px;
            height: 50px;
            border: 1px solid #000;
            text-align: center;
            margin: 10px;
            float: left;
        }
    </style>
</head>
<body>
    <?php
    // Daftar data label
    $labels = array("Label 1", "Label 2", "Label 3", "Label 4");

    // Loop melalui data label dan cetak label
    foreach ($labels as $label) {
        echo '<div class="label">' . $label . '</div>';
    }
    ?>
</body>
</html>
