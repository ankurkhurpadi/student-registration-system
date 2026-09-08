<?php

$servername = "localhost";
$username = "studentuser";
$password = "YOUR_PASSWORD";
$dbname = "student_registration";

// Database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch students
$sql = "SELECT * FROM students ORDER BY id DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #667eea;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8f8f8;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 18px;
            background: #667eea;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Registered Students</h1>

    <?php if ($result && $result->num_rows > 0): ?>

        <table>

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Address</th>
                <th>Registered At</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): ?>

                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>

                    <td>
                        <?php echo htmlspecialchars($row['name']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['email']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['phone']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['course']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['address']); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row['created_at']); ?>
                    </td>
                </tr>

            <?php endwhile; ?>

        </table>

    <?php else: ?>

        <p style="text-align:center;">
            No students registered yet.
        </p>

    <?php endif; ?>

    <a class="back" href="index.html">← Register New Student</a>

</div>

</body>
</html>

<?php
$conn->close();
?>
