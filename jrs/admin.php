<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>

<body>
    <h1>Admin Page - Video List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Video</th>
        </tr>
        <?php
        // Database connection settings (modify with your own)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "personalized";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch video data from the database
        $sql = "SELECT * FROM videos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td><a href='" . $row["video_path"] . "' target='_blank'>Watch Video</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No videos available.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>

</html>