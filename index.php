<?php
    include 'data/data.php';

    $p_needs = $_GET['parking'] ?? 'reset';
    $filtered_hotels = [];

    if ($p_needs == 'reset') {
        $filtered_hotels = $hotels;
    } else {
    foreach ($hotels as $hotel) {
        if($hotel['parking'] == $p_needs) {
            $filtered_hotels[] = $hotel;
        }
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoHotels - La miglior scelta ovunque</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Fontawesome Icons -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
</head>
<body>
    <header class="text-center py-3 mb-2">
        <h1>BoHotel</h1>
        <h3>La Miglior Scelta Ovunque</h3>
    </header>

    <main>
        <div class="container">

            <section id="form-section" class="py-3 text-center">
                <form action="" method="GET" class="d-flex justify-content-center align-items-center gap-3 row-cols-4">
                    <!-- checkbox -->
                    <div class="radio-area">
                        <p><b>Parking Preferences</b></p>
                        <input type="radio" name="parking" value="reset" id="reset-parking" checked>
                        <label for="yes-parking">Standard</label>
                        <input type="radio" name="parking" value="true" id="yes-parking">
                        <label for="yes-parking">Yes</label>
                        <input type="radio" name="parking" value="" id="no-parking">
                        <label for="no-parking">Nope</label>
                    </div>
                    <!-- select -->
                    <div class="select-area">
                        <label for="vote"><b>Vote Preferences</b></label>
                        <select name="vote" id="vote" class="form-select">
                            <option value="">---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <!-- bottone -->
                    <button class="btn btn-primary">Search!</button>
                </form>
            </section>

            <section id="table-section">
            <!-- Tabella -->
                <table class="table table-striped table-hover text-center">
                    <!-- Intestazione tabella -->
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Parking</th>
                            <th>Vote</th>
                            <th>Distance to Center</th>
                        </tr>
                    </thead>
                    <!-- Corpo tabella -->
                    <tbody>
                        <?php foreach ($filtered_hotels as $hotel) :?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?php echo $hotel['parking'] ? '<i class="fa-solid fa-circle-check text-success"></i>' : '<i class="fa-solid fa-circle-xmark text-danger"></i>' ?></td>
                            <td><?php  for($i = 1; $i <= 5; $i++){
                                if ($i <= $hotel['vote']){
                                    echo '<i class="fa-solid fa-star text-warning"></i>';
                                } else {
                                    echo '<i class="fa-regular fa-star text-warning"></i>';
                                }
                            } ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>
                        </tr>
                        <?php endforeach ;?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</body>
</html>