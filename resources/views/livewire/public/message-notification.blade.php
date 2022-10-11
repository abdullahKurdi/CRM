<div>
    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-comments fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter">{{$conversationNotfyCount}}</span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
             aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Conversations</h6>
            @forelse($conversationNotfy as $notify)
                <a class="dropdown-item d-flex align-items-center" wire:click="markAsRead('{{$notify->id}}')" style="cursor: pointer">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="{{asset('assets/img/users/'.$notify->data['user']['user_image'])}}"
                             alt="{{$notify->data['user']['user_image']}}">
                        <div class="status-indicator bg-success"></div>
                    </div>
                <div>
                    <div class="font-weight-bold">
                        <div class="small text-gray-500">
                            <strong class="ml-auto">{{$notify->data['user']['first_name']}}</strong>
                                |
                            <small class="margin-auto">{{$notify->data['created_at']}}</small>
                        </div>
                        <div class="text-truncate">{{$notify->data['body']}}</div>

                    </div>
                    <div class="small text-gray-500"></div>
                    <span class="font-weight-bold"></span>
                </div>
            </a>

            @empty
                <p class="text-muted p-2 text-center">No Notification Found</p>
            @endforelse

        </div>
    </li>
</div>
