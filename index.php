<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Statement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header Navigation -->
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Income Statement </a></li>
                <li><a href="total-income.php">Total Statement</a></li>
            </ul>
        </nav>
    </header>
    <div class="dashboard">
        <div style="text-align: center">
            <h1>Add New Income Statement</h1>
        </div>

        <div class="form-container"> 
            <form id="income-form">
                <label for="income">Income:</label>
                <input type="number" id="income" name="income" required>

                <label for="expense">Expense:</label>
                <input type="number" id="expense" name="expense" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <button type="submit">Calculate</button>
            </form>
        </div>

        <div class="results">
            <h2>Results</h2>
            <p id="result-display">Enter data to calculate.</p>
        </div>
    </div>
</body>
</html>
