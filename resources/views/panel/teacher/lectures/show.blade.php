@extends('panel.teacher.panel-layout')

@section('css')
    <link href="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.css") }}" rel="stylesheet" type="text/css" />
@endsection
@section('body')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-toolbar">
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <a href="{{ route('panel.teacher.exam.create', $lecture->id) }}" class="btn btn-primary">ایجاد آزمون</a>
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
                        <form id="session_{{ $session->id }}" class="fs-6 ms-1 collapse show" style="" action="{{ route('panel.teacher.sessions.update', $session->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <div class="text-gray-600 fw-semibold fs-6 me-3">وضعیت: </div>
                                    <input id="is_held_{{ $session->id }}" {{ $session->is_held ? 'checked' : '' }} type="radio" class="heldSwitch form-switch" name="is_held" data-id="{{
                                    $session->id
                                    }}" />
                                    <label for="is_held_{{ $session->id }}" class="ms-2 me-4">برگزار شده</label>
                                    <input id="not_held_{{ $session->id }}" value="1"  {{ !$session->is_held ? 'checked' : '' }} type="radio" class="heldSwitch form-switch" name="is_held"
                                           data-id="{{ $session->id }}" />
                                    <label for="not_held_{{ $session->id }}" value="0" class="ms-2 me-4">در انتظار برگزاری</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="ps-10 mb-n1">
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <h4>فایل‌ها:</h4>
                                        <button type="button" class="upload-file btn btn-sm btn-secondary">افزودن فایل</button>
                                        <input class="files" type="file" name="files[]" id="file" style="display:none;" multiple />
                                    </div>

                                    @if ($session->files)
                                        @foreach($session->files ?? [] as $file)
                                            <a href="{{ \Illuminate\Support\Facades\Storage::url($file['path']) }}" target="_blank" class="d-flex align-items-center gap-2 mb-1">
                                                <i class="fas fa-file-alt"></i>
                                                <div dir="ltr" class="text-gray-800 fw-semibold fs-7">{{ $file['orgName'] }}</div>
                                            </a>
                                        @endforeach
                                    @else
                                        <p>فایلی موجود نیست!</p>
                                    @endif
                                </div>
                            </div>
                        </form>
                        <div class="separator separator-dashed mt-6"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset("/metronic/assets/plugins/custom/datatables/datatables.bundle.js") }}"></script>
    <script type="text/javascript">
        $('.heldSwitch').on('change', function(e) {
            var form = $(e.currentTarget).closest('form');
            form.submit()
        });
        $('.upload-file').on('click', function(e) {
            $(e.currentTarget).siblings('input').click();
        });

        $(".files").on('change', function (e) {
            var form = $(e.currentTarget).closest('form');
            form.submit()
        });
    </script>
@endsection
