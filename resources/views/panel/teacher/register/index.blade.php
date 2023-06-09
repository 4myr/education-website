@extends('panel.auth-layout')

@section('form')
    <form class="form w-100" novalidate="novalidate" action="{{ route('register.do', $type) }}" method="post">
        @csrf
        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">ثبت نام اساتید</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ env('APP_NAME') }}</div>
        </div>
        <div class="separator separator-content my-14">
            <span class="w-125px text-gray-500 fw-semibold fs-7">با شماره موبایل</span>
        </div>

        @include('partials.alerts')

        <div class="fv-row mb-8">
            <input type="text" placeholder="نام" name="first_name" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-8">
            <input type="text" placeholder="نام خانوادگی" name="last_name" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-8">
            <input type="text" placeholder="موبایل" name="mobile" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-8" data-kt-password-meter="true">
            <div class="mb-1">
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" type="password" placeholder="کلمه عبور" name="password" autocomplete="off" />
                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                        <i class="bi bi-eye-slash fs-2"></i>
                        <i class="bi bi-eye fs-2 d-none"></i>
                    </span>
                </div>
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
            </div>
            <div class="text-muted">استفاده از 8 یا بیشتر کاراکتر با ترکیبی از حروف، اعداد و نمادها</div>
        </div>
        <div class="fv-row mb-8">
            <input placeholder="تکرار رمز عبور" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent" />
        </div>
        <div class="fv-row mb-8">
            <label class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">من
                <a href="#" class="ms-1 link-primary">شرایط و قوانین</a> را قبول می کنم</span>
            </label>
        </div>
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                <span class="indicator-label">ثبت نام</span>
                <span class="indicator-progress">لطفا صبر کنید...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
        <div class="text-gray-500 text-center fw-semibold fs-6">استاد هستید؟
        <a href="{{ route('login', $type) }}" class="link-primary">وارد شوید</a></div>
    </form>
@endsection
