<div class="tyn-content tyn-content-full-height tyn-chat has-aside-base">
    <livewire:components.user.partials.chat-side-bar />
    <div class="tyn-main tyn-chat-content" id="tynMain">
        <div class="tyn-chat-head">
            <ul class="tyn-list-inline d-md-none ms-n1">
                <li><button class="btn btn-icon btn-md btn-pill btn-transparent js-toggle-main">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                        </svg><!-- arrow-left -->
                    </button></li>
            </ul>
            <div class="tyn-media-group">
                <div class="tyn-media tyn-size-lg d-none d-sm-inline-flex">
                    <img src="images/avatar/1.jpg" alt="">
                </div><!-- .tyn-media -->
                <div class="tyn-media tyn-size-rg d-sm-none">
                    <img src="images/avatar/1.jpg" alt="">
                </div><!-- .tyn-media -->
                <div class="tyn-media-col">
                    <div class="tyn-media-row">
                        <h6 class="name">Jasmine <span class="d-none d-sm-inline-block">Thompson</span></h6>
                    </div>
                    <div class="tyn-media-row has-dot-sap">
                        <span class="meta">Active</span>
                    </div>
                </div><!-- .tyn-media-col -->
            </div><!-- .tyn-media-group -->
            <ul class="tyn-list-inline gap gap-3 ms-auto">
                <li><button class="btn btn-icon btn-light" data-bs-toggle="modal" data-bs-target="#callingScreen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg><!-- telephone-fill -->
                    </button></li>
                <li><button class="btn btn-icon btn-light" data-bs-toggle="modal" data-bs-target="#videoCallingScreen">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2z" />
                        </svg><!-- camera-video-fill -->
                    </button></li>
                <li class="d-none d-sm-block"><button class="btn btn-icon btn-light js-toggle-chat-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg><!-- search -->
                    </button></li>
                <li><button class="btn btn-icon btn-light js-toggle-chat-options">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-layout-sidebar-inset-reverse" viewBox="0 0 16 16">
                            <path
                                d="M2 2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                            <path d="M13 4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1z" />
                        </svg><!-- layout-sidebar-inset-reverse -->
                    </button></li>
            </ul><!-- .tyn-list-inline -->
            <div class="tyn-chat-search" id="tynChatSearch">
                <div class="flex-grow-1">
                    <div class="form-group">
                        <div class="form-control-wrap form-control-plaintext-wrap">
                            <div class="form-control-icon start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                </svg><!-- search -->
                            </div>
                            <input type="text" class="form-control form-control-plaintext" id="searchInThisChat"
                                placeholder="Search in this chat">
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap gap-3">
                    <ul class="tyn-list-inline ">
                        <li><button class="btn btn-icon btn-sm btn-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708z" />
                                </svg><!-- chevron-up -->
                            </button></li>
                        <li><button class="btn btn-icon btn-sm btn-transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                                </svg><!-- chevron-down -->
                            </button></li>
                    </ul>
                    <ul class="tyn-list-inline ">
                        <li><button class="btn btn-icon btn-md btn-light js-toggle-chat-search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg><!-- x-lg -->
                            </button></li>
                    </ul>
                </div>
            </div><!-- .tyn-chat-search -->
        </div><!-- .tyn-chat-head -->
        <div class="tyn-chat-body js-scroll-to-end" id="tynChatBody">
            <div class="tyn-reply" id="tynReply">
                <div class="tyn-reply-item incoming">
                    <div class="tyn-reply-avatar">
                        <div class="tyn-media tyn-size-md tyn-circle">
                            <img src="images/avatar/2.jpg" alt="">
                        </div>
                    </div><!-- .tyn-reply-avatar -->
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-call">
                                <a href="#" class="tyn-call">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg text-bg-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-person-video3" viewBox="0 0 16 16">
                                                <path
                                                    d="M14 9.5a2 2 0 1 1-4 0 2 2 0 0 1 4 0m-6 5.7c0 .8.8.8.8.8h6.4s.8 0 .8-.8-.8-3.2-4-3.2-4 2.4-4 3.2" />
                                                <path
                                                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h5.243c.122-.326.295-.668.526-1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v7.81c.353.23.656.496.91.783Q16 12.312 16 12V4a2 2 0 0 0-2-2z" />
                                            </svg><!-- person-video3 -->
                                        </div>
                                        <div class="tyn-media-col">
                                            <h6 class="name">Outgoing Audio Call</h6>
                                            <div class="meta">03:29 PM</div>
                                        </div>
                                    </div><!-- .tyn-media-group -->
                                </a><!-- .tyn-call -->
                            </div><!-- .tyn-reply-call -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-item outgoing">
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-call">
                                <a href="#" class="tyn-call">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg text-bg-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone-forward-fill"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708" />
                                            </svg><!-- telephone-forward-fill -->
                                        </div>
                                        <div class="tyn-media-col">
                                            <h6 class="name">Outgoing Audio Call</h6>
                                            <div class="meta">03:29 PM</div>
                                        </div>
                                    </div><!-- .tyn-media-group -->
                                </a><!-- .tyn-call -->
                            </div><!-- .tyn-reply-call -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-call">
                                <a href="#" class="tyn-call">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg text-bg-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone-x-fill"
                                                viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                            </svg><!-- telephone-x-fill -->
                                        </div>
                                        <div class="tyn-media-col">
                                            <h6 class="name">Missed Audio Call</h6>
                                            <div class="meta">03:29 PM</div>
                                        </div>
                                    </div><!-- .tyn-media-group -->
                                </a><!-- .tyn-call -->
                            </div><!-- .tyn-reply-call -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-separator">Aug 22, 2022, 3:05 PM</div>
                <div class="tyn-reply-item outgoing">
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-text"> Do you know which App or feature it will require to set up.
                            </div><!-- tyn-reply-text -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-item incoming">
                    <div class="tyn-reply-avatar">
                        <div class="tyn-media tyn-size-md tyn-circle">
                            <img src="images/avatar/2.jpg" alt="">
                        </div>
                    </div><!-- .tyn-reply-avatar -->
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-link">
                                <a class="tyn-reply-anchor"
                                    href="https://www.envato.com/atomic-power-plant-engine/">https://www.envato.com/atomic-power-plant-engine/</a>
                            </div><!-- .tyn-reply-link -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-text"> I hope these article helps. </div><!-- .tyn-reply-text -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-separator">May 10, 2022, 11:14 AM</div>
                <div class="tyn-reply-item outgoing">
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-media">
                                <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8" class="glightbox tyn-video"
                                    data-gallery="media-video">
                                    <img src="images/gallery/video/hr-6.jpg" class="tyn-image" alt="">
                                    <div class="tyn-video-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                            <path
                                                d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                        </svg><!-- play-fill -->
                                    </div>
                                </a><!-- .tyn-video -->
                            </div><!-- .tyn-reply-media -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-item incoming">
                    <div class="tyn-reply-avatar">
                        <div class="tyn-media tyn-size-md tyn-circle">
                            <img src="images/avatar/2.jpg" alt="">
                        </div>
                    </div><!-- .tyn-reply-avatar -->
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-media">
                                <a href="images/gallery/chat/1.jpg" class="glightbox tyn-thumb"
                                    data-gallery="media-photo">
                                    <img src="images/gallery/chat/thumb-1.jpg" class="tyn-image" alt="">
                                </a>
                                <a href="images/gallery/chat/2.jpg" class="glightbox tyn-thumb"
                                    data-gallery="media-photo">
                                    <img src="images/gallery/chat/thumb-2.jpg" class="tyn-image" alt="">
                                </a>
                                <a href="images/gallery/chat/3.jpg" class="glightbox tyn-thumb"
                                    data-gallery="media-photo">
                                    <img src="images/gallery/chat/thumb-3.jpg" class="tyn-image" alt="">
                                </a>
                                <a href="images/gallery/chat/4.jpg" class="glightbox tyn-thumb"
                                    data-gallery="media-photo">
                                    <img src="images/gallery/chat/thumb-4.jpg" class="tyn-image" alt="">
                                </a>
                                <a href="images/gallery/chat/5.jpg" class="glightbox tyn-thumb"
                                    data-gallery="media-photo">
                                    <img src="images/gallery/chat/thumb-5.jpg" class="tyn-image" alt="">
                                </a>
                            </div><!-- .tyn-reply-media -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-text"> I hope these article helps. </div><!-- .tyn-reply-text -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
                <div class="tyn-reply-item outgoing">
                    <div class="tyn-reply-group">
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-link has-thumb">
                                <div class="tyn-reply-link-thumb">
                                    <a href="#">
                                        <h6 class="tyn-reply-link-title">Digital Marketing Guide line for dummies</h6>
                                        <img src="images/avatar/4.jpg" alt="">
                                    </a>
                                </div><!-- .tyn-reply-link-thumb -->
                                <a class="tyn-reply-anchor"
                                    href="https://www.envato.com/atomic-power-plant-engine/">https://www.envato.com/atomic-power-plant-engine/</a>
                            </div>
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-text"> I need help. </div><!-- .tyn-reply-text -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                        <div class="tyn-reply-bubble">
                            <div class="tyn-reply-file">
                                <a href="#" class="tyn-file">
                                    <div class="tyn-media-group">
                                        <div class="tyn-media tyn-size-lg text-bg-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-filetype-docx" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.839 9.688v-.522a1.5 1.5 0 0 0-.117-.641.86.86 0 0 0-.322-.387.86.86 0 0 0-.469-.129.87.87 0 0 0-.471.13.87.87 0 0 0-.32.386 1.5 1.5 0 0 0-.117.641v.522q0 .384.117.641a.87.87 0 0 0 .32.387.9.9 0 0 0 .471.126.9.9 0 0 0 .469-.126.86.86 0 0 0 .322-.386 1.55 1.55 0 0 0 .117-.642m.803-.516v.513q0 .563-.205.973a1.47 1.47 0 0 1-.589.627q-.381.216-.917.216a1.86 1.86 0 0 1-.92-.216 1.46 1.46 0 0 1-.589-.627 2.15 2.15 0 0 1-.205-.973v-.513q0-.569.205-.975.205-.411.59-.627.386-.22.92-.22.535 0 .916.22.383.219.59.63.204.406.204.972M1 15.925v-3.999h1.459q.609 0 1.005.235.396.233.589.68.196.445.196 1.074 0 .634-.196 1.084-.197.451-.595.689-.396.237-.999.237zm1.354-3.354H1.79v2.707h.563q.277 0 .483-.082a.8.8 0 0 0 .334-.252q.132-.17.196-.422a2.3 2.3 0 0 0 .068-.592q0-.45-.118-.753a.9.9 0 0 0-.354-.454q-.237-.152-.61-.152Zm6.756 1.116q0-.373.103-.633a.87.87 0 0 1 .301-.398.8.8 0 0 1 .475-.138q.225 0 .398.097a.7.7 0 0 1 .273.26.85.85 0 0 1 .12.381h.765v-.073a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.49-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.571.633-.197.41-.197.978v.498q0 .568.194.976.195.406.571.627.375.216.914.216.44 0 .785-.164t.551-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.765a.8.8 0 0 1-.117.364.7.7 0 0 1-.273.248.9.9 0 0 1-.401.088.85.85 0 0 1-.478-.131.83.83 0 0 1-.298-.393 1.7 1.7 0 0 1-.103-.627zm5.092-1.76h.894l-1.275 2.006 1.254 1.992h-.908l-.85-1.415h-.035l-.852 1.415h-.862l1.24-2.015-1.228-1.984h.932l.832 1.439h.035z" />
                                            </svg><!-- filetype-docx -->
                                        </div>
                                        <div class="tyn-media-col">
                                            <h6 class="name">Konstantin_cv.docx</h6>
                                            <div class="meta">24.65 MB</div>
                                        </div>
                                    </div><!-- .tyn-media-group -->
                                </a><!-- .tyn-file -->
                            </div><!-- .tyn-reply-fil -->
                            <ul class="tyn-reply-tools">
                                <li>
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                                        </svg><!-- emoji-smile-fill -->
                                    </button>
                                </li><!-- li -->
                                <li class="dropup-center">
                                    <button class="btn btn-icon btn-sm btn-transparent btn-pill"
                                        data-bs-toggle="dropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                            <path
                                                d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                                        </svg><!-- three-dots -->
                                    </button><!-- toggle -->
                                    <div class="dropdown-menu dropdown-menu-xxs">
                                        <ul class="tyn-list-links">
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                    </svg><!-- pencil-square -->
                                                    <span>Edit</span>
                                                </a>
                                            </li><!-- li -->
                                            <li>
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-trash"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg><!-- trash -->
                                                    <span>Delete</span>
                                                </a>
                                            </li><!-- li -->
                                        </ul><!-- .tyn-list-links -->
                                    </div><!-- .dropdown-menu -->
                                </li><!-- li -->
                            </ul><!-- .tyn-reply-tools -->
                        </div><!-- .tyn-reply-bubble -->
                    </div><!-- .tyn-reply-group -->
                </div><!-- .tyn-reply-item -->
            </div><!-- .tyn-reply -->
        </div><!-- .tyn-chat-body -->
        <div class="tyn-chat-form">
            <div class="tyn-chat-form-insert">
                <ul class="tyn-list-inline gap gap-3">
                    <li class="dropup">
                        <button class="btn btn-icon btn-light btn-md btn-pill" data-bs-toggle="dropdown"
                            data-bs-offset="0,10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                            </svg><!-- plus-lg -->
                        </button>
                        <div class="dropdown-menu">
                            <ul class="tyn-list-links">
                                <li><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-video2" viewBox="0 0 16 16">
                                            <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            <path
                                                d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zM1 3a1 1 0 0 1 1-1h2v2H1zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3zm-4-2h3v2H2a1 1 0 0 1-1-1zm3-1H1V8h3zm0-3H1V5h3z" />
                                        </svg><!-- person-video2 -->
                                        <span>New Group</span></a></li>
                                <li><a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                            <path
                                                d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                            <path
                                                d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                                        </svg><!-- mic -->
                                        <span>Voice Clip</span></a></li>
                            </ul>
                        </div>
                    </li><!-- li -->
                    <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                <path
                                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54L1 12.5v-9a.5.5 0 0 1 .5-.5z" />
                            </svg><!-- card-image -->
                        </button></li><!-- li -->
                    <li class="d-none d-sm-block"><button class="btn btn-icon btn-light btn-md btn-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-emoji-smile-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8" />
                            </svg><!-- emoji-smile-fill -->
                        </button></li><!-- li -->
                </ul>
            </div><!-- .tyn-chat-form-insert -->
            <div class="tyn-chat-form-enter">
                <div class="tyn-chat-form-input" id="tynChatInput" contenteditable></div>
                <ul class="tyn-list-inline me-n2 my-1">
                    <li><button class="btn btn-icon btn-white btn-md btn-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z" />
                                <path
                                    d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                            </svg><!-- mic-fill -->
                        </button></li>
                    <li><button class="btn btn-icon btn-white btn-md btn-pill" id="tynChatSend">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                            </svg><!-- send-fill -->
                        </button></li>
                </ul>
            </div><!-- .tyn-chat-form-enter -->
        </div><!-- .tyn-chat-form -->
        <div class="tyn-chat-content-aside" id="tynChatAside" data-simplebar>
            <div class="tyn-chat-cover">
                <img src="images/cover/1.jpg" alt="">
            </div><!-- .tyn-chat-cover -->
            <div class="tyn-media-group tyn-media-vr tyn-media-center mt-n4">
                <div class="tyn-media tyn-size-xl border border-2 border-white">
                    <img src="images/avatar/1.jpg" alt="">
                </div>
                <div class="tyn-media-col">
                    <div class="tyn-media-row">
                        <h6 class="name">Konstantin Frank</h6>
                    </div>
                    <div class="tyn-media-row has-dot-sap">
                        <span class="meta">Active Now</span>
                    </div>
                </div><!-- .tyn-media-col -->
            </div><!-- .tyn-media-group -->
            <div class="tyn-aside-row">
                <ul class="nav nav-btns nav-btns-stretch nav-btns-light">
                    <li class="nav-item">
                        <button class="nav-link js-chat-mute-toggle tyn-chat-mute" type="button">
                            <span class="icon unmuted-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2m.995-14.901a1 1 0 1 0-1.99 0A5 5 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901" />
                                </svg><!-- bell-fill -->
                            </span>
                            <span class="unmuted-icon">Mute</span>
                            <span class="icon muted-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M5.164 14H15c-1.5-1-2-5.902-2-7q0-.396-.06-.776zm6.288-10.617A5 5 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5 5 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113zM10 15a2 2 0 1 1-4 0zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75z" />
                                </svg><!-- bell-slash-fill -->
                            </span>
                            <span class="muted-icon">Muted</span>
                        </button>
                    </li><!-- .nav-item -->
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chat-media" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                <path
                                    d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z" />
                            </svg><!-- images -->
                            <span>Media</span>
                        </button>
                    </li><!-- .nav-item -->
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#chat-options"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z" />
                            </svg><!-- sliders -->
                            <span>Options</span>
                        </button>
                    </li><!-- .nav-item -->
                </ul><!-- .nav-btns -->
            </div><!-- .tyn-aside-row -->
            <div class="tab-content">
                <div class="tab-pane" id="chat-media" tabindex="0">
                    <div class="tyn-aside-row py-0">
                        <ul class="nav nav-tabs nav-tabs-line">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#chat-media-images" type="button"> Images </button>
                            </li><!-- .nav-item -->
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chat-media-videos"
                                    type="button"> Videos </button>
                            </li><!-- .nav-item -->
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chat-media-files"
                                    type="button"> Files </button>
                            </li><!-- .nav-item -->
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#chat-media-links"
                                    type="button"> Links </button>
                            </li><!-- .nav-item -->
                        </ul><!-- .nav-tabs -->
                    </div><!-- .tyn-aside-row -->
                    <div class="tyn-aside-row">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="chat-media-images" tabindex="0">
                                <div class="row g-3">
                                    <div class="col-4">
                                        <a href="images/gallery/chat/1.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-1.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-4">
                                        <a href="images/gallery/chat/2.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-2.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-4">
                                        <a href="images/gallery/chat/3.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-3.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-4">
                                        <a href="images/gallery/chat/4.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-4.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-4">
                                        <a href="images/gallery/chat/5.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-5.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                    <div class="col-4">
                                        <a href="images/gallery/chat/6.jpg" class="glightbox tyn-thumb"
                                            data-gallery="media-photo">
                                            <img src="images/gallery/chat/thumb-6.jpg" class="tyn-image"
                                                alt="">
                                        </a>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="chat-media-videos" tabindex="0">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/hr-1.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/hr-2.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/hr-3.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/hr-4.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/vr-5.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                    <div class="col-6">
                                        <a href="https://www.youtube.com/watch?v=ag0qTaAKqT8"
                                            class="glightbox tyn-video" data-gallery="media-video">
                                            <img src="images/gallery/video/hr-6.jpg" class="tyn-image"
                                                alt="">
                                            <div class="tyn-video-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                </svg><!-- play-fill -->
                                            </div>
                                        </a><!-- .tyn-video -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="chat-media-files" tabindex="0">
                                <ul class="tyn-media-list gap gap-3">
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-lg text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-filetype-docx" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zm-6.839 9.688v-.522a1.5 1.5 0 0 0-.117-.641.86.86 0 0 0-.322-.387.86.86 0 0 0-.469-.129.87.87 0 0 0-.471.13.87.87 0 0 0-.32.386 1.5 1.5 0 0 0-.117.641v.522q0 .384.117.641a.87.87 0 0 0 .32.387.9.9 0 0 0 .471.126.9.9 0 0 0 .469-.126.86.86 0 0 0 .322-.386 1.55 1.55 0 0 0 .117-.642m.803-.516v.513q0 .563-.205.973a1.47 1.47 0 0 1-.589.627q-.381.216-.917.216a1.86 1.86 0 0 1-.92-.216 1.46 1.46 0 0 1-.589-.627 2.15 2.15 0 0 1-.205-.973v-.513q0-.569.205-.975.205-.411.59-.627.386-.22.92-.22.535 0 .916.22.383.219.59.63.204.406.204.972M1 15.925v-3.999h1.459q.609 0 1.005.235.396.233.589.68.196.445.196 1.074 0 .634-.196 1.084-.197.451-.595.689-.396.237-.999.237zm1.354-3.354H1.79v2.707h.563q.277 0 .483-.082a.8.8 0 0 0 .334-.252q.132-.17.196-.422a2.3 2.3 0 0 0 .068-.592q0-.45-.118-.753a.9.9 0 0 0-.354-.454q-.237-.152-.61-.152Zm6.756 1.116q0-.373.103-.633a.87.87 0 0 1 .301-.398.8.8 0 0 1 .475-.138q.225 0 .398.097a.7.7 0 0 1 .273.26.85.85 0 0 1 .12.381h.765v-.073a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.49-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.571.633-.197.41-.197.978v.498q0 .568.194.976.195.406.571.627.375.216.914.216.44 0 .785-.164t.551-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.765a.8.8 0 0 1-.117.364.7.7 0 0 1-.273.248.9.9 0 0 1-.401.088.85.85 0 0 1-.478-.131.83.83 0 0 1-.298-.393 1.7 1.7 0 0 1-.103-.627zm5.092-1.76h.894l-1.275 2.006 1.254 1.992h-.908l-.85-1.415h-.035l-.852 1.415h-.862l1.24-2.015-1.228-1.984h.932l.832 1.439h.035z" />
                                                    </svg><!-- filetype-docx -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">Konstantin_cv.docx</h6>
                                                    <div class="meta">24.65 MB</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-lg text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" class="bi bi-filetype-ai"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V14a2 2 0 0 1-2 2H6v-1h6a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.113 14.82.8 15.85H0l1.342-3.999h.926l1.336 3.999h-.841l-.314-1.028H1.113Zm1.178-.588-.49-1.617h-.034l-.49 1.617zm2.425-2.382v3.999h-.791V11.85h.79Z" />
                                                    </svg><!-- filetype-ai -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">themeyn_logo.ai</h6>
                                                    <div class="meta">2.08 MB</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-lg text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM1.6 11.85H0v3.999h.791v-1.342h.803q.43 0 .732-.173.305-.175.463-.474a1.4 1.4 0 0 0 .161-.677q0-.375-.158-.677a1.2 1.2 0 0 0-.46-.477q-.3-.18-.732-.179m.545 1.333a.8.8 0 0 1-.085.38.57.57 0 0 1-.238.241.8.8 0 0 1-.375.082H.788V12.48h.66q.327 0 .512.181.185.183.185.522m1.217-1.333v3.999h1.46q.602 0 .998-.237a1.45 1.45 0 0 0 .595-.689q.196-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.589-.68q-.396-.234-1.005-.234zm.791.645h.563q.371 0 .609.152a.9.9 0 0 1 .354.454q.118.302.118.753a2.3 2.3 0 0 1-.068.592 1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.483.082h-.563zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638z" />
                                                    </svg><!-- filetype-pdf -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">realReact.pdf</h6>
                                                    <div class="meta">19.54 MB</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-lg text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-filetype-csv" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM3.517 14.841a1.13 1.13 0 0 0 .401.823q.195.162.478.252.284.091.665.091.507 0 .859-.158.354-.158.539-.44.187-.284.187-.656 0-.336-.134-.56a1 1 0 0 0-.375-.357 2 2 0 0 0-.566-.21l-.621-.144a1 1 0 0 1-.404-.176.37.37 0 0 1-.144-.299q0-.234.185-.384.188-.152.512-.152.214 0 .37.068a.6.6 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.1 1.1 0 0 0-.2-.566 1.2 1.2 0 0 0-.5-.41 1.8 1.8 0 0 0-.78-.152q-.439 0-.776.15-.337.149-.527.421-.19.273-.19.639 0 .302.122.524.124.223.352.367.228.143.539.213l.618.144q.31.073.463.193a.39.39 0 0 1 .152.326.5.5 0 0 1-.085.29.56.56 0 0 1-.255.193q-.167.07-.413.07-.175 0-.32-.04a.8.8 0 0 1-.248-.115.58.58 0 0 1-.255-.384zM.806 13.693q0-.373.102-.633a.87.87 0 0 1 .302-.399.8.8 0 0 1 .475-.137q.225 0 .398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.4 1.4 0 0 0-.489-.272 1.8 1.8 0 0 0-.606-.097q-.534 0-.911.223-.375.222-.572.632-.195.41-.196.979v.498q0 .568.193.976.197.407.572.626.375.217.914.217.439 0 .785-.164t.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.8.8 0 0 1-.118.363.7.7 0 0 1-.272.25.9.9 0 0 1-.401.087.85.85 0 0 1-.478-.132.83.83 0 0 1-.299-.392 1.7 1.7 0 0 1-.102-.627zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879z" />
                                                    </svg><!-- filetype-csv -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">my_contacts.csv</h6>
                                                    <div class="meta">0.97 MB</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-lg text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-filetype-mdx" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M14 4.5V14a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5zM.706 15.849v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596h-.026L.805 11.85H0v3.999zm3.559-3.999v3.999h1.459q.603 0 .999-.237a1.45 1.45 0 0 0 .595-.689q.195-.45.196-1.084 0-.63-.196-1.075a1.43 1.43 0 0 0-.59-.68q-.395-.234-1.004-.234zm.79.645h.563q.372 0 .61.152a.9.9 0 0 1 .354.454q.117.302.117.753 0 .34-.067.592a1.1 1.1 0 0 1-.196.422.8.8 0 0 1-.334.252 1.3 1.3 0 0 1-.484.082h-.562v-2.707Zm4.787-.645h.894L9.46 13.857l1.254 1.992h-.908l-.85-1.415h-.035l-.852 1.415h-.862l1.24-2.016L7.22 11.85h.932l.832 1.439h.035z" />
                                                    </svg><!-- filetype-mdx -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">blog_posts.mdx</h6>
                                                    <div class="meta">6.19 MB</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-list -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="chat-media-links" tabindex="0">
                                <ul class="tyn-media-list gap gap-3">
                                    <li>
                                        <a href="#" class="tyn-links">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-xl">
                                                    <img src="images/gallery/chat/thumb-7.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">Digital Marketing Guide</h6>
                                                    <div class="anchor">
                                                        https://www.envato.com/blog/digital-marketing-guide/</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-links -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-links">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media tyn-size-xl">
                                                    <img src="images/gallery/chat/thumb-8.jpg" alt="">
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">Atomic power plant engine</h6>
                                                    <div class="anchor">
                                                        https://www.envato.com/atomic-power-plant-engine/</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-links -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-list -->
                            </div><!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .tyn-aside-row -->
                </div><!-- .tab-pane -->
                <div class="tab-pane show active" id="chat-options" tabindex="0">
                    <div class="tyn-aside-row py-0">
                        <ul class="nav nav-tabs nav-tabs-line">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#chat-options-customize" type="button"> Customize </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#chat-options-manage" type="button"> Manage </button>
                            </li>
                        </ul><!-- .nav-tabs -->
                    </div><!-- .tyn-aside-row -->
                    <div class="tyn-aside-row">
                        <div class="tab-content">
                            <div class="tab-pane show active" id="chat-options-customize" tabindex="0">
                                <ul class="d-flex flex-column gap gap-4">
                                    <li>
                                        <h6 class="tyn-title-overline">Change Theme</h6>
                                        <ul class="tyn-chat-theme-list">
                                            <li>
                                                <button class="tyn-chat-theme-btn" data-theme="blue"></button>
                                            </li>
                                            <li>
                                                <button class="tyn-chat-theme-btn" data-theme="indigo"></button>
                                            </li>
                                            <li>
                                                <button class="tyn-chat-theme-btn" data-theme="green"></button>
                                            </li>
                                            <li>
                                                <button class="tyn-chat-theme-btn" data-theme="red"></button>
                                            </li>
                                        </ul><!-- .tyn-chat-theme-list -->
                                    </li><!-- li -->
                                    <li>
                                        <h6 class="tyn-title-overline">Change Background</h6>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-1.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-2.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-3.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-4.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-5.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                            <div class="col-4">
                                                <button class="tyn-thumb">
                                                    <img src="images/gallery/chat/thumb-6.jpg" class="tyn-image"
                                                        alt="">
                                                </button>
                                            </div><!-- .col -->
                                        </div><!-- .row -->
                                    </li><!-- li -->
                                    <li>
                                        <h6 class="tyn-title-overline">Edit Nicknames</h6>
                                        <ul class="tyn-media-list gap gap-3">
                                            <li>
                                                <div class="tyn-media-group">
                                                    <div class="tyn-media tyn-size-lg">
                                                        <img src="images/avatar/1.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media-col">
                                                        <div class="tyn-media-row">
                                                            <h6 class="name">Jasmine Thompson</h6>
                                                        </div>
                                                        <div class="tyn-media-row has-dot-sap">
                                                            <span class="meta">og : Jasmine</span>
                                                        </div>
                                                    </div><!-- .tyn-media-col -->
                                                    <div class="tyn-media-option">
                                                        <ul class="tyn-media-option-list">
                                                            <li>
                                                                <button
                                                                    class="btn btn-icon btn-md btn-pill btn-light">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-pencil-square"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                    </svg><!-- pencil-square -->
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .tyn-media-option -->
                                                </div><!-- .tyn-media-group -->
                                            </li><!-- li -->
                                            <li>
                                                <div class="tyn-media-group">
                                                    <div class="tyn-media tyn-size-lg">
                                                        <img src="images/avatar/3.jpg" alt="">
                                                    </div>
                                                    <div class="tyn-media-col">
                                                        <div class="tyn-media-row">
                                                            <h6 class="name">Konstantin Frank</h6>
                                                        </div>
                                                        <div class="tyn-media-row has-dot-sap">
                                                            <span class="meta">og : konstatin nk</span>
                                                        </div>
                                                    </div><!-- .tyn-media-col -->
                                                    <div class="tyn-media-option">
                                                        <ul class="tyn-media-option-list">
                                                            <li>
                                                                <button
                                                                    class="btn btn-icon btn-md btn-pill btn-light">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor"
                                                                        class="bi bi-pencil-square"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                                    </svg><!-- pencil-square -->
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .tyn-media-option -->
                                                </div><!-- .tyn-media-group -->
                                            </li><!-- li -->
                                        </ul><!-- .tyn-media-list -->
                                    </li><!-- li -->
                                </ul><!-- ul -->
                            </div><!-- .tab-pane -->
                            <div class="tab-pane" id="chat-options-manage" tabindex="0">
                                <ul class="tyn-media-list gap gap-3">
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-person-x-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708" />
                                                    </svg><!-- person-x-fill -->
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">Block</h6>
                                                    <div class="meta">Frank will no longer be in your contact.</div>
                                                </div>
                                            </div><!-- .tyn-media-group -->
                                        </a><!-- .tyn-file -->
                                    </li><!-- li -->
                                    <li>
                                        <a href="#" class="tyn-file">
                                            <div class="tyn-media-group">
                                                <div class="tyn-media text-bg-light">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                                    </svg>
                                                </div>
                                                <div class="tyn-media-col">
                                                    <h6 class="name">Report</h6>
                                                    <div class="meta">Give feedback on the conversation</div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="tyn-quick-chat" id="tynQuickChat">
        <button class="tyn-quick-chat-toggle js-toggle-quick">
            <svg viewBox="0 0 43 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M37.2654 14.793C37.2654 14.793 45.0771 20.3653 41.9525 29.5311C41.9525 29.5311 41.3796 31.1976 39.0361 34.4264L42.4732 37.9677C42.4732 37.9677 43.3065 39.478 41.5879 39.9987H24.9229C24.9229 39.9987 19.611 40.155 14.8198 36.9782C14.8198 36.9782 12.1638 35.2076 9.76825 31.9787L18.6215 32.0308C18.6215 32.0308 24.298 31.9787 29.7662 28.3333C35.2344 24.6878 37.4217 18.6988 37.2654 14.793Z"
                    fill="#60A5FA" />
                <path
                    d="M34.5053 12.814C32.2659 1.04441 19.3506 0.0549276 19.3506 0.0549276C8.31004 -0.674164 3.31055 6.09597 3.31055 6.09597C-4.24076 15.2617 3.6751 23.6983 3.6751 23.6983C3.6751 23.6983 2.99808 24.6357 0.862884 26.5105C-1.27231 28.3854 1.22743 29.3748 1.22743 29.3748H17.3404C23.4543 28.7499 25.9124 27.3959 25.9124 27.3959C36.328 22.0318 34.5053 12.814 34.5053 12.814ZM19.9963 18.7301H9.16412C8.41419 18.7301 7.81009 18.126 7.81009 17.3761C7.81009 16.6261 8.41419 16.022 9.16412 16.022H19.9963C20.7463 16.022 21.3504 16.6261 21.3504 17.3761C21.3504 18.126 20.7358 18.7301 19.9963 18.7301ZM25.3708 13.314H9.12245C8.37253 13.314 7.76843 12.7099 7.76843 11.96C7.76843 11.21 8.37253 10.6059 9.12245 10.6059H25.3708C26.1207 10.6059 26.7248 11.21 26.7248 11.96C26.7248 12.7099 26.1103 13.314 25.3708 13.314Z"
                    fill="#2563EB" />
            </svg>
            <span class="badge bg-primary top-0 end-0 position-absolute rounded-pill">2</span>
        </button>
        <div class="tyn-quick-chat-box">
            <div class="tyn-quick-chat-head">
                <div class="tyn-media-group">
                    <div class="tyn-media tyn-size-rg">
                        <img src="images/avatar/1.jpg" alt="">
                    </div><!-- .tyn-media -->
                    <div class="tyn-media-col">
                        <div class="tyn-media-row">
                            <h6 class="name">Jasmine Thompson</h6>
                        </div>
                        <div class="tyn-media-row has-dot-sap">
                            <span class="meta">Active</span>
                        </div>
                    </div><!-- .tyn-media-col -->
                </div><!-- .tyn-media-group -->
            </div><!-- .tyn-quick-chat-head -->
            <div class="tyn-quick-chat-reply js-scroll-to-end">
                <div class="tyn-reply tyn-reply-quick" id="tynQuickReply">
                    <div class="tyn-reply-item outgoing">
                        <div class="tyn-reply-group">
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-text"> Do you know which App or feature it will require to set up.
                                </div><!-- tyn-reply-text -->
                            </div><!-- .tyn-reply-bubble -->
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-text"> These article helps. </div><!-- tyn-reply-text -->
                            </div><!-- .tyn-reply-bubble -->
                        </div><!-- .tyn-reply-group -->
                    </div><!-- .tyn-reply-item -->
                    <div class="tyn-reply-item incoming">
                        <div class="tyn-reply-avatar">
                            <div class="tyn-media tyn-size-md tyn-circle">
                                <img src="images/avatar/2.jpg" alt="">
                            </div>
                        </div><!-- .tyn-reply-avatar -->
                        <div class="tyn-reply-group">
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-link">
                                    <a class="tyn-reply-anchor"
                                        href="https://www.envato.com/atomic-power-plant-engine/">https://www.envato.com/atomic-power-plant-engine/</a>
                                </div>
                            </div><!-- .tyn-reply-bubble -->
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-text"> I hope these article helps. </div>
                            </div><!-- .tyn-reply-bubble -->
                        </div><!-- .tyn-reply-group -->
                    </div><!-- .tyn-reply-item -->
                    <div class="tyn-reply-separator">May 10, 2022, 11:14 AM</div>
                    <div class="tyn-reply-item outgoing">
                        <div class="tyn-reply-group">
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-text"> Yes, you can reset your password online. Go to the login
                                    page, click on "Forgot Password," and follow the instructions to reset it. </div>
                                <!-- tyn-reply-text -->
                            </div><!-- .tyn-reply-bubble -->
                        </div><!-- .tyn-reply-group -->
                    </div><!-- .tyn-reply-item -->
                    <div class="tyn-reply-item incoming">
                        <div class="tyn-reply-avatar">
                            <div class="tyn-media tyn-size-md tyn-circle">
                                <img src="images/avatar/2.jpg" alt="">
                            </div>
                        </div><!-- .tyn-reply-avatar -->
                        <div class="tyn-reply-group">
                            <div class="tyn-reply-bubble">
                                <div class="tyn-reply-text"> How do I reset my password? Can I do it online? </div>
                            </div><!-- .tyn-reply-bubble -->
                        </div><!-- .tyn-reply-group -->
                    </div><!-- .tyn-reply-item -->
                </div><!-- .tyn-reply -->
            </div><!-- .tyn-quick-chat-reply -->
            <div class="tyn-quick-chat-form">
                <div class="tyn-chat-form-input bg-light" id="tynQuickChatInput" contenteditable></div>
                <ul class="tyn-list-inline me-n2 my-1">
                    <li><button class="btn btn-icon btn-white btn-sm btn-pill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path
                                    d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                            </svg><!-- send-fill -->
                        </button></li>
                </ul><!-- .tyn-list-inline -->
            </div><!-- .tyn-quick-chat-form -->
            <button
                class="btn btn-danger btn-sm btn-icon top-0 end-0 position-absolute rounded-pill translate-middle js-toggle-quick">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg><!-- x-lg -->
            </button>
        </div>
    </div> --}}
</div>
