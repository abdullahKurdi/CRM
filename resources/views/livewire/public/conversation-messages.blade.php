<div>

    @foreach($messages as $message)
{{--        {{$message}}--}}
        @if($message->isOwn())

            <livewire:public.conversation-message-own :message="$message" :key="$message->id" />
        @else
            <livewire:public.conversation-message :message="$message" :key="$message->id" />
        @endif
    @endforeach
</div>
