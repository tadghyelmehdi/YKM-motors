<?php
ob_start();
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 18px;
        text-align: left;
    }

    table th, table td {
        padding: 12px;
        border: 1px solid #ddd;
    }

    table thead th {
        background-color: #f4f4f4;
        color: #333;
    }

    table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tbody tr:hover {
        background-color: #f1f1f1;
    }


</style>

<?php

if (isset($_GET['search'])) {
    $searchTerm = ($_GET['search']); 
    if (isset($searchResults) && !empty($searchResults)) {
        echo '<h2>Results of the search :</h2>';
        echo '<table>';
        echo '<thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Color</th>
                </tr>
              </thead>';
        echo '<tbody>';
        foreach ($searchResults as $car) {
            echo '<tr>';
            echo '<td>' . ($car['id']) . '</td>';
            echo '<td>' . ($car['name']) . '</td>';
            echo '<td>' . ($car['model']) . '</td>';
            echo '<td>' . ($car['year']) . '</td>';
            echo '<td>' . ($car['price']) . '</td>';
            echo '<td>' . ($car['color']) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<p>No results for "' . $searchTerm . '".</p>';
    }
}

?>

<?php
$page = ob_get_clean();
?>