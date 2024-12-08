<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5 question 3</title>
</head>
<body>
    <h2>Lab5 Question 3</h2>
    <?php //create function to generate multiplier
    function multiplication($multiplier){ //access $multiplier
        $result = [];
        for ($i = 1; $i <= 12; $i++){ //loop to calculate product of each number inc multip
            $result[] = [ //store result in array with keys below
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $result;
    }

    //get multiplication result
    $multiplier = 2;
    $table = multiplication($multiplier);
    ?>
    
    <table border="1">
        <thead>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </thead>
        <tbody>
            <?php foreach ($table as $row): ?> <!--foreach loop use to iterate over arrays in PHP !-->
                <!-- $table contains associative array (represent a single row with keys) or rows
                 $row defines element of $table is accessed!-->
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['multiplier']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
    
</body>
</html>