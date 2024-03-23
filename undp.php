<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNDP Jobs</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
    }

    .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }
    .in{
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 5px;
        overflow: hidden;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
        
    }

    th {
        background-color: #333333;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.9em;
        color: #fff;
    }

    td {
        background-color: #fff;
    }

    tr:nth-child(even) td {
        background-color: #f9f9f9;
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #45a049;
    }

    @media screen and (max-width: 600px) {
        table {
            overflow-x: auto;
        }
    }
    </style>

        
</head>

<body>

    <?php include 'header.php' ?>
    <div class="container">
        <div class="in">
            <?php
            // Read JSON file
            $json_data = file_get_contents('undp.json');
            $data = json_decode($json_data, true);

            // Display data as a table
            echo '<table>';
            echo '<tr><th>Job Title</th><th>Post Level</th><th>DEADLINE</th><th>Agency</th><th>Location</th><th>APPLY</th></tr>';
            foreach ($data as $item) {
                echo '<tr>';
                echo '<td>' . $item['Job-Title'] . '</td>';
                
                echo '<td>' . $item['Post-Level'] . '</td>';
                echo '<td>' . $item['Apply-by'] . '</td>';
                echo '<td>' . $item['Agency'] . '</td>';
                echo '<td>' . $item['Location'] . '</td>';
                echo '<td><a href="' . $item['Job-link'] . '" class="button" target="_blank">Apply</a></td>';
                echo '</tr>';
            }
            echo '</table>';
            ?>
        </div>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>