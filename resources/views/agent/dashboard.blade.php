@extends('layouts.agent')

@section('title')
   Agent Dashboard
@endsection

@section('style')
    <style>
        body{margin-top:20px;}
        .email-app {
            display: flex;
            flex-direction: row;
            background: #fff;
            border: 1px solid #e1e6ef;
        }

        .email-app nav {
            flex: 0 0 200px;
            padding: 1rem;
            border-right: 1px solid #e1e6ef;
        }

        .email-app nav .btn-block {
            margin-bottom: 15px;
        }

        .email-app nav .nav {
            flex-direction: column;
        }

        .email-app nav .nav .nav-item {
            position: relative;
        }

        .email-app nav .nav .nav-item .nav-link,
        .email-app nav .nav .nav-item .navbar .dropdown-toggle,
        .navbar .email-app nav .nav .nav-item .dropdown-toggle {
            color: #151b1e;
            border-bottom: 1px solid #e1e6ef;
        }

        .email-app nav .nav .nav-item .nav-link i,
        .email-app nav .nav .nav-item .navbar .dropdown-toggle i,
        .navbar .email-app nav .nav .nav-item .dropdown-toggle i {
            width: 20px;
            margin: 0 10px 0 0;
            font-size: 14px;
            text-align: center;
        }

        .email-app nav .nav .nav-item .nav-link .badge,
        .email-app nav .nav .nav-item .navbar .dropdown-toggle .badge,
        .navbar .email-app nav .nav .nav-item .dropdown-toggle .badge {
            float: right;
            margin-top: 4px;
            margin-left: 10px;
        }

        .email-app main {
            min-width: 0;
            flex: 1;
            padding: 1rem;
        }

        .email-app .inbox .toolbar {
            padding-bottom: 1rem;
            border-bottom: 1px solid #e1e6ef;
        }

        .email-app .inbox .messages {
            padding: 0;
            list-style: none;
        }

        .email-app .inbox .message {
            position: relative;
            padding: 1rem 1rem 1rem 2rem;
            cursor: pointer;
            border-bottom: 1px solid #e1e6ef;
        }

        .email-app .inbox .message:hover {
            background: #f9f9fa;
        }

        .email-app .inbox .message .actions {
            position: absolute;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .email-app .inbox .message .actions .action {
            width: 2rem;
            margin-bottom: 0.5rem;
            color: #c0cadd;
            text-align: center;
        }

        .email-app .inbox .message a {
            color: #000;
        }

        .email-app .inbox .message a:hover {
            text-decoration: none;
        }

        .email-app .inbox .message.unread .header,
        .email-app .inbox .message.unread .title {
            font-weight: bold;
        }

        .email-app .inbox .message .header {
            display: flex;
            flex-direction: row;
            margin-bottom: 0.5rem;
        }

        .email-app .inbox .message .header .date {
            margin-left: auto;
        }

        .email-app .inbox .message .title {
            margin-bottom: 0.5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .email-app .inbox .message .description {
            font-size: 12px;
        }

        .email-app .message .toolbar {
            padding-bottom: 1rem;
            border-bottom: 1px solid #e1e6ef;
        }

        .email-app .message .details .title {
            padding: 1rem 0;
            font-weight: bold;
        }

        .email-app .message .details .header {
            display: flex;
            padding: 1rem 0;
            margin: 1rem 0;
            border-top: 1px solid #e1e6ef;
            border-bottom: 1px solid #e1e6ef;
        }

        .email-app .message .details .header .avatar {
            width: 40px;
            height: 40px;
            margin-right: 1rem;
        }

        .email-app .message .details .header .from {
            font-size: 12px;
            color: #9faecb;
            align-self: center;
        }

        .email-app .message .details .header .from span {
            display: block;
            font-weight: bold;
        }

        .email-app .message .details .header .date {
            margin-left: auto;
        }

        .email-app .message .details .attachments {
            padding: 1rem 0;
            margin-bottom: 1rem;
            border-top: 3px solid #f9f9fa;
            border-bottom: 3px solid #f9f9fa;
        }

        .email-app .message .details .attachments .attachment {
            display: flex;
            margin: 0.5rem 0;
            font-size: 12px;
            align-self: center;
        }

        .email-app .message .details .attachments .attachment .badge {
            margin: 0 0.5rem;
            line-height: inherit;
        }

        .email-app .message .details .attachments .attachment .menu {
            margin-left: auto;
        }

        .email-app .message .details .attachments .attachment .menu a {
            padding: 0 0.5rem;
            font-size: 14px;
            color: #e1e6ef;
        }

        @media (max-width: 767px) {
            .email-app {
                flex-direction: column;
            }
            .email-app nav {
                flex: 0 0 100%;
            }
        }

        @media (max-width: 575px) {
            .email-app .message .header {
                flex-flow: row wrap;
            }
            .email-app .message .header .date {
                flex: 0 0 100%;
            }
        }



        body{margin-top:20px;
            background-color:#f2f6fc;
            color:#69707a;
        }
        .img-account-profile {
            height: 10rem;
        }
        .rounded-circle {
            border-radius: 50% !important;
        }
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }
        .card .card-header {
            font-weight: 500;
        }
        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }
        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }
        .form-control, .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }
        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }
    </style>
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="">

