<!DOCTYPE html>
<html>
<head>
    <title>Analysis Results</title>
    <style>
        body{background:white;}
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            border-right: 1px solid black;
            border-left: 1px solid black ;
            border-bottom: 2px solid black;
        }

        th {
            background-color: lavender;
        }
    </style>
</head>
<body>
    <h2>resultats des annalyses</h2>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbmem";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM analysis_results";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>nom patient</th>";
        echo "<th>type annalyses</th>";
        echo "<th>Norme</th>";
        echo "<th>Resultat</th>";
        echo "<th>Commentaire</th>";
        echo "</tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nom_patient']."</td>";
            echo "<td>".$row['type_analysis']."</td>";
            echo "<td>".$row['norme']."</td>";
            echo "<td>".$row['resultat']."</td>";
            echo "<td>".$row['commentaire']."</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No analysis results found.";
    }
    
    mysqli_close($conn);
    ?>
</body>
</html>
