<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dina's Brew Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <style>
        /* Chart Styling */
        .chart-container {
            padding: 15px;
            max-width: 400px; /* Smaller charts */
            margin: 0 auto; /* Centering charts */
        }

        /* Dark Coffee Theme */
        .wrapper {
            background-color: #634832; /* Dark coffee brown */
        }

        .content-wrapper {
            background-color:#F5F5F5; /* Darker brown */
        }

        .card {
            background-color: #B0B0B0; /* Coffee brown card background */
            border-color: #4B2C2A;
        }

        .card-header {
            background-color: #C7C7C7;
            color: white;
        }
        .nav-item{
            margin:10px 0;
        }
        .nav-item  .nav-link {
          
            color: black;
        
        }

        .nav-link .nav-icon :hover {
            background-color: #6B6B6B;
            color:black;
        }

      

        .content-header h1 {
            color: white;
        }
        .logo{
            color:black;
            font-waight:900;
        } .content{
            max-height:100vh;
        }
        .main-sidebar {
            background-color:#2f435a;
        }
        .btn {
  display: inline-flex;
  align-items: center;
  text-decoration: none;
  padding: 8px 12px;
  border-radius: 4px;
  font-size: 14px;
  margin-right: 5px;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn i {
  margin-right: 5px;
}

    </style>
</head>