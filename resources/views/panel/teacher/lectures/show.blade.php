@extends('panel.teacher.panel-layout')

@section('css')
    <link href="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{ route('panel.teacher.lectures.create') }}" class="btn btn-primary">ایجاد درس</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="mb-17 mt-6">
                <div class="m-0">
                    <h4 class="fs-1 text-gray-800 w-bolder mb-6">{{ $lecture->lectureGroup->name }}</h4>
{{--                    <p class="fw-semibold fs-4 text-gray-600 mb-2">اول ، سلب مسئولیت - کل مراحل نوشتن یک پست وبلاگ اغلب بیش از دو ساعت طول می کشد ، حتی اگر بتوانید هشتاد کلمه را در هر دقیقه تایپ کنید و مهارت نوشتن شما تیز باشد.</p>--}}
                </div>
                @foreach($lecture->sessions as $session)
                    <div class="m-0">
                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0 active" data-bs-toggle="collapse" data-bs-target="#session_{{ $session->id }}" aria-expanded="true">
                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                <span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                        <rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                <span class="svg-icon toggle-off svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                    </svg>
                                </span>
                            </div>
                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">{{ $session->title }}</h4>
                        </div>
                        <div id="session_{{ $session->id }}" class="fs-6 ms-1 collapse show" style="">
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <div class="text-gray-600 fw-semibold fs-6">وضعیت: </div>
                                    <select class="form-select ms-4 w-175px h-35px" data-control="select2" data-hide-search="true" data-placeholder="انتخاب "
                                            name="is_held">
                                        <option></option>
                                        <option value="0" {{ !isset($lecture?->is_held) || !$lecture?->is_held ? 'selected="selected"' : '' }}>در انتظار برگزاری</option>
                                        <option value="1" {{ $lecture?->is_held ? 'selected="selected"' : ''
                                        }}>برگزار شده</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">ظ
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">تجربه جاوا اسکریپت</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">مهارت های خوب مدیریت زمان</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">تجربه با ریکت</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">تجربه با اچ تی ام ال</div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">تجربه با ریست </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10">
                                    <span class="bullet me-3"></span>
                                    <div class="text-gray-600 fw-semibold fs-6">دانش Git یک امتیاز مثبت است</div>
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-dashed"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
@endsection
