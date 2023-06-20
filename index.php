<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

    <!-- CSS -->
    <style>
        form{
            margin: 50px;
            text-align: center;
        }

        td{
            text-align: center;
        }

    </style>

</head>

<!-- body -->
<body>

<form> 
    <label for="search">Search:</label>
    <input type="text" name="search">
    <input type="submit" value="SEARCH">
</form>

<table class="table container" >
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">vote</th>
      <th scope="col">Distance_to_center</th>
    </tr>
  </thead>
  <tbody>
  
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

        

        var_dump($_GET);

        if ($_GET == [] || $_GET["search"] == "" ) {
            foreach ($hotels as $hotel) {
            echo 
           "<tr>" .
                "<th>" . $hotel["name"] . "</th>" .
                "<td>" . $hotel["description"] .  "</td>" .
                "<td>" . $hotel["parking"] . "</td>" .
                "<td>" . $hotel["vote"] . "</td>" .
                "<td>" . $hotel["distance_to_center"] . "</td>" .
            "</tr>";
            
        };
        } elseif ($_GET["search"] == "ciao") {
            echo "yes";
        }
    ?>
  </tbody>
</table>
    



</body>
</html>