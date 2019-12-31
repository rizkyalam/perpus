<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan array</title>
  </head>
  <body>

    <?php
    $arr = [
      [
        "Nama" => "Alam",
        "Kelas" => 11,
        "Sekolah" => true
      ],
      [
        "Nama" => "Anjay",
        "Kelas" => 13,
        "Sekolah" => true
      ]
  ];
     ?>
      <?php foreach ( $arr as $a ) : ?>
        <ul>
          <li>Nama : <?= $a["Nama"] ?></li>
          <li>Nama : <?= $a["Kelas"] ?></li>
          <li>Nama : <?= $a["Sekolah"] ?></li>
        </ul>
      <?php endforeach; ?>
  </body>
</html>
