<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Empty Page | Keenthemes</title>
        <meta name="description" content="Page with empty content" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="canonical" href="https://keenthemes.com/metronic" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{asset('')}}assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{asset('')}}assets/media/logos/favicon.ico" />
    </head>

    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
            <a href="index.html">
                <img alt="Logo" src="{{asset('')}}assets/media/logos/logo-light.png" />
            </a>
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
                <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                    <span class="svg-icon svg-icon-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                @include('partials.sidebar')
                @include('partials.navbar')
            </div>
        </div>
        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
        <script src="{{asset('')}}assets/plugins/global/plugins.bundle.js"></script>
        <script src="{{asset('')}}assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="{{asset('')}}assets/js/scripts.bundle.js"></script>
		<script src="{{asset('')}}assets/plugins/custom/datatables/datatables.bundle.js"></script>
        {{-- <script src="{{asset('')}}assets/js/pages/crud/datatables/data-sources/html.js"></script> --}}
        <script src="{{asset('')}}assets/js/pages/crud/datatables/advanced/column-rendering.js"></script>
        <script src="{{asset('')}}assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="{{asset('')}}assets/plugins/custom/gmaps/gmaps.js"></script>
        <script src="{{asset('')}}assets/js/pages/widgets.js"></script>

        @yield('js')
    </body>

</html>
