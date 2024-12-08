<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab5a_q2</title>
</head>
<body>
    <h2>Lab5 Question 2</h2>
    <?php 
    $students = [
        [
            'name'=> 'Alice',
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
        ?>
        <table border="1">
            <thead>
                <tr> <!--make headers in one line!-->
                    <th>Name</th>
                    <th>Program</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody> <!-- to include data in students @ iterate over each students in array!-->
                <?php foreach($students as $students): ?>
                    <tr> <!-- access indv properties using $students key!-->
                        <td><?php echo $students['name'];?></td>
                        <td><?php echo $students['program'];?></td>
                        <td><?php echo $students['age'];?></td>
                    </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    
</body>
</html>