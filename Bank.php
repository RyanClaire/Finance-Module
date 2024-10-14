<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Integration Dashboard</title>
    <link rel="stylesheet" href="Bank.css">
</head>
<body>

<div class="container">
    <!-- Header Section -->
    <header>
        <h1>Bank Integration</h1>
        <input type="text" placeholder="Search..." id="search">
        <div class="notification">
            <span>🔔</span>
        </div>
    </header>

    <!-- Connected Accounts Overview -->
    <section class="connected-accounts">
        <h2>Connected Accounts Overview</h2>
        <div class="account-card">
            <div class="account-info">
                <h3>Main Checking Account</h3>
                <p>Balance: $12,345.67</p>
                <p class="status active">Sync Status: Active</p>
            </div>
            <div class="account-actions">
                <button class="sync-btn">Sync Now</button>
                <button class="manage-btn">Manage Account</button>
            </div>
        </div>

        <div class="account-card">
            <div class="account-info">
                <h3>Payroll Account</h3>
                <p>Balance: $4,567.89</p>
                <p class="status pending">Sync Status: Pending</p>
            </div>
            <div class="account-actions">
                <button class="sync-btn">Sync Now</button>
                <button class="manage-btn">Manage Account</button>
            </div>
        </div>

        <div class="account-card">
            <div class="account-info">
                <h3>Travel Fund</h3>
                <p>Balance: $8,123.45</p>
                <p class="status error">Sync Status: Error</p>
            </div>
            <div class="account-actions">
                <button class="sync-btn">Sync Now</button>
                <button class="manage-btn">Manage Account</button>
            </div>
        </div>
    </section>

    <!-- Recent Transactions -->
    <section class="recent-transactions">
        <h2>Recent Transactions</h2>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-10-05</td>
                    <td>Payment to Vendor A</td>
                    <td>$500.00</td>
                    <td class="reconciled">Reconciled</td>
                    <td><button class="reconcile-btn">Reconcile</button></td>
                </tr>
                <tr>
                    <td>2024-10-07</td>
                    <td>Payment to Vendor B</td>
                    <td>$300.00</td>
                    <td class="pending">Pending</td>
                    <td><button class="view-btn">View</button></td>
                </tr>
                <tr>
                    <td>2024-10-10</td>
                    <td>Salary Payment</td>
                    <td>$2,000.00</td>
                    <td class="discrepancy">Discrepancy</td>
                    <td><button class="reconcile-btn">Reconcile</button></td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- Bank Reconciliation -->
    <section class="reconciliation-status">
        <h2>Reconciliation Status</h2>
        <p class="status pending">Reconciliation Status: Pending</p>
        <p>Mismatches Detected: 2 Transactions</p>
        <div class="actions">
            <button class="view-discrepancies-btn">View Discrepancies</button>
            <button class="manual-reconcile-btn">Manually Reconcile</button>
            <button class="reconcile-all-btn">Reconcile All</button>
        </div>
    </section>
</div>

</body>
</html>
