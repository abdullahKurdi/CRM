@extends('layouts.supervisor')

@section('title')
   Mail Inbox
@endsection

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body{
            background:#eee
        }
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
    </style>
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="">

        <div class="bootdey">
            <div class="email-app ">
                <nav>
                    <a href="{{route('supervisor.mail.create')}}" class="btn btn-success btn-block">New Email</a>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supervisor.mail.index')}}"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-success">4</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supervisor.mail.index')}}"><i class="fa fa-star"></i> Stared</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supervisor.mail.index')}}"><i class="fa fa-rocket"></i> Sent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supervisor.mail.index')}}"><i class="fa fa-trash-o"></i> Trash<span class="badge badge-danger">4</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supervisor.mail.show')}}"><i class="fa fa-bookmark"></i> Important</a>
                        </li>

                    </ul>
                </nav>
                <main class="inbox">
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

                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-chevron-left"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-chevron-right"></span>
                            </button>
                        </div>
                    </div>

                    <ul class="messages">
                        <li class="message unread">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">
                        <span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">
                        <span class="fa fa-paper-clip"></span> Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message unread">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>

                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message unread">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                        <li class="message">
                            <a href="{{route('supervisor.mail.show')}}">
                                <div class="actions">
                                    <span class="action"><i class="fa fa-square-o"></i></span>
                                    <span class="action"><i class="fa fa-star-o"></i></span>
                                </div>
                                <div class="header">
                                    <span class="from">Abdullah Al-kurdi</span>
                                    <span class="date">Today, 3:47 PM</span>
                                </div>
                                <div class="title">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </div>
                            </a>
                        </li>
                    </ul>
                </main>
            </div>
        </div>

{{--        <div class="container-xl px-4 mt-4">--}}
{{--            <!-- Account page navigation-->--}}
{{--            <nav class="nav nav-borders">--}}
{{--                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>--}}
{{--                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a>--}}
{{--                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a>--}}
{{--                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a>--}}
{{--            </nav>--}}
{{--            <hr class="mt-0 mb-4">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-4">--}}
{{--                    <!-- Profile picture card-->--}}
{{--                    <div class="card mb-4 mb-xl-0">--}}
{{--                        <div class="card-header">Profile Picture</div>--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <!-- Profile picture image-->--}}
{{--                            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">--}}
{{--                            <!-- Profile picture help block-->--}}
{{--                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>--}}
{{--                            <!-- Profile picture upload button-->--}}
{{--                            <button class="btn btn-primary" type="button">Upload new image</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-8">--}}
{{--                    <!-- Account details card-->--}}
{{--                    <div class="card mb-4">--}}
{{--                        <div class="card-header">Account Details</div>--}}
{{--                        <div class="card-body">--}}
{{--                            <form>--}}
{{--                                <!-- Form Group (username)-->--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>--}}
{{--                                    <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">--}}
{{--                                </div>--}}
{{--                                <!-- Form Row-->--}}
{{--                                <div class="row gx-3 mb-3">--}}
{{--                                    <!-- Form Group (first name)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputFirstName">First name</label>--}}
{{--                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">--}}
{{--                                    </div>--}}
{{--                                    <!-- Form Group (last name)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputLastName">Last name</label>--}}
{{--                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Form Row        -->--}}
{{--                                <div class="row gx-3 mb-3">--}}
{{--                                    <!-- Form Group (organization name)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputOrgName">Organization name</label>--}}
{{--                                        <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">--}}
{{--                                    </div>--}}
{{--                                    <!-- Form Group (location)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputLocation">Location</label>--}}
{{--                                        <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Form Group (email address)-->--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>--}}
{{--                                    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">--}}
{{--                                </div>--}}
{{--                                <!-- Form Row-->--}}
{{--                                <div class="row gx-3 mb-3">--}}
{{--                                    <!-- Form Group (phone number)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputPhone">Phone number</label>--}}
{{--                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">--}}
{{--                                    </div>--}}
{{--                                    <!-- Form Group (birthday)-->--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label class="small mb-1" for="inputBirthday">Birthday</label>--}}
{{--                                        <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- Save changes button-->--}}
{{--                                <button class="btn btn-primary" type="button">Save changes</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    <!-- Page Content -->
@endsection
