@extends('layouts.supervisor')

@section('title')
   Conversations
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('assets/template/css/conversations.css')}}">
@endsection

@section('content')
    <div class="">
        <div class="row rounded-lg overflow-hidden shadow">
            <!-- Users box-->
            <div class="col-4 px-0">
                <div class="bg-white">

                    <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">Recent</p>
                    </div>

                    <div class="messages-box">
                        <div class="list-group rounded-0">
                            <livewire:public.conversation-list :conversations="$conversations" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Box-->
            <div class="col-8 px-0">
                <div class="px-4 py-5 chat-box bg-white">
                    index
                </div>
            </div>
        </div>
    </div>

@endsection
