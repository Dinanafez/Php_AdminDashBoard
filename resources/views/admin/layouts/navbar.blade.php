<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dina's Brew Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
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
            background-color: #999999;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand " style="background-color:#B0B0B0">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link bg-light text-dark"  href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>                    
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item   text-dark">
                    <a class="nav-link bg-light text-dark" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item   text-dark dropdown">
                    <a class="nav-link bg-light text-dark p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src=" {{asset('admin/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>                            
                    </div>
                </li>
            </ul>
        </nav>