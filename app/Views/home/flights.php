<!DOCTYPE html>
<html>
<head>
    <title>Flights</title>
</head>
<body>
    <h1>Available Flights</h1>
    <table>
        <thead>
            <tr>
                <th>Flight Number</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['flights'] as $flight): ?>
                <tr>
                    <td><?php echo $flight['flight_number']; ?></td>
                    <td><?php echo $flight['departure']; ?></td>
                    <td><?php echo $flight['arrival']; ?></td>
                    <td><?php echo $flight['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
