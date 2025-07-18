<div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
    <livewire:components.user.partials.chat-side-bar />


    @if ($selectedUser)
        <livewire:components.user.partials.chat-box :selectedUser="$selectedUser" wire:key="chat-{{ $selectedUser?->id }}" />
    @else
        <div class="tyn-main tyn-chat-content" id="tynMain">
            <div class="text-center p-5">
                <h4>Select a user to start chatting</h4>
            </div>
        </div>
    @endif

</div>
