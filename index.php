<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php



$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// var_dump($hotels)

?>




<table class="table table-bordered border-primary">
    <thead>
      <th>Nome</th>
      <th>DESCRIZIONE</th>
      <th>PARCHEGGIO</th>
      <th>VOTO</th>
      <th>DISTANZA DAL CENTRO</th>
    </thead>
<?php 
foreach ($hotels as $item) { ?>
<tr class="table-danger">
<td class="table-danger"><?php echo $item['name'] ?></td>
<td class="table-danger"><?php echo $item['description'] ?></td>
<td class="table-danger"><?php if($item['parking']==true){ echo 'Si';} else{ echo 'No';}?> </td>
<td class="table-danger"><?php echo $item['vote']  ?></td>
<td class="table-danger"><?php echo $item['distance_to_center'] ?> Km</td>
</tr>

<?php } ?>
</table>


</body>
</html>