{{--        <!-- Page Heading -->--}}
{{--        <div class="d-sm-flex align-items-center justify-content-between mb-4">--}}
{{--            <h1 class="h3 mb-0 text-gray-800">Agent Dashboard</h1>--}}
{{--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i--}}
{{--                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>--}}
{{--        </div>--}}

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="">
            <div class="email-app">
                <nav>
                    <a href="#" class="btn btn-success btn-block">New Email</a>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-success">4</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-star"></i> Stared</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-rocket"></i> Sent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-trash-o"></i> Trash<span class="badge badge-danger">5</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-bookmark"></i> Important<span class="badge badge-info">5</span></a>
                        </li>

                    </ul>
                </nav>
                <main class="message">
                    <div class="toolbar">
                        <div class="btn-group">
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-star"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-star-o"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-bookmark-o"></span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-mail-reply"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-mail-reply-all"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-mail-forward"></span>
                            </button>
                        </div>
                        <button type="button" class="btn btn-light">
                            <span class="fa fa-trash-o"></span>
                        </button>
                        <div class="btn-group">
                            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                <span class="fa fa-tags"></span>
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
                                <a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
                                <a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
                                <a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                        <div class="header">
                            <img class="avatar rounded-circle" src="{{asset('assets/img/users/avatar.svg')}}">
                            <div class="from">
                                <span>Lukasz Holeczek</span>
                                lukasz@bootstrapmaster.com
                            </div>
                            <div class="date">Today, <b>3:47 PM</b></div>
                        </div>
                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote><blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>


                        </div>
                        <div class="attachments">
                            <div class="attachment">
                                <span class="badge badge-danger">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
                                <span class="menu">
              <a href="#" class="fa fa-search"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-cloud-download"></a>
            </span>
                            </div>
                            <div class="attachment">
                                <span class="badge badge-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
                                <span class="menu">
              <a href="#" class="fa fa-search"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-cloud-download"></a>
            </span>
                            </div>
                            <div class="attachment">
                                <span class="badge badge-success">xls</span> <b>spreadsheet.xls</b> <i>(984KB)</i>
                                <span class="menu">
              <a href="#" class="fa fa-search"></a>
              <a href="#" class="fa fa-share"></a>
              <a href="#" class="fa fa-cloud-download"></a>
            </span>
                            </div>
                        </div>
                        <form method="post" action="">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
                            </div>
                            <div class="form-group">
                                <button tabindex="3" type="submit" class="btn btn-success">Send message</button>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>

        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                    </div>
                                </div>
                                <!-- Form Row        -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputOrgName">Organization name</label>
                                        <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                                    </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Location</label>
                                        <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputBirthday">Birthday</label>
                                        <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="button">Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Page Content -->
@endsection
