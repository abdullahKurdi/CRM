@extends('layouts.supervisor')

@section('title')
   Instagram inbox
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"/>
    <link href="{{asset('assets/template/css/chat.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="main-wrapper">
        <div class="">
            <div class="page-content">
                <div class="">
                    <div class="row">
                        <div class="col-md-12 col-12 card-stacked p-0 m-0">
                            <div class="card shadow-line mb-0 chat">
                                <div class="chat-search chat-search pl-4 pr-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search a conversation">
                                        <div class="input-group-append prepend-white">
                      <span class="input-group-text pl-2 pr-2">
                        <i class="fs-17 las la-search drop-shadow"></i>
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="archived-messages d-flex p-3 pl-4 pr-4">
                                    <div class="w-100">
                                        <div class="d-flex pl-0">
                                            <div class="d-flex flex-row mt-1">
                        <span class="margin-auto mr-2">
                          <div class="svg15 archived"></div>
                        </span>
                                                <p class="margin-auto fw-400 text-dark-75">Archived</p>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-user-panel ">
                                    <div class="d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll">
                                        <a href="{{route('supervisor.instagram.show')}}" class="chat-item d-flex pl-4 pr-2 pt-3 pb-3">
                                            <div class="w-100">
                                                <div class="d-flex pl-0">
                                                    <img class="rounded-circle shadow avatar-sm mr-3" src="{{asset('assets/img/users/avatar.svg')}}">                                                    <div>
                                                        <p class="margin-auto fw-400 text-dark-75">Yaman Saleh</p>
                                                        <div class="d-flex flex-row mt-1">
                                                            <span class="message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4">Hey Abdullah, If you are free now we can meet tonight ?</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 margin-auto pl-2 pr-3">
                                                <div class="d-flex flex-column">
                                                    <p class="text-muted text-right fs-13 mb-2">08:21</p>
                                                    <span class="round badge badge-light-success margin-auto">4</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('supervisor.instagram.show')}}" class="chat-item d-flex pl-4 pr-2 pt-3 pb-3">
                                            <div class="w-100">
                                                <div class="d-flex pl-0">
                                                    <img class="rounded-circle shadow avatar-sm mr-3" src="{{asset('assets/img/users/avatar.svg')}}">

                                                    <div>
                                                        <p class="margin-auto fw-400 text-dark-75">Abdullah Al-kurdi</p>
                                                        <div class="d-flex flex-row mt-1">
                                                            <span class="message-shortcut margin-auto text-muted fs-13 ml-1 mr-4">Hi how are you ?</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 margin-auto pl-2 pr-3">
                                                <div class="d-flex flex-column">
                                                    <p class="text-muted text-right fs-13 mb-2">08:55</p>
                                                    <span class="round badge badge-light-success margin-auto">4</span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{route('supervisor.instagram.show')}}" class="chat-item d-flex pl-4 pr-2 pt-3 pb-3">
                                            <div class="w-100">
                                                <div class="d-flex pl-0">
                                                    <img class="rounded-circle shadow avatar-sm mr-3" src="{{asset('assets/img/users/avatar.svg')}}">                                                    <div>
                                                        <p class="margin-auto fw-400 text-dark-75">Yaman Saleh</p>
                                                        <div class="d-flex flex-row mt-1">
                                                            <span class="message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4">Hey Abdullah, If you are free now we can meet tonight ?</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0 margin-auto pl-2 pr-3">
                                                <div class="d-flex flex-column">
                                                    <p class="text-muted text-right fs-13 mb-2">08:21</p>
                                                    <span class="round badge badge-light-success margin-auto">2</span>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js"></script>
    <script>
        (function($) {
            "use strict";
            $('.scrollable-chat-panel').perfectScrollbar();
            var position = $(".chat-search").last().position().top;
            $('.scrollable-chat-panel').scrollTop(position);
            $('.scrollable-chat-panel').perfectScrollbar('update');
            $('.pagination-scrool').perfectScrollbar();

            $('.chat-upload-trigger').on('click', function(e) {
                $(this).parent().find('.chat-upload').toggleClass("active");
            });
            $('.user-detail-trigger').on('click', function(e) {
                $(this).closest('.chat').find('.chat-user-detail').toggleClass("active");
            });
            $('.user-undetail-trigger').on('click', function(e) {
                $(this).closest('.chat').find('.chat-user-detail').toggleClass("active");
            });
        })(jQuery);
    </script>
@endsection
