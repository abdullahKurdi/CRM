@php
    $current_page = \Route::currentRouteName();
@endphp

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion {{Session::get('sidebar_toggled')}}" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('supervisor.index')}}">
        <div class="sidebar-brand-icon ">
            <img src="{{asset('assets/img/system/logo.png')}}" class="img-fluid" alt="logo" width="60PX">
        </div>
        <div class="sidebar-brand-text mx-2">EXTENSY<sup> v2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @role(['supervisor'])
    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if($current_page == 'supervisor.index' || $current_page == 'supervisor.tickets.index' || $current_page == 'supervisor.socials.index' || $current_page == 'supervisor.chats.index') active @endif">
        <a
            class="nav-link collapsed "
            href="#"
            data-toggle="collapse"
            data-target="#collapseDashboards"
            aria-expanded="true"
            aria-controls="collapseDashboards">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboards</span>
        </a>
        <div
            id="collapseDashboards"
            class="collapse @if(($current_page == 'supervisor.index' || $current_page == 'supervisor.tickets.index' || $current_page == 'supervisor.socials.index' || $current_page == 'supervisor.chats.index') && Session::get('sidebar_toggled') != 'toggled') show @endif"
             aria-labelledby="headingDashboards"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($current_page == 'supervisor.index') active @endif" href="{{route('supervisor.index')}}">Main</a>
                <a class="collapse-item @if($current_page == 'supervisor.tickets.index') active @endif" href="{{route('supervisor.tickets.index')}}">Tickets</a>
                <a class="collapse-item @if($current_page == 'supervisor.socials.index') active @endif" href="{{route('supervisor.socials.index')}}">Social Media</a>
                <a class="collapse-item @if($current_page == 'supervisor.chats.index') active @endif" href="{{route('supervisor.chats.index')}}">Chats</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('supervisor.conversation.index')}}">
            <i class="fas fa-comment "></i>
            <span>Conversation</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <li class="nav-item @if($current_page == 'supervisor.mail.index' || $current_page == 'supervisor.mail.show' || $current_page == 'supervisor.mail.create' ) active @endif">
        <a
            class="nav-link collapsed "
            href="#"
            data-toggle="collapse"
            data-target="#collapseMail"
            aria-expanded="true"
            aria-controls="collapseMail">
            <i class="fa fa-envelope "></i>
            <span>Mail</span>
        </a>
        <div
            id="collapseMail"
            class="collapse @if(($current_page == 'supervisor.mail.index' || $current_page == 'supervisor.mail.show' || $current_page == 'supervisor.mail.create' ) && Session::get('sidebar_toggled') != 'toggled') show @endif"
            aria-labelledby="headingMail"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($current_page == 'supervisor.mail.index' || $current_page == 'supervisor.mail.show' || $current_page == 'supervisor.mail.create') active @endif" href="{{route('supervisor.mail.index')}}">Inbox</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if($current_page == 'supervisor.messenger.show' ||$current_page == 'supervisor.instagram.show' ||$current_page == 'supervisor.twitter.show' ||$current_page == 'supervisor.whatsapp.show' ||$current_page == 'supervisor.livechat.show' ) active @endif">
        <a
            class="nav-link collapsed "
            href="#"
            data-toggle="collapse"
            data-target="#collapseChat"
            aria-expanded="true"
            aria-controls="collapseChat">
            <i class="fa fa-comments "></i>
            <span>Chats</span>
        </a>
        <div
            id="collapseChat"
            class="collapse @if(($current_page == 'supervisor.messenger.index'||$current_page == 'supervisor.instagram.index'||$current_page == 'supervisor.twitter.index'||$current_page == 'supervisor.whatsapp.index'||$current_page == 'supervisor.livechat.index') && Session::get('sidebar_toggled') != 'toggled') show @endif"
            aria-labelledby="headingMail"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($current_page == 'supervisor.messenger.show' || $current_page == 'supervisor.messenger.index') active @endif" href="{{route('supervisor.messenger.index')}}">Messenger</a>
                <a class="collapse-item @if($current_page == 'supervisor.instagram.show' || $current_page == 'supervisor.instagram.index') active @endif" href="{{route('supervisor.instagram.index')}}">Instagram</a>
                <a class="collapse-item @if($current_page == 'supervisor.twitter.show' || $current_page == 'supervisor.twitter.index') active @endif" href="{{route('supervisor.twitter.index')}}">Twitter</a>
                <a class="collapse-item @if($current_page == 'supervisor.whatsapp.show' || $current_page == 'supervisor.whatsapp.index') active @endif" href="{{route('supervisor.whatsapp.index')}}">Whatsapp</a>
                <a class="collapse-item @if($current_page == 'supervisor.livechat.show' || $current_page == 'supervisor.livechat.index') active @endif" href="{{route('supervisor.livechat.index')}}">Livechat</a>

            </div>
        </div>
    </li>

    <li class="nav-item @if($current_page == 'supervisor.report.ticket_detailed.index' || $current_page == 'supervisor.report.social_media_detailed.index' || $current_page == 'supervisor.report.chat_detailed.index' ) active @endif">
        <a
            class="nav-link collapsed"
            href="#"
            data-toggle="collapse"
            data-target="#collapseReport"
            aria-expanded="true"
            aria-controls="collapseReport">
            <i class="fa fa-file"></i>
            <span>Tickets Reports</span>
        </a>
        <div
            id="collapseReport"
            class="collapse @if(($current_page == 'supervisor.report.ticket_detailed.index' || $current_page == 'supervisor.report.social_media_detailed.index' || $current_page == 'supervisor.report.chat_detailed.index' ) && Session::get('sidebar_toggled') != 'toggled') show @endif"
            aria-labelledby="headingReport"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item @if($current_page  == 'supervisor.report.ticket_detailed.index' ) active @endif" href="{{route('supervisor.report.ticket_detailed.index')}}">Ticket Detailed</a>
                <a class="collapse-item @if($current_page  == 'supervisor.report.social_media_detailed.index' ) active @endif" href="{{route('supervisor.report.social_media_detailed.index')}}">Social Media Detailed</a>
                <a class="collapse-item @if( $current_page == 'supervisor.report.chat_detailed.index' ) active @endif" href="{{route('supervisor.report.chat_detailed.index')}}">Chat Detailed</a>
            </div>
        </div>
    </li>
    <!-- Divider -->

    @endrole





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle" onclick="sidebarToggled()"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<script>
    function sidebarToggled(){
        $(function(){
            $.ajax({url: "{{route('sidebar')}}", success: function(result){console.log(result)}});
        });
    }
</script>
