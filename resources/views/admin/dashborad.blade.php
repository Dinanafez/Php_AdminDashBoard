<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.links')
    <style>
        /* General styling */
        body {
            margin: 0;
            font-family: 'Source Sans Pro', sans-serif;
            background-color: #f4f6f9;
        }

        header {
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            height: 60px;
            z-index: 903;
            background-color: #343a40;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }

        aside {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #c49b63;
            overflow-y: auto;
            z-index: 999;
            padding-top: 20px;
            transition: width 0.3s ease;
        }

        .content-wrapper {
            margin-top: 60px;
            margin-left: 250px;
            padding: 20px;
            min-height: calc(100vh - 60px);
            transition: margin-left 0.3s ease;
        }

        .small-box {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            border-radius: 10px;
        }

        /* Media queries for responsiveness */
        @media (max-width: 992px) {
            header {
                left: 0;
                width: 100%;
            }

            aside {
                width: 0;
                position: absolute;
                top: 0;
                left: -250px;
            }

            .content-wrapper {
                margin-left: 0;
                padding: 10px;
            }

            .chart-container {
                width: 100%;
                margin: 10px 0;
            }

            /* Small-box columns on small screens */
            .col-4 {
                width: 100%;
                margin-bottom: 20px;
            }

            .nav-item {
                font-size: 14px;
            }
        }

        @media (max-width: 576px) {
            .card-header {
                font-size: 14px;
            }

            .small-box .icon {
                font-size: 2rem;
            }

            .col-4 {
                width: 100%;
                margin-bottom: 20px;
            }

            /* Adjust charts for smaller screens */
            .chart-container {
                margin-bottom: 20px;
            }

            .content-wrapper {
                padding: 5px;
            }
        }

    </style>
</head>
<body>
    @include('admin.layouts.navbar')
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Small Box 1 -->
                    <div class="col-4">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>150</h3>
                                <p>Total Orders</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Small Box 2 -->
                    <div class="col-4">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>50</h3>
                                <p>Total Customers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer text-dark">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <!-- Small Box 3 -->
                    <div class="col-4">
                        <div class="small-box card">
                            <div class="inner">
                                <h3>$1000</h3>
                                <p>Total Sale</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="javascript:void(0);" class="small-box-footer">&nbsp;</a>
                        </div>
                    </div>
                </div>

                <!-- Total Products, Orders, and Users Charts -->
                <div class="row">
                    <div class="col-lg-4 chart-container">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Products</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="productsChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 chart-container">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Orders</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="ordersChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 chart-container">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Total Users</h3>
                            </div>
                            <div class="card-body">
                                <canvas id="usersChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        @include('admin.layouts.footer')
    </div>

    <!-- Scripts -->
    <script>
        // Hardcoded Data
        const productCount = 120;
        const orderCount = 450;
        const userCount = 320;

        // Total Products Chart
        new Chart(document.getElementById('productsChart'), {
            type: 'scatter',
            data: {
                labels: ['Products'],
                datasets: [{
                    data: [productCount],
                    backgroundColor: ['rgb(255, 240, 209)'],
                }]
            },
            options: { responsive: true }
        });

        // Total Orders Chart
        new Chart(document.getElementById('ordersChart'), {
            type: 'bar',
            data: {
                labels: ['Orders'],
                datasets: [{
                    data: [orderCount],
                    backgroundColor: ['rgb(121, 87, 87)'],
                }]
            },
            options: { responsive: true }
        });

        // Total Users Chart
        new Chart(document.getElementById('usersChart'), {
            type: 'line',
            data: {
                labels: ['Users'],
                datasets: [{
                    data: [userCount],
                    backgroundColor: ['rgba(75, 192, 192, 0.7)'],
                }]
            },
            options: { responsive: true }
        });
    </script>
</body>
</html>
