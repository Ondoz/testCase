@extends('layouts.layouts')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card card-custom card-stretch gutter-b" style="background-color: #EF8481; border-radius: 5px;" >
            <!--begin::Body-->
            <div class="card-body d-flex align-items-center py-0 mt-8">
                <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                    <span class="card-title font-weight-bolder text-light display-3  d-block">
                        Selamat Pagi, {{ ucwords(explode_name())}}!
                    </span>
                    <span class="font-weight-bold display-4 text-dark">
                        Nikmati pengalaman belajar online paling lengkap, dan mudah dimengerti.
                    </span>
                </div>
                <img src="{{asset('')}}/assets/icon/Untitled-1.png" alt="" class="align-self-end h-250px">
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-6">
        <!--begin::Stats Widget 29-->
        <div class="card card-custom bgi-no-repeat card-stretch gutter-b" style="background-position: right top; background-size: 30% auto; background-image: url(assets/media/svg/shapes/abstract-1.svg)">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-info">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 mt-6 d-block">

                </span>
                <span class="font-weight-bold text-muted font-size-sm">All Materi</span>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 29-->
    </div>
    <div class="col-xl-6">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-info card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body">
                <span class="svg-icon svg-icon-2x svg-icon-white">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
                            <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"></span>
                <span class="font-weight-bold text-white font-size-sm">All Kuis</span>
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>

<span class="font-weight-bold text-dark h3">Materi Saya</span>

@foreach ($materi as $item)
    <div class="row mt-5">
        <div class="col-xl-4">
            <!--begin::Stats Widget 4-->
            <div class="card card-custom card-stretch gutter-b" style="background-color: #6DD7F9; border-radius: 5px;" >
                <!--begin::Body-->
                <div class="card-body d-flex align-items-center py-0 mt-8">
                    <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                        <a href="#" class="card-title font-weight-bolder text-light font-size-h5 mb-2 text-hover-primary h3">{{$item->name}}</a>
                        <span class="font-weight-bold text-light font-size-lg">video 0</span>
                    </div>
                    <img src="assets/media/svg/avatars/029-boy-11.svg" alt="" class="align-self-end h-100px">
                </div>
                <!--end::Body-->
            </div>
            <!--end::Stats Widget 4-->
        </div>
    </div>
@endforeach

<span class="font-weight-bold text-dark h3">TryOut Hari Ini</span>
<div class="row mt-5">
    <div class="col-md-4">
        <!--begin::Stats Widget 30-->
        <div class="card card-custom bg-info card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body" style="background-color: #CD6EA7 border-radius: 5px;">

                <span class="font-weight-bold text-white font-size-sm h3">Tryout UTBK 2021 #1</span>
                <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"></span>
                <span class="font-weight-bold text-white font-size-sm">25-26 AGUSTUS</span>

            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-4">
        <!--begin::Stats Widget 4-->
        <div class="card card-custom card-stretch gutter-b" style="background-color: #5F4BD7; border-radius: 5px;" >
            <!--begin::Body-->
            <div class="card-body d-flex align-items-center py-0">
                <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                    <a href="#" class="font-weight-bold text-white font-size-sm h3">Tryout UTBK 2021 #2</a>
                    <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"></span>
                    <span class="font-weight-bold text-white font-size-sm">25-26 AGUSTUS</span>
                </div>
                <img src="{{asset('')}}/assets/icon/lock 1.png" alt="" class="align-self-end h-100px">
            </div>
            <!--end::Body-->
        </div>
        <!--end::Stats Widget 4-->
    </div>
    <div class="col-md-4">
        <!--begin::Stats Widget 30-->
        <!--begin::Stats Widget 4-->
        <div class="card card-custom card-stretch gutter-b" style="background-color: #BED57E;; border-radius: 5px;" >
            <!--begin::Body-->
            <div class="card-body d-flex align-items-center py-0">
                <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                    <a href="#" class="font-weight-bold text-white font-size-sm h3">Tryout UTBK 2021 #3</a>
                    <span class="card-title font-weight-bolder text-white font-size-h2 mb-0 mt-6 d-block"></span>
                    <span class="font-weight-bold text-white font-size-sm">27-29 AGUSTUS</span>
                </div>
                <img src="{{asset('')}}/assets/icon/lock 1.png" alt="" class="align-self-end h-100px">
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>
@endsection
