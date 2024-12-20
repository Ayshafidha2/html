<?php
$players = array(
    "Virat Kohli" => "Batsman",
    "Rohit Sharma" => "Bowler",
    "MS Dhoni" => "Batsman",
    "Sachin Tendulkar" => "Batsman",
    "Jasprit Bumrah" => "Bowler",
    "Bhuvneshwar Kumar" => "Medium-Fast Bowler",
    "Rashid Khan" => "Leg-Spinner",
    "David Warner"=> "Opening Batsman",
    " Joe Root" => "Middle-order Batsman",
    "Pat Cummins" => "Fast Bowler",

);
?>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: lavender;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">List of Indian Cricket Players</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Player Name</th>
        <th>Position</th>
    </tr>

    <?php
    $index = 1;
    foreach ($players as $player => $position) {
        echo "<tr>";
        echo "<td>" . $index++ . "</td>";
        echo "<td>" . $player . "</td>";
        echo "<td>" . $position . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

