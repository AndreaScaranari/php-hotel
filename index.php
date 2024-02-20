<?php
    include 'data/data.php';
    // var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoHotels - La miglior scelta ovunque</title>
</head>
<body>
    <main>
        <!-- Tabella -->
        <table>
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
                <?php foreach ($hotels as $hotel) :?>
                <tr>
                    <?php foreach ($hotel as $property) :?>
                    <td><?= $property ?></td>
                    <?php endforeach ;?>
                </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
    </main>
</body>
</html>