@extends('panel.teacher.panel-layout')

@section('body')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <h5>{{ !auth()->guard('teacher')->user()->approved ? "حساب شما نیاز به تایید دارد!" : "داشبورد" }}</h5>
            </div>
        </div>
        <div class="card-body pt-0">
            @if(auth()->guard('teacher')->user()->approved)
               برای دسترسی به بخش‌های مختلف از منو استفاده کنید.
            @else
                لطفا تا تایید حساب کاربری صبر کنید.
            @endif
        </div>
    </div>
@endsection
