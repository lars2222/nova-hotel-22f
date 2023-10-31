<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Reservation Form</title>
    <style>
        /* Add some basic CSS for better appearance */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Room Reservation Form</h1>
        <form action="process_make_a_room.php" method="post">
            <div class="form-group">
                <label for="room_number">Room Number:</label>
                <input type="text" id="room_number" name="room_number" required placeholder="Enter room number">
            </div>
            <div class="form-group">
                <label for="room_type">Room Type:</label>
                <input type="text" id="room_type" name="room_type" required placeholder="Enter room type">
            </div>
            <div class="form-group">
                <label for="bed_count">Bed Count:</label>
                <input type="text" id="bed_count" name="bed_count" required placeholder="Enter bed count">
            </div>
            <div class="form-group">
                <label for="bathroom_type">Bathroom Type:</label>
                <input type="text" id="bathroom_type" name="bathroom_type" required placeholder="Enter bathroom type">
            </div>
            <div class="form-group">
                <label for="view_type">View Type:</label>
                <input type="text" id="view_type" name="view_type" required placeholder="Enter view type">
            </div>
            <div class="form-group">
                <label for="floor_level">Floor Level:</label>
                <input type="text" id="floor_level" name="floor_level" required placeholder="Enter floor level">
            </div>
            <div class="form-group">
                <label for="has_balcony">Has Balcony:</label>
                <input type="text" id="has_balcony" name="has_balcony" required placeholder="Enter 'yes' or 'no'">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>