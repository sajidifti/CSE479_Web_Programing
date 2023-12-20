<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Display Data</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Magnitude</th>
            <th>Distance</th>
        </tr>
        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "ifti";

        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, magnitude, distance FROM stars";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["magnitude"] . "</td>";
                echo "<td>" . $row["distance"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No data found.";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
