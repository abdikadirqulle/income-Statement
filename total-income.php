<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Income Statement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Income Statement</a></li>
                <li><a href="total-income.php">Total Statement</a></li>
            </ul>
        </nav>
    </header>


    <div class="dashboard">
        <h1 style="text-align: center; margin-bottom: 30px;">List All Income Statement</h1>
        
        <!-- Income Summary Section -->
        <div class="summary">
            <div class="card">
                <h2>Total Income</h2>
                <p id="total-income">$0.00</p>
            </div>
            <div class="card">
                <h2>Total Savings</h2>
                <p id="total-savings">$0.00</p>
            </div>
        </div>

        <!-- Income Statements Table -->
        <h2>All Income Statements</h2>
        <table id="income-statements">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Income</th>
                    <th>Expense</th>
                    <th>Net Income</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated dynamically here -->
    <tr>
        <td>2024-01-15</td>
        <td>$5,000</td>
        <td>$2,500</td>
        <td>$2,500</td>
    </tr>
    <tr>
        <td>2024-02-10</td>
        <td>$4,200</td>
        <td>$1,800</td>
        <td>$2,400</td>
    </tr>
    <tr>
        <td>2024-03-12</td>
        <td>$6,100</td>
        <td>$3,000</td>
        <td>$3,100</td>
    </tr>
    <tr>
        <td>2024-04-18</td>
        <td>$5,800</td>
        <td>$2,200</td>
        <td>$3,600</td>
    </tr>
    <tr>
        <td>2024-05-22</td>
        <td>$4,750</td>
        <td>$1,950</td>
        <td>$2,800</td>
    </tr>
    <tr>
        <td>2024-06-11</td>
        <td>$7,000</td>
        <td>$3,500</td>
        <td>$3,500</td>
    </tr>
    <tr>
        <td>2024-07-05</td>
        <td>$5,400</td>
        <td>$2,600</td>
        <td>$2,800</td>
    </tr>
    <tr>
        <td>2024-08-17</td>
        <td>$6,800</td>
        <td>$3,200</td>
        <td>$3,600</td>
    </tr>
    <tr>
        <td>2024-09-01</td>
        <td>$4,300</td>
        <td>$1,700</td>
        <td>$2,600</td>
    </tr>
    <tr>
        <td>2024-09-29</td>
        <td>$6,500</td>
        <td>$2,750</td>
        <td>$3,750</td>
    </tr>
    <tr>
        <td>2024-10-04</td>
        <td>$5,000</td>
        <td>$2,100</td>
        <td>$2,900</td>
    </tr>
    <tr>
        <td>2024-10-15</td>
        <td>$7,200</td>
        <td>$3,000</td>
        <td>$4,200</td>
    </tr>
    <tr>
        <td>2024-11-08</td>
        <td>$4,900</td>
        <td>$2,300</td>
        <td>$2,600</td>
    </tr>
    <tr>
        <td>2024-11-20</td>
        <td>$6,000</td>
        <td>$2,500</td>
        <td>$3,500</td>
    </tr>
    <tr>
        <td>2024-12-05</td>
        <td>$5,300</td>
        <td>$1,900</td>
        <td>$3,400</td>
    </tr>
</tbody>
        </table>
    </div>

    <script src="dashboard.js"></script>

</body>
</html>
