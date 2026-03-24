<?php 
ob_start();
?>

    <title>Edit Car</title>
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
    </style>
    
<div class="container">
    <h1>Edit Car</h1>
    
    <div class="form-container">
        <?php if (isset($editCar) && is_array($editCar)): ?>
            <form id="carForm" method="post" action="index.php?action=modify">
                <input type="hidden" name="id" value="<?= ($editCar['id'] ?? '') ?>">
                <div class="form-group">
                    <label for="carName">Car Name:</label>
                    <input type="text" id="carName" name="name" required value="<?= ($editCar['name'] ?? '') ?>">
                </div>
                <div class="form-group">
                    <label for="carModel">Model:</label>
                    <input type="text" id="carModel" name="model" required value="<?= ($editCar['model'] ?? '') ?>">
                </div>
                <div class="form-group">
                    <label for="carYear">Year:</label>
                    <input type="number" id="carYear" name="year" max="2025" required value="<?= ($editCar['year'] ?? '') ?>">
                </div>
                <div class="form-group">
                    <label for="carPrice">Price ($):</label>
                    <input type="number" id="carPrice" name="price" required value="<?= ($editCar['price'] ?? '') ?>">
                </div>
                <div class="form-group">
                    <label for="carColor">Color:</label>
                    <input type="text" id="carColor" name="color" required value="<?= ($editCar['color'] ?? '') ?>">
                </div>
                <button type="submit" name="submit" id="submitBtn">Update Car</button>
                <a href="index.php?action=order" style="margin-left: 10px; text-decoration: none;">
                    <button type="button" style="background-color: #666;">Cancel</button>
                </a>
            </form>
        <?php else: ?>
            <p>No car selected for editing. 
        <?php endif; ?>
        <br>
        <a href="index.php?action=order" ><button>Go back</button></a></p>
    </div>
</div>

<?php
$page = ob_get_clean();
?>