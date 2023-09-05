<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="card">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard.index') }}">
                <img src="../assets/img/wint.jpeg" class="navbar-brand-img h-100 w-35" alt="...">
                <span class="ms-1 font-weight">Traceability Process Purchase</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" fill="#ffffff" viewBox="0 0 512 512"
                            xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(0.000000, 148.000000)">
                                            {{-- warna hitam --}}
                                            <path class="color-background opacity-6"
                                                d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.64-10.38-14.98zM64 192v160H48c-8.84 0-16 7.16-16 16v48h448v-48c0-8.84-7.16-16-16-16h-16V192h-64v160h-96V192h-64v160h-96V192H64zm432 256H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z">
                                            </path>
                                            {{-- warna putih saat hover --}}
                                            <path class="color-background"
                                                d="M501.62 92.11L267.24 2.04a31.958 31.958 0 0 0-22.47 0L10.38 92.11A16.001 16.001 0 0 0 0 107.09V144c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-36.91c0-6.67-4.14-12.64-10.38-14.98zM64 192v160H48c-8.84 0-16 7.16-16 16v48h448v-48c0-8.84-7.16-16-16-16h-16V192h-64v160h-96V192h-64v160h-96V192H64zm432 256H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h480c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z">
                                            </path>
                                        </g>
                        </svg>

                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('insert-issue') ? 'active' : '' }}" href="{{ url('insert-issue') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" fill="#000000" height="200px" width="200px" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path class="color-background opacity-6"
                                    d="M240.3,396.8L240.3,396.8c3.3,5.1,9.1,8.5,15.7,8.5c6.6,0,12.4-3.4,15.8-8.5l110.2-170.2c14.8-22.9,23.4-48.1,23.4-77.3 C405.3,64.9,339,0,256,0c-83,0-149.3,64.9-149.3,149.3c0,29.2,8.6,54.4,23.4,77.3L240.3,396.8z M256,64c47.1,0,85.3,38.2,85.3,85.3 s-38.2,85.3-85.3,85.3s-85.3-38.2-85.3-85.3S208.9,64,256,64z M365.4,323.5L256,469.3L146.6,323.5c-37.4,19.6-61.3,48.9-61.3,81.8 C85.3,464.2,161.7,512,256,512s170.7-47.8,170.7-106.7C426.7,372.4,402.8,343.1,365.4,323.5z">
                                </path>
                                <path class="color-background"
                                    d="M240.3,396.8L240.3,396.8c3.3,5.1,9.1,8.5,15.7,8.5c6.6,0,12.4-3.4,15.8-8.5l110.2-170.2c14.8-22.9,23.4-48.1,23.4-77.3 C405.3,64.9,339,0,256,0c-83,0-149.3,64.9-149.3,149.3c0,29.2,8.6,54.4,23.4,77.3L240.3,396.8z M256,64c47.1,0,85.3,38.2,85.3,85.3 s-38.2,85.3-85.3,85.3s-85.3-38.2-85.3-85.3S208.9,64,256,64z M365.4,323.5L256,469.3L146.6,323.5c-37.4,19.6-61.3,48.9-61.3,81.8 C85.3,464.2,161.7,512,256,512s170.7-47.8,170.7-106.7C426.7,372.4,402.8,343.1,365.4,323.5z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Insert Issue</span>
                </a>
            </li>
    
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('search-issue') ? 'active' : '' }}"
                    href="{{ url('search-issue') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#000000" fill-rule="evenodd" class="color-background opacity-6"
                                    d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z">
                                </path>
                                <path fill="#ffffff" fill-rule="evenodd" class="color-background"
                                    d="M4 9a5 5 0 1110 0A5 5 0 014 9zm5-7a7 7 0 104.2 12.6.999.999 0 00.093.107l3 3a1 1 0 001.414-1.414l-3-3a.999.999 0 00-.107-.093A7 7 0 009 2z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Search Issue</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('insert-incoming') ? 'active' : '' }}"
                    href="{{ url('insert-incoming') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="#000000">
                                    <path fill-rule="evenodd" class="color-background opacity-6"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background opacity-6"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                    <path fill-rule="evenodd" class="color-background"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                </g>
                            </g>
                        </svg>

                    </div>
                    <span class="nav-link-text ms-1">Insert Incoming</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('insert-pp') ? 'active' : '' }}" href="{{ url('insert-pp') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="#000000">
                                    <path fill-rule="evenodd" class="color-background opacity-6"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background opacity-6"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                    <path fill-rule="evenodd" class="color-background"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Insert PP</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('insert-pr') ? 'active' : '' }}" href="{{ url('insert-pr') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="#000000">
                                    <path fill-rule="evenodd" class="color-background opacity-6"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background opacity-6"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                    <path fill-rule="evenodd" class="color-background"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Insert PR</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('insert-po') ? 'active' : '' }}" href="{{ url('insert-po') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g fill="#000000">
                                    <path fill-rule="evenodd" class="color-background opacity-6"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background opacity-6"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                    <path fill-rule="evenodd" class="color-background"
                                        d="M3.25 2.5H4v.25C4 3.44 4.56 4 5.25 4h5.5C11.44 4 12 3.44 12 2.75V2.5h.75a.75.75 0 01.75.75v3a.75.75 0 001.5 0v-3A2.25 2.25 0 0012.75 1h-.775c-.116-.57-.62-1-1.225-1h-5.5c-.605 0-1.11.43-1.225 1H3.25A2.25 2.25 0 001 3.25v10.5A2.25 2.25 0 003.25 16h9.5A2.25 2.25 0 0015 13.75v-1a.75.75 0 00-1.5 0v1a.75.75 0 01-.75.75h-9.5a.75.75 0 01-.75-.75V3.25a.75.75 0 01.75-.75zm2.25-1v1h5v-1h-5z"
                                        clip-rule="evenodd"></path>
                                    <path class="color-background"
                                        d="M4.75 5.5a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM4 12.25a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zM4.75 8.5a.75.75 0 000 1.5h2a.75.75 0 000-1.5h-2zM16 9.25a.75.75 0 01-.75.75h-4.19l1.22 1.22a.75.75 0 11-1.06 1.06l-2.5-2.5a.752.752 0 010-1.06l2.5-2.5a.75.75 0 111.06 1.06L11.06 8.5h4.19a.75.75 0 01.75.75z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Insert PO</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('trace-item') ? 'active' : '' }}" href="{{ url('trace-item') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" fill="#000000" height="200px" width="200px"
                            version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                            enable-background="new 0 0 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path class="color-background opacity-6"
                                    d="M240.3,396.8L240.3,396.8c3.3,5.1,9.1,8.5,15.7,8.5c6.6,0,12.4-3.4,15.8-8.5l110.2-170.2c14.8-22.9,23.4-48.1,23.4-77.3 C405.3,64.9,339,0,256,0c-83,0-149.3,64.9-149.3,149.3c0,29.2,8.6,54.4,23.4,77.3L240.3,396.8z M256,64c47.1,0,85.3,38.2,85.3,85.3 s-38.2,85.3-85.3,85.3s-85.3-38.2-85.3-85.3S208.9,64,256,64z M365.4,323.5L256,469.3L146.6,323.5c-37.4,19.6-61.3,48.9-61.3,81.8 C85.3,464.2,161.7,512,256,512s170.7-47.8,170.7-106.7C426.7,372.4,402.8,343.1,365.4,323.5z">
                                </path>
                                <path class="color-background"
                                    d="M240.3,396.8L240.3,396.8c3.3,5.1,9.1,8.5,15.7,8.5c6.6,0,12.4-3.4,15.8-8.5l110.2-170.2c14.8-22.9,23.4-48.1,23.4-77.3 C405.3,64.9,339,0,256,0c-83,0-149.3,64.9-149.3,149.3c0,29.2,8.6,54.4,23.4,77.3L240.3,396.8z M256,64c47.1,0,85.3,38.2,85.3,85.3 s-38.2,85.3-85.3,85.3s-85.3-38.2-85.3-85.3S208.9,64,256,64z M365.4,323.5L256,469.3L146.6,323.5c-37.4,19.6-61.3,48.9-61.3,81.8 C85.3,464.2,161.7,512,256,512s170.7-47.8,170.7-106.7C426.7,372.4,402.8,343.1,365.4,323.5z">
                                </path>
                            </g>
                        </svg>

                    </div>
                    <span class="nav-link-text ms-1">Trace Item</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link {{ Request::is('resume') ? 'active' : '' }}" href="{{ url('resume') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path class="color-background opacity-6"
                                    d="M7 2H6C3 2 2 3.79 2 6V7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7ZM5.97 14.01C5.42 14.01 4.97 13.56 4.97 13.01C4.97 12.46 5.42 12.01 5.97 12.01C6.52 12.01 6.97 12.46 6.97 13.01C6.97 13.56 6.52 14.01 5.97 14.01ZM5.97 10.01C5.42 10.01 4.97 9.56 4.97 9.01C4.97 8.46 5.42 8.01 5.97 8.01C6.52 8.01 6.97 8.46 6.97 9.01C6.97 9.56 6.52 10.01 5.97 10.01ZM12 13.76H9C8.59 13.76 8.25 13.42 8.25 13.01C8.25 12.6 8.59 12.26 9 12.26H12C12.41 12.26 12.75 12.6 12.75 13.01C12.75 13.42 12.41 13.76 12 13.76ZM12 9.76H9C8.59 9.76 8.25 9.42 8.25 9.01C8.25 8.6 8.59 8.26 9 8.26H12C12.41 8.26 12.75 8.6 12.75 9.01C12.75 9.42 12.41 9.76 12 9.76Z"
                                    fill="#292D32"></path>
                                <path class="color-background opacity-6"
                                    d="M18.01 2V3.5C18.67 3.5 19.3 3.77 19.76 4.22C20.24 4.71 20.5 5.34 20.5 6V8.42C20.5 9.16 20.17 9.5 19.42 9.5H17.5V4.01C17.5 3.73 17.73 3.5 18.01 3.5V2ZM18.01 2C16.9 2 16 2.9 16 4.01V11H19.42C21 11 22 10 22 8.42V6C22 4.9 21.55 3.9 20.83 3.17C20.1 2.45 19.11 2.01 18.01 2C18.02 2 18.01 2 18.01 2Z"
                                    fill="#292D32"></path>
                                <path class="color-background"
                                    d="M7 2H6C3 2 2 3.79 2 6V7V21C2 21.83 2.94 22.3 3.6 21.8L5.31 20.52C5.71 20.22 6.27 20.26 6.63 20.62L8.29 22.29C8.68 22.68 9.32 22.68 9.71 22.29L11.39 20.61C11.74 20.26 12.3 20.22 12.69 20.52L14.4 21.8C15.06 22.29 16 21.82 16 21V4C16 2.9 16.9 2 18 2H7ZM5.97 14.01C5.42 14.01 4.97 13.56 4.97 13.01C4.97 12.46 5.42 12.01 5.97 12.01C6.52 12.01 6.97 12.46 6.97 13.01C6.97 13.56 6.52 14.01 5.97 14.01ZM5.97 10.01C5.42 10.01 4.97 9.56 4.97 9.01C4.97 8.46 5.42 8.01 5.97 8.01C6.52 8.01 6.97 8.46 6.97 9.01C6.97 9.56 6.52 10.01 5.97 10.01ZM12 13.76H9C8.59 13.76 8.25 13.42 8.25 13.01C8.25 12.6 8.59 12.26 9 12.26H12C12.41 12.26 12.75 12.6 12.75 13.01C12.75 13.42 12.41 13.76 12 13.76ZM12 9.76H9C8.59 9.76 8.25 9.42 8.25 9.01C8.25 8.6 8.59 8.26 9 8.26H12C12.41 8.26 12.75 8.6 12.75 9.01C12.75 9.42 12.41 9.76 12 9.76Z"
                                    fill="#ffffff"></path>
                                <path class="color-background"
                                    d="M18.01 2V3.5C18.67 3.5 19.3 3.77 19.76 4.22C20.24 4.71 20.5 5.34 20.5 6V8.42C20.5 9.16 20.17 9.5 19.42 9.5H17.5V4.01C17.5 3.73 17.73 3.5 18.01 3.5V2ZM18.01 2C16.9 2 16 2.9 16 4.01V11H19.42C21 11 22 10 22 8.42V6C22 4.9 21.55 3.9 20.83 3.17C20.1 2.45 19.11 2.01 18.01 2C18.02 2 18.01 2 18.01 2Z"
                                    fill="#ffffff"></path>
                            </g>
                        </svg>

                    </div>
                    <span class="nav-link-text ms-1">Resume</span>
                </a>
            </li>

</aside>
