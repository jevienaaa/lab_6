<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 Q1</title>

</head>

<body>
    <?php
        $name = "Jeviena Rani";
        $matric_number = "DI220174";
        $course = "BIT";
        $year_of_study = 2;
        $address = "52, Taman Bukit Kecil, Bukit Mertajam, Penang";

    ?>

    <table>

        <tr>
            <th colspan="2">Student Information</th>
        </tr>

        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php echo "$name"; ?></td>
        </tr>

        <tr>
            <td>Matric Number: </td>
            <td>:</td>
            <td><?php echo "$matric_number"; ?></td>
        </tr>

        <tr>
            <td>Course: </td>
            <td>:</td>
            <td><?php echo "$course"; ?></td>
        </tr>

        <tr>
            <td>Year of study: </td>
            <td>:</td>
            <td><?php echo "$year_of_study"; ?></td>
        </tr>

        <tr>
            <td>Address: </td>
            <td>:</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
    
</body>
</html>




