<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div id="kt_header" class="header header-fixed">
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">

                </div>
            </div>
            <div class="topbar">
                <div class="dropdown">
                    <div class="topbar-item" data-toggle="dropdown" data-offset="30px,0px">
                        <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                            id="kt_quick_user_toggle">
                            <span
                                class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                            <span
                                class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"> {{ ucwords(explode_name())}}  </span>
                            <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                <span class="symbol-label font-size-h5 font-weight-bold"> {{ simple_name()}}</span>
                            </span>
                        </div>
                    </div>
                    <div
                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                        <div class="container">
                            <div class="offcanvas-content pr-5 mr-n5">
                                <div class="d-flex align-items-center mt-5 mb-5">
                                    <div class="symbol symbol-100 mr-5">
                                        <div class="symbol-label"
                                            style="background-image:url('{{asset('')}}assets/media/users/300_21.jpg')">
                                        </div>
                                        <i class="symbol-badge bg-success"></i>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ucwords(Auth::User()->name)}}</a>
                                        <div class="text-muted mt-1">Application Developer</div>
                                        <div class="navi mt-2">
                                            <a href="#" class="navi-item">
                                                <span class="navi-link p-0 pb-2">
                                                    <span class="navi-icon mr-1">
                                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="24px" height="24px"
                                                                viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1"
                                                                    fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24" />
                                                                    <path
                                                                        d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                        fill="#000000" />
                                                                    <circle fill="#000000" opacity="0.3"
                                                                        cx="19.5" cy="17.5" r="2.5" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="navi-text text-muted text-hover-primary">{{Auth::User()->email}}</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed mt-8 mb-5"></div>
                                <div class="navi navi-spacer-x-0 p-0">
                                    <a href="#"
                                        class="navi-item">
                                        <div class="navi-link">
                                            <div class="symbol symbol-40 bg-light mr-3">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-md svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24"
                                                            version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                                    fill="#000000" />
                                                                <circle fill="#000000" opacity="0.3"
                                                                    cx="18.5" cy="5.5" r="2.5" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="navi-text">
                                                <div class="font-weight-bold">My Profile</div>
                                                <div class="text-muted">Account settings and more
                                                    <span
                                                        class="label label-light-danger label-inline font-weight-bold">update</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="separator separator-dashed mt-8 mb-5"></div>
                                    <a href="{{ route('logout') }}" class="navi-item"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <div class="navi-link">
                                            <div class="navi-text">
                                                <div class="btn btn-sm btn-block
                                                btn-light-primary font-weight-bolder py-2 px-5">Sign
                                                    Out</div>
                                            </div>
                                        </div>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <div class="d-flex flex-column-fluid">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
</div>
