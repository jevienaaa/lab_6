<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q2</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Students Information</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];

    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['program'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
