<div>
    @forelse($conversations as $conversation)
    <a href="{{route('supervisor.conversation.show',$conversation)}}"
       class="list-group-item list-group-item-action  rounded-0 {{ \Str::contains(request()->path(),$conversation->uuid) ? 'list-group-item-light' : 'list-group-item-light' }}">
        <div class="media">
{{--            @if($conversation->users->user_image != '')--}}
{{--                <img alt="{{$conversation->name != ''?  $conversation->name: $conversation->users->pluck('name')->join(',')}}" width="50" class="rounded-circle" src="{{asset('assets/img/users/'.$conversation->user->user_image)}}">--}}
{{--            @else--}}
                <img alt="user" width="50" class="rounded-circle" src="{{asset('assets/img/users/avatar.svg')}}">
{{--            @endif--}}
            <div class="media-body ml-4">
                <div class="d-flex align-items-center justify-content-between mb-1">
                    <h6 class="mb-0">
                        {{$conversation->name != ''?  $conversation->name: $conversation->users->pluck('name')->join(',')}}
                    </h6>
                    <small class="small font-weight-bold">{{\Carbon\Carbon::parse($conversation->messages->first()->created_at)->format('d M')}}</small>
                </div>
                <p class="font-italic mb-0 text-small">
                    @if (!auth()->user()->hasRead($conversation))
                        <span class="{{ \Str::contains(request()->path(), $conversation->uuid) ? 'bg-white' : 'bg-primary' }} mr-2 rounded-circle" style="display: inline-table; width: 10px; height: 10px;"></span>
                    @endif
                    {{\Str::words($conversation->messages->first()->body,6)}}

                </p>
            </div>
        </div>
    </a>
    @empty
        <p class="text-muted">No Conversation found</p>
    @endforelse

{{--    <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">--}}
{{--        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">--}}
{{--            <div class="media-body ml-4">--}}
{{--                <div class="d-flex align-items-center justify-content-between mb-1">--}}
{{--                    <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>--}}
{{--                </div>--}}
{{--                <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}

</div>
