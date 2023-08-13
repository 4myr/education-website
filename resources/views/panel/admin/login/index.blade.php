@extends('panel.auth-layout')

@section('form')
    <form class="form w-100" novalidate="novalidate" action="{{ route('login.do', $type) }}" method="post">
        @csrf
        <div class="text-center mb-11">
            <h1 class="text-dark fw-bolder mb-3">ورود مدیران</h1>
            <div class="text-gray-500 fw-semibold fs-6">{{ env('APP_NAME') }}</div>
        </div>
        <div class="separator separator-content my-14">
            <span class="w-125px text-gray-500 fw-semibold fs-7">با شماره موبایل</span>
        </div>

        @include('partials.alerts')

        <div class="fv-row mb-8">
            <input type="tel" placeholder="شماره موبایل" name="mobile" autocomplete="off" class="form-control bg-transparent" style="direction: rtl"/>
        </div>
        <div class="fv-row mb-3">
            <input type="password" placeholder="رمز عبور" name="password" autocomplete="off" class="form-control bg-transparent" />
        </div>
{{--        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">--}}
{{--            <div></div>--}}
{{--            <a href="#" class="link-primary">فراموشی رمز عبور</a>--}}
{{--        </div>--}}
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <span class="indicator-label">ورود</span>
                <span class="indicator-progress">لطفا صبر کنید...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
        </div>
    </form>
@endsection
