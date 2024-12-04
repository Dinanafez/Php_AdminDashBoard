<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dina's Brew</title>
    <link rel="stylesheet" href="{{asset('user')}}/css/cstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f5f5f5;
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }

        .btn-default {
            border-color: rgba(24, 28, 33, 0.1);
            background: rgba(0, 0, 0, 0);
            color: #4E5155;
        }

        .btn-outline-primary {
            border-color: #26B4FF;
            background: transparent;
            color: #26B4FF;
        }

        .text-light {
            color: #babbbc !important;
        }

        .card {
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.1);
        }

        .list-group-item.active {
            font-weight: bold;
            background-color: #e9ecef !important;
        }

        .form-label {
            font-weight: bold;
        }
        
    </style>
   @include('userpages.parts.head')
</head>

<body>
    @include('userpages.parts.nav')

    <div class="container">
        <h4 class="font-weight-bold py-3 mb-4 text-center">Account Settings</h4>
        <div class="card w-100">
            <div class="row no-gutters">
                <!-- Sidebar -->
                <div class="col-md-3 border-right">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item list-group-item-action active" data-toggle="tab"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="tab"
                            href="#account-change-password">Change Password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="tab" href="#account-info">Info</a>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <!-- General Tab -->
                        <div class="tab-pane fade show active" id="account-general">
                            <div class="card-body">
                                <div class="media align-items-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Avatar"
                                        class="d-block ui-w-80 rounded-circle">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary btn-sm">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput" hidden>
                                        </label>
                                        <button type="button" class="btn btn-default btn-sm">Reset</button>
                                        <small class="form-text text-muted mt-1">Allowed JPG, GIF, or PNG. Max size
                                            800K.</small>
                                    </div>
                                </div>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="nmaxwell">
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" value="Nelle Maxwell">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="nmaxwell@mail.com">
                                        <div class="alert alert-warning mt-2">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <a href="#">Resend confirmation</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" value="Company Ltd.">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Change Password Tab -->
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Repeat New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Info Tab -->
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body">
                                <p>Additional information can be added here.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-right p-3">
                        <button type="button" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
