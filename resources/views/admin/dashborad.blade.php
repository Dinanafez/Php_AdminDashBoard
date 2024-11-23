<!DOCTYPE html>
<html lang="en">


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
            <section class="content ">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-4 col-6">							
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
							
							<div class="col-lg-4 col-6">							
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
							
							<div class="col-lg-4 col-6">							
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
                        <!-- Total Products Chart -->
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

                        <!-- Total Orders Chart -->
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

                        <!-- Total Users Chart -->
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

                    <!-- Orders by Status Chart -->
                    
                </div>
            </section>
        </div>

        <!-- Main Footer -->
       
    </div>
    @include('admin.layouts.footer')


    <!-- Scripts -->
    
    <script>
        // Hardcoded Data
        const productCount = 120;
        const orderCount = 450;
        const userCount = 320;
        const ordersByStatus = [300, 100, 50]; // Pending, Delivered, Cancelled
        const orderStatusLabels = ['Pending', 'Delivered', 'Cancelled'];

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

        // Orders by Status Chart
        new Chart(document.getElementById('ordersByStatusChart'), {
            type: 'bar',
            data: {
                labels: orderStatusLabels,
                datasets: [{
                    label: 'Order Status Count',
                    data: ordersByStatus,
                    backgroundColor: ['rgba(75, 192, 192, 0.7)', 'rgba(255, 99, 132, 0.7)', 'rgba(153, 102, 255, 0.7)'],
                }]
            },
            options: { responsive: true }
        });
    </script>
</body>
</html>
