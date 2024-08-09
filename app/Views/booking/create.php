<!DOCTYPE html>
<html>
<head>
    <title>Create Booking</title>
</head>
<body>
    <h1>Create a Booking</h1>
    <form action="/booking/create" method="post">
        <label for="flight_id">Flight ID:</label>
        <input type="text" id="flight_id" name="flight_id" required><br>
        <label for="user_id">User ID:</label>
        <input type="text" id="user_id" name="user_id" required><br>
        <label for="passenger_details">Passenger Details:</label>
        <textarea id="passenger_details" name="passenger_details" required></textarea><br>
        <button type="submit">Book Flight</button>
    </form>
</body>
</html>
