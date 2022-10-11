<div>
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-comment fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">{{$notificationCount}}</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
         aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
            Alerts Center
        </h6>
{{--        @dd($notifications)--}}
        @forelse($notifications as $notification)
{{--            @dd($notification)--}}
        <a class="dropdown-item d-flex align-items-center" href="{{$notification->data['rout_url']}}">
            <div class="mr-3">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                </div>
            </div>
            <div>
                <div class="small text-gray-500">{{$notification->data['user']}} - {{$notification->data['created_at']}}</div>
                <span class="font-weight-bold">{{$notification->data['body']}}</span>
            </div>
        </a>
        @empty
        @endforelse
        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
    </div>
</div>
