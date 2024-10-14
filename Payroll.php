<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management</title>
    <link rel="stylesheet" href="Payroll.css">
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <header>
        <h1>Payroll Management</h1>
        <input type="text" placeholder="Search Employee..." id="search">
        <div class="notification">
            <span>🔔</span>
        </div>
    </header>

    <!-- Salary Processing Section -->
    <section class="salary-processing">
        <h2>Salary Processing</h2>
        <table>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Basic Salary</th>
                    <th>Bonus</th>
                    <th>Deductions</th>
                    <th>Net Pay</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamically Rendered Data from Database (Example) -->
                <?php
                // Example of employee data, can be retrieved from database
                $employees = [
                    ['name' => 'John Doe', 'salary' => 5000, 'bonus' => 500, 'deductions' => 200],
                    ['name' => 'Jane Smith', 'salary' => 4200, 'bonus' => 300, 'deductions' => 100],
                ];
                
                foreach ($employees as $employee) {
                    $netPay = $employee['salary'] + $employee['bonus'] - $employee['deductions'];
                    echo "<tr>
                            <td>{$employee['name']}</td>
                            <td>\${$employee['salary']}</td>
                            <td>\${$employee['bonus']}</td>
                            <td>\${$employee['deductions']}</td>
                            <td>\${$netPay}</td>
                            <td><button class='process-btn'>Process</button></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- Tax Withholdings Section -->
    <section class="tax-withholdings">
        <h2>Tax Withholdings</h2>
        <table>
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Gross Salary</th>
                    <th>Taxable Amount</th>
                    <th>Tax Withheld</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamically Rendered Data from Database (Example) -->
                <?php
                // Example of tax data for each employee
                $taxes = [
                    ['name' => 'John Doe', 'salary' => 5000, 'taxable' => 4800, 'tax' => 480],
                    ['name' => 'Jane Smith', 'salary' => 4200, 'taxable' => 4100, 'tax' => 410],
                ];

                foreach ($taxes as $tax) {
                    echo "<tr>
                            <td>{$tax['name']}</td>
                            <td>\${$tax['salary']}</td>
                            <td>\${$tax['taxable']}</td>
                            <td>\${$tax['tax']}</td>
                            <td><button class='update-btn'>Update</button></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- Payroll Reporting Section -->
    <section class="payroll-reporting">
        <h2>Payroll Reporting</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Employee Name</th>
                    <th>Total Pay</th>
                    <th>Tax Withheld</th>
                    <th>Net Pay</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dynamically Rendered Data from Database (Example) -->
                <?php
                // Example of payroll report data
                $reports = [
                    ['date' => '2024-10-01', 'name' => 'John Doe', 'totalPay' => 5300, 'tax' => 480, 'netPay' => 4820],
                    ['date' => '2024-10-01', 'name' => 'Jane Smith', 'totalPay' => 4400, 'tax' => 410, 'netPay' => 3990],
                ];

                foreach ($reports as $report) {
                    echo "<tr>
                            <td>{$report['date']}</td>
                            <td>{$report['name']}</td>
                            <td>\${$report['totalPay']}</td>
                            <td>\${$report['tax']}</td>
                            <td>\${$report['netPay']}</td>
                            <td><button class='generate-btn'>Generate Report</button></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</div>

</body>
</html>
