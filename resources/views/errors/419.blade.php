@extends('errors::minimal')

@section('title', __('Page Expired'))

@section('message')
    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- 404 Error Text -->
        <div class="text-center ">
            <div class="error mx-auto" data-text="419">419</div>
            <p class="lead text-gray-800 mb-5">Page Expired</p>
        </div>

    </div>
    <div class="row">
        <div class="col-12 text-center mb-5">
            <a href="/" class="btn btn-sm btn-outline-primary">Go Back To Main !</a>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
