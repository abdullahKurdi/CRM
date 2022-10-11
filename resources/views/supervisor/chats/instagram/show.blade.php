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
                            <div class="card shadow-line mb-0 chat chat-panel">
                                <div class="p-3 chat-header">
                                    <div class="d-flex">
                                        <div class="w-100 d-flex pl-0">
                                            <img class="rounded-circle shadow avatar-sm mr-3 chat-profile-picture" src="{{asset('assets/img/users/avatar.svg')}}">
                                            <div class="mr-3">
                                                <a href="!#">
                                                    <p class="fw-400 mb-0 text-dark-75">Abdullah Al-kurdi</p>
                                                </a>
                                                <p class="sub-caption text-muted text-small mb-0"><i class="la la-clock mr-1"></i>last seen today at 09:15 PM</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex flex-row mb-0 navigation-mobile scrollable-chat-panel chat-panel-scroll">
                                    <div class="w-100 p-3">
                                        <div class="text-center letter-space drop-shadow text-uppercase fs-12 w-100 mb-0">Today</div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-chat-message fs-13 mb-2">
                                            <p class="mb-0 mr-3 pr-4">Hi how are you ?</p>
                                            <div class="message-options">
                                                <div class="message-time">06:15</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row-reverse mb-2">
                                            <div class="right-chat-message fs-13 mb-2">
                                                <div class="mb-0 mr-3 pr-4">
                                                    <div class="d-flex flex-row">
                                                        <div class="pr-2">Hi Abdullah How Can I Help You ?</div>
                                                        <div class="pr-4"></div>
                                                    </div>
                                                </div>
                                                <div class="message-options dark">
                                                    <div class="message-time">
                                                        <div class="d-flex flex-row">
                                                            <div class="mr-2">06:49</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <div class="chat-search chat-search-right pl-3 pr-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Write a message">
                                        <div class="input-group-append prepend-white">
                      <span class="input-group-text pl-2 pr-2">
                        <i class="chat-upload-trigger fs-19 bi bi-file-earmark-plus ml-2 mr-2"></i>
                        <i class="fs-19 bi bi-emoji-smile ml-2 mr-2"></i>

                        <i class="fs-19 bi bi-cursor ml-2 mr-2"></i>
                        <div class="chat-upload">
                          <div class="d-flex flex-column">
                            <div class="p-2">
                              <button type="button" class="btn btn-secondary btn-md btn-icon btn-circle btn-blushing">
                                <i class="fs-15 bi bi-camera"></i>
                              </button>
                            </div>
                            <div class="p-2">
                              <button type="button" class="btn btn-success btn-md btn-icon btn-circle btn-blushing">
                                <i class="fs-15 bi bi-file-earmark-plus"></i>
                              </button>
                            </div>
                            <div class="p-2">
                              <button type="button" class="btn btn-warning btn-md btn-icon btn-circle btn-blushing">
                                <i class="fs-15 bi bi-person"></i>
                              </button>
                            </div>
                            <div class="p-2">
                              <button type="button" class="btn btn-danger btn-md btn-icon btn-circle btn-blushing">
                                <i class="fs-15 bi bi-card-image"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </span>
                                        </div>
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
