<div class="tyn-main tyn-chat-content" id="tynMain">

    <div class="tyn-chat-head">
        <ul class="tyn-list-inline d-md-none ms-n1">
            <li>
                <button class="btn btn-icon btn-md btn-pill btn-transparent js-toggle-main">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </button>
            </li>
        </ul>
        <div class="tyn-media-group">
            <div class="tyn-media tyn-size-lg d-none d-sm-inline-flex">
                <img src="images/avatar/1.jpg" alt="">
            </div>
            <div class="tyn-media tyn-size-rg d-sm-none">
                <img src="images/avatar/1.jpg" alt="">
            </div>
            <div class="tyn-media-col">
                <div class="tyn-media-row">
                    <h6 class="name">{{ $selectedUser->name }} <span class="d-none d-sm-inline-block">Thompson</span>
                    </h6>
                </div>
                <div class="tyn-media-row has-dot-sap">
                    <span class="meta">Active</span>
                </div>
            </div>
        </div>
        <ul class="tyn-list-inline gap gap-3 ms-auto">
            <li>
                <button class="btn btn-icon btn-light" data-bs-toggle="modal" data-bs-target="#callingScreen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                </button>
            </li>
            <li>
                <button class="btn btn-icon btn-light" data-bs-toggle="modal" data-bs-target="#videoCallingScreen">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                    </svg>
                </button>
            </li>
            <li class="d-none d-sm-block"><button class="btn btn-icon btn-light js-toggle-chat-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </li>
            <li>
                <button class="btn btn-icon btn-light js-toggle-chat-options">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-layout-sidebar-inset-reverse" viewBox="0 0 16 16">
                        <path
                            d="M2 2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                        <path d="M13 4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1z" />
                    </svg>
                </button>
            </li>
        </ul>
        <div class="tyn-chat-search" id="tynChatSearch">
            <div class="flex-grow-1">
                <div class="form-group">
                    <div class="form-control-wrap form-control-plaintext-wrap">
                        <div class="form-control-icon start">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </div>
                        <input type="text" class="form-control form-control-plaintext" id="searchInThisChat"
                            placeholder="Search in this chat">
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center gap gap-3">
                <ul class="tyn-list-inline ">
                    <li>
                        <button class="btn btn-icon btn-sm btn-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-icon btn-sm btn-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </button>
                    </li>
                </ul>
                <ul class="tyn-list-inline ">
                    <li>
                        <button class="btn btn-icon btn-md btn-light js-toggle-chat-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <div class="tyn-chat-body js-scroll-to-end" id="tynChatBody" wire:poll.3000ms="loadMessages"> --}}
    <div class="tyn-chat-body js-scroll-to-end" id="tynChatBody" >
        <div class="tyn-reply" id="tynReply">
            @foreach ($chatMessages as $msg)
                <div class="tyn-reply-item {{ $msg->sender_id === auth()->id() ? 'outgoing' : 'incoming' }}">
                    @if ($msg->sender_id !== auth()->id())
                        <div class="tyn-reply-avatar">
                            <div class="tyn-media tyn-size-md tyn-circle">
                                <img src="images/avatar/1.jpg"
                                    alt="">
                            </div>
                        </div>
                    @endif
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-text">
                                {{ $msg->message }}
                            </div>
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <i class="bi bi-emoji-smile-fill"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="tyn-chat-form">
        <div class="tyn-chat-form-insert">
            <ul class="tyn-list-inline gap gap-3">
                <li class="dropup">
                    <button class="btn btn-icon btn-light btn-md btn-pill" data-bs-toggle="dropdown"
                        data-bs-offset="0,10">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                    </button>
                    <div class="dropdown-menu">
                        <ul class="tyn-list-links">
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                                        <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                        <path
                                            d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM1 3a1 1 0 0 1 1-1h2v2H1zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3zm-4-2h3v2H2a1 1 0 0 1-1-1zm3-1H1V8h3zm0-3H1V5h3z" />
                                    </svg>
                                    <span>New Group</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                                    </svg>
                                    <span>Voice Clip</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-card-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </button>
                </li>
                <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
        <div class="tyn-chat-form-enter">
            <input type="text" class="form-control me-2" placeholder="Type your message..."
                wire:model.defer="message" wire:keydown.enter="sendMessage" />
            <ul class="tyn-list-inline me-n2 my-1">
                <li>
                    <button class="btn btn-icon btn-white btn-md btn-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-mic-fill" viewBox="0 0 16 16">
                            <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                            <path
                                d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="btn btn-icon btn-white btn-md btn-pill" id="tynChatSend" wire:click="sendMessage">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path
                                d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                        </svg>
                    </button>
                </li>
            </ul>
        </div>
    </div>




    {{-- Modal --}}

    <div class="modal fade" tabindex="-1" id="callingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call">
                    <div class="tyn-chat-cover">
                        <img src="images/cover/1.jpg" alt="">
                    </div><!-- .tyn-chat-cover -->
                    <div class="tyn-media-group tyn-media-vr tyn-media-center mt-n4 pb-4">
                        <div class="tyn-media tyn-size-xl tyn-circle border border-2 border-white">
                            <img src="images/avatar/1.jpg" alt="">
                        </div><!-- .tyn-media -->
                        <div class="tyn-media-col">
                            <div class="tyn-media-row has-dot-sap">
                                <span class="meta">Calling ...</span>
                            </div>
                            <div class="tyn-media-row">
                                <h6 class="name">Konstantin Frank</h6>
                            </div>
                        </div><!-- .tyn-media-col -->
                    </div><!-- .tyn-media-group -->
                    <ul class="tyn-list-inline gap gap-3 m-auto py-4">
                        <li>
                            <button class="btn btn-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#videoCallingScreen">
                                <span>Switch To</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                </svg><!-- camera-video-fill -->
                            </button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                    <ul class="tyn-list-inline gap gap-3 mx-auto py-4">
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                </svg><!-- person-plus-fill -->
                            </button>
                        </li><!-- li -->
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                    <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                    <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                </svg><!-- mic-mute-fill -->
                            </button>
                        </li><!-- li -->
                        <li>
                            <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                </svg><!-- telephone-x-fill -->
                            </button>
                        </li><!-- li -->
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="videoCallingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call tyn-chat-call-video">
                    <div class="tyn-chat-call-stack">
                        <div class="tyn-chat-call-cover">
                            <img src="images/v-cover/1.jpg" alt="">
                        </div>
                    </div><!-- .tyn-chat-call-stack -->
                    <div class="tyn-chat-call-stack on-dark">
                        <div class="tyn-media-group p-4">
                            <div class="tyn-media-col align-self-start pt-3">
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="meta">Talking With ...</span>
                                </div>
                                <div class="tyn-media-row">
                                    <h6 class="name">Konstantin Frank</h6>
                                </div>
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="content">02:09 min</span>
                                </div>
                            </div><!-- .tyn-media-col -->
                            <div class="tyn-media tyn-media-1x1_3 tyn-size-3xl border border-2 border-dark">
                                <img src="images/v-cover/2.jpg" alt="">
                            </div><!-- .tyn-media -->
                        </div><!-- .tyn-media-group -->
                        <ul class="tyn-list-inline gap gap-3 mx-auto py-4 justify-content-center  mt-auto">
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
                                    </svg><!-- person-plus-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-light" data-bs-toggle="modal" data-bs-target="#callingScreen">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                                    </svg><!-- camera-video-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                        <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4 4 0 0 0 12 8V7a.5.5 0 0 1 1 0zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a5 5 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4m3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3" />
                                        <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607m-7.84-9.253 12 12 .708-.708-12-12z" />
                                    </svg><!-- mic-mute-fill -->
                                </button>
                            </li><!-- li -->
                            <li>
                                <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                    </svg><!-- telephone-x-fill -->
                                </button>
                            </li><!-- li -->
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .tyn-chat-call-stack -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="muteOptions">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Mute conversation</h4>
                    <ul class="tyn-media-list gap gap-2">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor15min">
                                <label class="form-check-label" for="muteFor15min"> For 15 minutes </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Hour" checked>
                                <label class="form-check-label" for="muteFor1Hour"> For 1 Hours </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Days" checked>
                                <label class="form-check-label" for="muteFor1Days"> For 1 Days </label>
                            </div>
                        </li><!-- li -->
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteForInfinity" checked>
                                <label class="form-check-label" for="muteForInfinity"> Until I turn back On </label>
                            </div>
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                    <ul class="tyn-list-inline gap gap-3 pt-3">
                        <li>
                            <button class="btn btn-md btn-danger js-chat-mute">Mute</button>
                        </li>
                        <li>
                            <button class="btn btn-md btn-light" data-bs-dismiss="modal">Close</button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button><!-- modal-close -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="newChat">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Search by Name</h4>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-control-icon start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg><!-- search -->
                            </div>
                            <input type="text" class="form-control form-control-solid" id="search-contact" placeholder="Search contact">
                        </div>
                    </div><!-- .form-group -->
                    <ul class="tyn-media-list gap gap-3 pt-4">
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/1.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Jasmine Thompson</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@thompson_jasmine</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg><!-- three-dots -->
                                        </button><!-- .dropdown-toggle -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg><!-- chat-left-text -->
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                        </svg><!-- telephone -->
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                        </svg><!-- camera-video -->
                                                        <span>Video Call</span>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/2.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Konstantin Frank</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@konstantin_frank</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg><!-- three-dots -->
                                        </button><!-- .dropdown-toggle -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg><!-- chat-left-text -->
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                        </svg><!-- telephone -->
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                        </svg><!-- camera-video -->
                                                        <span>Video Call</span>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/3.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Mathias Devos</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@mathias_devos</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg><!-- three-dots -->
                                        </button><!-- .dropdown-toggle -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg><!-- chat-left-text -->
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                        </svg><!-- telephone -->
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                        </svg><!-- camera-video -->
                                                        <span>Video Call</span>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/4.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Marie George</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@marie_george</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg><!-- three-dots -->
                                        </button><!-- .dropdown-toggle -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg><!-- chat-left-text -->
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                        </svg><!-- telephone -->
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                        </svg><!-- camera-video -->
                                                        <span>Video Call</span>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="images/avatar/5.jpg" alt="">
                                </div><!-- .tyn-media -->
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Phillip Burke</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@phillip_burke</p>
                                    </div>
                                </div><!-- .tyn-media-col -->
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                            </svg><!-- three-dots -->
                                        </button><!-- .dropdown-toggle -->
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                                                        </svg><!-- chat-left-text -->
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                                        </svg><!-- telephone -->
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li><!-- li -->
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1z" />
                                                        </svg><!-- camera-video -->
                                                        <span>Video Call</span>
                                                    </a>
                                                </li><!-- li -->
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button><!-- modal-close -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="deleteChat">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <div class="py-4 px-4 text-center">
                        <h3>Delete chat</h3>
                        <p class="small">Once you delete your copy of this conversation, it cannot be undone.</p>
                        <ul class="tyn-list-inline gap gap-3 pt-1 justify-content-center">
                            <li>
                                <button class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                            </li>
                            <li>
                                <button class="btn btn-light" data-bs-dismiss="modal">No</button>
                            </li>
                        </ul><!-- .tyn-list-inline -->
                    </div>
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg><!-- x-lg -->
                </button><!-- modal-close -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            Livewire.on('clearChatInput', () => {
                const input = document.getElementById('tynChatInput');
                if (input) input.innerText = '';
                window.livewireMessageContent = '';
            });
        });
    </script>
@endpush
