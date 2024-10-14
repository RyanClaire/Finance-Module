<?php
// Placeholder for Booking and Revenue Data
$bookings = [
    ['id' => 1, 'booking_code' => 'B001', 'customer_name' => 'John Doe', 'amount' => 500, 'status' => 'Paid', 'commission' => 50],
    ['id' => 2, 'booking_code' => 'B002', 'customer_name' => 'Jane Smith', 'amount' => 1200, 'status' => 'Paid', 'commission' => 120],
    ['id' => 3, 'booking_code' => 'B003', 'customer_name' => 'Michael Johnson', 'amount' => 800, 'status' => 'Pending', 'commission' => 80],
];

// Placeholder for Payments
$payments = [
    ['id' => 1, 'booking_code' => 'B001', 'payment_method' => 'Credit Card', 'amount' => 500, 'payment_date' => '2024-10-01'],
    ['id' => 2, 'booking_code' => 'B002', 'payment_method' => 'PayPal', 'amount' => 1200, 'payment_date' => '2024-10-05'],
];

// Placeholder for Commission Tracking
$commissions = [
    ['agent' => 'TravelAgent A', 'booking_code' => 'B001', 'commission' => 50],
    ['agent' => 'TravelAgent B', 'booking_code' => 'B002', 'commission' => 120],
    ['agent' => 'TravelAgent C', 'booking_code' => 'B003', 'commission' => 80],
];

// Handle form submission for adding a booking
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_booking'])) {
    $newBooking = [
        'id' => count($bookings) + 1,
        'booking_code' => $_POST['booking_code'],
        'customer_name' => $_POST['customer_name'],
        'amount' => $_POST['amount'],
        'status' => $_POST['status'],
        'commission' => $_POST['commission'],
    ];
    $bookings[] = $newBooking;
    header("Location: booking_revenue.php"); // Reload the page to see the new booking
}

// Handle form submission for adding payment
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_payment'])) {
    $newPayment = [
        'id' => count($payments) + 1,
        'booking_code' => $_POST['payment_booking_code'],
        'payment_method' => $_POST['payment_method'],
        'amount' => $_POST['payment_amount'],
        'payment_date' => $_POST['payment_date'],
    ];
    $payments[] = $newPayment;
    header("Location: booking_revenue.php"); // Reload the page to see the new payment
}

// Handle form submission for adding commission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_commission'])) {
    $newCommission = [
        'agent' => $_POST['agent_name'],
        'booking_code' => $_POST['commission_booking_code'],
        'commission' => $_POST['commission_amount'],
    ];
    $commissions[] = $newCommission;
    header("Location: booking_revenue.php"); // Reload the page to see the new commission
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking and Revenue Management</title>
    <link rel="stylesheet" href="Booking.css">
</head>
<body>

<div class="container">
    <header>
        <h1>Booking and Revenue Management</h1>
        <p>Track bookings, payments, and commissions for a seamless revenue management experience.</p>
    </header>

    <!-- Booking Management Section -->
    <section class="booking-management">
        <h2>Booking Management</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="booking-code">Booking Code:</label>
                <input type="text" id="booking-code" name="booking_code" required>
            </div>
            <div class="form-group">
                <label for="customer-name">Customer Name:</label>
                <input type="text" id="customer-name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount ($):</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="status">Booking Status:</label>
                <select id="status" name="status" required>
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                </select>
            </div>
            <div class="form-group">
                <label for="commission">Commission ($):</label>
                <input type="number" id="commission" name="commission" required>
            </div>
            <button type="submit" name="add_booking">Add Booking</button>
        </form>

        <h3>Booking List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Booking Code</th>
                    <th>Customer Name</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Commission</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking['id']; ?></td>
                    <td><?php echo $booking['booking_code']; ?></td>
                    <td><?php echo $booking['customer_name']; ?></td>
                    <td>$<?php echo $booking['amount']; ?></td>
                    <td><?php echo $booking['status']; ?></td>
                    <td>$<?php echo $booking['commission']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Payment Management Section -->
    <section class="payment-management">
        <h2>Payment Management</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="payment-booking-code">Booking Code:</label>
                <select id="payment-booking-code" name="payment_booking_code" required>
                    <?php foreach ($bookings as $booking): ?>
                        <option value="<?php echo $booking['booking_code']; ?>"><?php echo $booking['booking_code']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <input type="text" id="payment-method" name="payment_method" required>
            </div>
            <div class="form-group">
                <label for="payment-amount">Amount ($):</label>
                <input type="number" id="payment-amount" name="payment_amount" required>
            </div>
            <div class="form-group">
                <label for="payment-date">Payment Date:</label>
                <input type="date" id="payment-date" name="payment_date" required>
            </div>
            <button type="submit" name="add_payment">Add Payment</button>
        </form>

        <h3>Payments List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Booking Code</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Payment Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment): ?>
                <tr>
                    <td><?php echo $payment['id']; ?></td>
                    <td><?php echo $payment['booking_code']; ?></td>
                    <td><?php echo $payment['payment_method']; ?></td>
                    <td>$<?php echo $payment['amount']; ?></td>
                    <td><?php echo $payment['payment_date']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <!-- Commission Tracking Section -->
    <section class="commission-tracking">
        <h2>Commission Tracking</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="agent-name">Agent Name:</label>
                <input type="text" id="agent-name" name="agent_name" required>
            </div>
            <div class="form-group">
                <label for="commission-booking-code">Booking Code:</label>
                <select id="commission-booking-code" name="commission_booking_code" required>
                    <?php foreach ($bookings as $booking): ?>
                        <option value="<?php echo $booking['booking_code']; ?>"><?php echo $booking['booking_code']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="commission-amount">Commission Amount ($):</label>
                <input type="number" id="commission-amount" name="commission_amount" required>
            </div>
            <button type="submit" name="add_commission">Add Commission</button>
        </form>

        <h3>Commission List</h3>
        <table>
            <thead>
                <tr>
                    <th>Agent</th>
                    <th>Booking Code</th>
                    <th>Commission Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commissions as $commission): ?>
                <tr>
                    <td><?php echo $commission['agent']; ?></td>
                    <td><?php echo $commission['booking_code']; ?></td>
                    <td>$<?php echo $commission['commission']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>

</body>
</html>
