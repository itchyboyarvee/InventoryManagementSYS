<?php
session_start();
/*check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login_signup.php");
    exit();
}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Css/home.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <img src="images/logoIMS.png" alt="IMS Logo" class="logo light-logo">
            <div class="search-container">
                <input type="text" placeholder="Search inventory..." class="search-bar">
                <i class='bx bx-search search-icon'></i>
            </div>
        </div>
        <div class="nav-right">
            <a href="#dashboard" class="nav-link">Dashboard</a>
            <a href="#inventory" class="nav-link">Inventory</a>
            <a href="#reports" class="nav-link">Reports</a>
            <div class="btn-group">
                <a href="#add-product" class="create-btn">ADD PRODUCT</a>
                <a href="#orders" class="donate-btn">ORDERS</a>
            </div>
            <div class="user-menu">
                <div class="user-icon">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="dropdown-menu">
                    <a href="account.html">Account</a>
                    <a href="notification.php">Notifications</a>
                    <a href="php/transaction_history.php">Transaction History</a>
                    <a href="manage.php">Manage Account</a>
                    <a href="settings.php">Settings</a>
                    <a href="php/logout.php">Log out</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="dashboard" id="dashboard">
        <div class="dashboard-header">
            <h1>Dashboard Overview</h1>
            <div class="date-filter">
                <input type="date" id="dateFilter">
            </div>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <i class='bx bx-package'></i>
                <div class="stat-info">
                    <h3>Total Products</h3>
                    <p>1,234</p>
                </div>
            </div>
            <div class="stat-card">
                <i class='bx bx-cart'></i>
                <div class="stat-info">
                    <h3>Total Orders</h3>
                    <p>567</p>
                </div>
            </div>
            <div class="stat-card">
                <i class='bx bx-user'></i>
                <div class="stat-info">
                    <h3>Total Customers</h3>
                    <p>890</p>
                </div>
            </div>
            <div class="stat-card">
                <i class='bx bx-dollar'></i>
                <div class="stat-info">
                    <h3>Total Revenue</h3>
                    <p>$45,678</p>
                </div>
            </div>
        </div>
    </section>

    <section class="inventory-section" id="inventory">
        <div class="section-header">
            <h2>Inventory Management</h2>
            <button class="add-product-btn" onclick="window.location.href='add_product.html'">
                <i class='bx bx-plus'></i> Add New Product
            </button>
        </div>
        <div class="inventory-grid">
            <div class="inventory-filters">
                <select class="filter-select">
                    <option value="">All Categories</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="food">Food</option>
                    <option value="furniture">Furniture</option>
                </select>
                <select class="filter-select">
                    <option value="">Sort By</option>
                    <option value="name">Name</option>
                    <option value="price">Price</option>
                    <option value="stock">Stock</option>
                </select>
            </div>
            <div class="inventory-table">
                <table>
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data - will be populated dynamically -->
                        <tr>
                            <td>PRD001</td>
                            <td>Laptop Pro X1</td>
                            <td>Electronics</td>
                            <td>$999.99</td>
                            <td>50</td>
                            <td><span class="status in-stock">In Stock</span></td>
                            <td>
                                <button class="action-btn edit"><i class='bx bx-edit'></i></button>
                                <button class="action-btn delete"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="reports-section" id="reports">
        <h2>Reports & Analytics</h2>
        <div class="reports-grid">
            <div class="report-card">
                <h3>Sales Overview</h3>
                <div class="chart-container">
                    <!-- Chart will be rendered here -->
                </div>
            </div>
            <div class="report-card">
                <h3>Top Selling Products</h3>
                <div class="top-products-list">
                    <!-- Will be populated dynamically -->
                </div>
            </div>
            <div class="report-card">
                <h3>Low Stock Alerts</h3>
                <div class="alerts-list">
                    <!-- Will be populated dynamically -->
                </div>
            </div>
        </div>
    </section>

    <section class="orders-section" id="orders">
        <h2>Recent Orders</h2>
        <div class="orders-table">
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data - will be populated dynamically -->
                    <tr>
                        <td>ORD001</td>
                        <td>John Doe</td>
                        <td>2024-03-15</td>
                        <td>$299.99</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <button class="action-btn view"><i class='bx bx-show'></i></button>
                            <button class="action-btn process"><i class='bx bx-check'></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-links">
                <span>© 2024 Inventory Management System</span>
                <a href="#">Terms</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Help Center</a>
                <a href="#">Contact Support</a>
            </div>
            <div class="footer-logo">
                <img src="images/footerlogo.png" alt="Footer Logo">
            </div>
        </div>
    </footer>

    <script src="js/home.js"></script>
    <script src="js/transitions.js"></script>
</body>
</html> 