<?php 
ob_start();
?>

    <title>Car Management</title>
    <style>
        :root {
            --primary-color: #d40000;
            --secondary-color: #ff3737;
            --dark-color: #333;
            --light-color: #f5f5f5;
            --text-color: #555;
            --white: #fff;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .form-container {
            background-color: var(--white);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: var(--text-color);
        }

        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: var(--secondary-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: var(--primary-color);
            color: var(--white);
        }

        tr:hover {
            background-color: #f9f9f9;
        }

        .action-btn {
            display: inline-block;
            margin-right: 5px;
            padding: 6px 12px;
            font-size: 14px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }

        .confirm-btn {
            background-color: var(--secondary-color);
            font-weight: bold;
        }

        .delete-btn {
            background-color: var(--dark-color);
        }

        .delete-btn:hover {
            background-color: #555;
        }
        
        .confirm-btn:hover {
            background-color: #ff5555;
        }
    </style>


<div class="container">
    <h1><?= isset($editCar) ? 'Edit Car' : 'Add New Car' ?></h1>
    
    <div class="form-container">
    <form id="carForm" method="post" action="index.php?action=add">
    <div class="form-group">
        <label for="carName">Car Name:</label>
        <input type="text" id="carName" name="name" required value="">
    </div>
    <div class="form-group">
        <label for="carModel">Model:</label>
        <input type="text" id="carModel" name="model" required value="">
    </div>
    <div class="form-group">
        <label for="carYear">Year:</label>
        <input type="number" id="carYear" name="year" max="2025" required value="">
    </div>
    <div class="form-group">
        <label for="carPrice">Price ($):</label>
        <input type="number" id="carPrice" name="price" required value="">
    </div>
    <div class="form-group">
        <label for="carColor">Color:</label>
        <input type="text" id="carColor" name="color" required value="">
    </div>
    <button type="submit" name="submit" id="submitBtn">Add Car</button>
</form>
    </div>

    <div class="form-container">
        <h2>Car Inventory</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Color</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cars as $row): ?>
                    <tr>
                        <td><?= ($row['id']) ?></td>
                        <td><?= ($row['name']) ?></td>
                        <td><?= ($row['model']) ?></td>
                        <td><?= ($row['year']) ?></td>
                        <td>$<?= number_format($row['price'], 2) ?></td>
                        <td><?= ($row['color']) ?></td>
                        <td>
                        <a href="index.php?action=modify&edit=<?= $row['id'] ?>" class="action-btn confirm-btn">Edit</a>                            <a href="index.php?action=delete&id=<?= $row['id'] ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this car?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
$page = ob_get_clean();
?>