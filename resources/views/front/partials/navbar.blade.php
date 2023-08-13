@php
    $authenticated = false;
    $guardLabel = '';
    $type = '';

    if (auth()->guard('admin')->check()) {
        $authenticated = true;
        $guardLabel = 'ادمین';
        $type = 'admin';
    } elseif (auth()->guard('teacher')->check()) {
        $authenticated = true;
        $guardLabel = 'استاد';
        $type = 'teacher';
    } elseif (auth()->guard('student')->check()) {
        $authenticated = true;
        $guardLabel = 'دانشجو';
        $type = 'student';
    }
@endphp

<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">
                    ورود / ثبت نام
                </h6>

                <!--begin::Close-->
                <button class="btn btn-icon mb-0" style="padding: 8px 12px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close fs-6"></i>
                </button>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                    <p class="mb-4 text-secondary">
                        {{ auth('teacher')->check() || auth('admin')->check() || auth('student')->check() ? 'برای ورود به پنل کاربری خود، روی دکمه زیر کلیک کنید.' : 'برای ورود به سامانه یا ثبت نام در سامانه، روی دکمه زیر کلیک کنید.' }}
                    </p>

                    @if ($authenticated)
                        <a href="{{ route('panel.' . $type . '.index') }}" style="max-height: 60px" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">پنل {{ $guardLabel  }}</a>
                    @else
                        <div class="row justify-content-center">
                            <div class="col-sm-4 ps-sm-0">
                                <a href="{{ route('login', ['type' => 'student']) }}" style="max-height: 60px" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">ورود به عنوان
                                دانشجو</a>
                            </div>
                            <div class="col-sm-4 ps-sm-0">
                                <a href="{{ route('login', ['type' => 'teacher']) }}" style="max-height: 60px" class="btn bg-gradient-dark mb-0 ms-sm-3 me-auto h-100 w-100 d-block">ورود به عنوان
                                استاد</a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-white py-3 w-100">
    <div class="container">
        <a class="navbar-brand w-8" href="#" data-config-id="brand">
            <img src="{{ asset('/assets/front/images/logo.png') }}" width="130" alt="">
        </a>

        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item mx-2">
                    <a href="javascript:void(0);" class="nav-link ps-2 cursor-pointer">
                        صفحه اصلی
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a href="javascript:void(0);" class="nav-link ps-2 cursor-pointer">درس ها</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="javascript:void(0);" class="nav-link ps-2 cursor-pointer">آزمون ها</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="javascript:void(0);" class="nav-link ps-2 cursor-pointer">درباره ما</a>
                </li>
                <li class="nav-item mx-2">
                    <a href="javascript:void(0);" class="nav-link ps-2 cursor-pointer">ارتباط با ما</a>
                </li>
                <li class="nav-item mx-2">
                    @if ($authenticated)
                        <a href="{{ route('panel.' . $type . '.index') }}" class="btn bg-gradient-dark mb-0 cursor-pointer">پنل {{ $guardLabel }}</a>
                    @else
                        <button type="button"  data-bs-toggle="modal" data-bs-target="#kt_modal_stacked_1" class="btn bg-gradient-dark mb-0 cursor-pointer">ورود / ثبت نام</button>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
