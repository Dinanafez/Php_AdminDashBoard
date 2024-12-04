<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dina's Brew Panel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <style>
        /* General body styling */
        body {
            display: flex;
            flex-direction: column;
            height: auto;
            margin: 0;
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

        /* Sidebar styling */
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
            transition: width 0.3s ease; /* Smooth transition for width */
        }

        aside a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
        }

        aside a:hover {
            background-color: #495057;
        }

        /* Content wrapper adjusts based on the sidebar */
        .content-wrapper {
            margin-top: 60px;
            margin-left: 250px;
            padding: 20px;
            min-height: calc(100vh - 60px);
            transition: margin-left 0.3s ease; /* Smooth transition */
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: none;
            border-radius: 10px;
        }

        .card-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        footer {
            margin-left: 250px;
            padding: 10px;
            background-color: #f8f9fa;
            text-align: center;
        }

        .small-box {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .small-box .icon {
            font-size: 3rem;
            color: #6c757d;
        }

        .small-box-footer {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .small-box-footer:hover {
            text-decoration: underline;
        }

        .nav-item {
            color: white;
        }

        .nav-item:hover {
            color: white;
            background-color: #bd8f50;
        }

        a.nav-link:hover {
            color: #000;
            background: #bd8f50;
        }
          /* Allow description text to wrap and show more lines */
          .table td, .table th {
            vertical-align: middle;
        }

        .table td.description {
            white-space: normal; /* Allow text to wrap */
            word-wrap: break-word; /* Break the long words onto new lines */
            max-width: 300px; /* Optional: limit the width for better alignment */
        }

        /* Add tooltip for long descriptions */
        .description-tooltip {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
        }

        .description-tooltip:hover {
            text-overflow: unset;
            white-space: normal;
            background-color: #f8f9fa;
            padding: 5px;
            border-radius: 5px;
        }

        /* Adjust column width */
        .table th, .table td {
            word-wrap: break-word;
        }

        /* Media Queries for responsiveness */
        @media (max-width: 768px) {
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

            /* Show sidebar on smaller screens */
            .sidebar-toggle {
                display: block;
                background-color: #343a40;
                color: white;
                padding: 10px;
                cursor: pointer;
                font-size: 18px;
                position: absolute;
                top: 10px;
                left: 10px;
                z-index: 1000;
            }

            aside.open {
                width: 250px;
            }

            .content-wrapper {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            aside a {
                font-size: 14px;
            }

            .card-header {
                font-size: 14px;
            }

            .small-box .icon {
                font-size: 2rem;
            }
        }

    </style>
</head>
