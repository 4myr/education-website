@extends('panel.admin.panel-layout')

@section('body')
    <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
          data-kt-redirect="../../demo13/dist/apps/ecommerce/catalog/categories.html">
        <!--begin::کناری column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>تصویر شاخص</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <!--begin::Image input placeholder-->
                    <style>.image-input-placeholder {
                            background-image: url('assets/media/svg/files/blank-image.svg');
                        }

                        [data-theme="dark"] .image-input-placeholder {
                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                        }</style>
                    <!--end::Image input placeholder-->
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::نمایش existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::نمایش existing avatar-->
                        <!--begin::Tags-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip"
                               aria-label="تعویض آواتار" data-bs-original-title="تعویض آواتار" data-kt-initialized="1">
                            <!--begin::Icon-->
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--end::Icon-->
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Tags-->
                        <!--begin::انصراف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                              aria-label="انصراف avatar" data-bs-original-title="انصراف avatar" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::انصراف-->
                        <!--begin::حذف-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="حذف آواتار"
                              data-bs-original-title="حذف آواتار" data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::حذف-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">تصویر کوچک دسته را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::وضعیت-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>وضعیت</h2>
                    </div>
                    <!--end::کارت title-->
                    <!--begin::کارت toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    </div>
                    <!--begin::کارت toolbar-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_category_status_select"
                            data-select2-id="select2-data-kt_ecommerce_add_category_status_select" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option></option>
                        <option value="published" selected="selected" data-select2-id="select2-data-11-odnd">منتشر شده</option>
                        <option value="scheduled">در انتظار</option>
                        <option value="unpublished">Unpublished</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-10-shon" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-kt_ecommerce_add_category_status_select-container" aria-controls="select2-kt_ecommerce_add_category_status_select-container"><span
                                    class="select2-selection__rendered" id="select2-kt_ecommerce_add_category_status_select-container" role="textbox" aria-readonly="true"
                                    title="منتشر شده">منتشر شده</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span
                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">وضعیت دسته را تنظیم کنید.</div>
                    <!--end::توضیحات-->
                    <!--begin::تاریخpicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">انتخاب publishing date و time</label>
                        <input class="form-control flatpickr-input" id="kt_ecommerce_add_category_status_datepicker" placeholder="انتخاب تاریخ &amp; time" type="text" readonly="readonly">
                    </div>
                    <!--end::تاریخpicker-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::وضعیت-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <!--begin::کارت title-->
                    <div class="card-title">
                        <h2>فروشگاه قالب</h2>
                    </div>
                    <!--end::کارت title-->
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::انتخاب store template-->
                    <label for="kt_ecommerce_add_category_store_template" class="form-label">یک قالب فروشگاهی انتخاب کنید</label>
                    <!--end::انتخاب store template-->
                    <!--begin::انتخاب2-->
                    <select class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_category_store_template"
                            data-select2-id="select2-data-kt_ecommerce_add_category_store_template" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                        <option></option>
                        <option value="default" selected="selected" data-select2-id="select2-data-13-49f1">قالب پیش فرض</option>
                        <option value="electronics">الکترونیک</option>
                        <option value="office">اداری</option>
                        <option value="fashion">فشن</option>
                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-12-6ghr" style="width: 100%;"><span class="selection"><span
                                class="select2-selection select2-selection--single form-select mb-2" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                                aria-labelledby="select2-kt_ecommerce_add_category_store_template-container" aria-controls="select2-kt_ecommerce_add_category_store_template-container"><span
                                    class="select2-selection__rendered" id="select2-kt_ecommerce_add_category_store_template-container" role="textbox" aria-readonly="true" title="قالب پیش فرض">قالب پیش فرض</span><span
                                    class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                                                                                                                               aria-hidden="true"></span></span>
                    <!--end::انتخاب2-->
                    <!--begin::توضیحات-->
                    <div class="text-muted fs-7">اختصاص دادن یک الگو از موضوع فعلی شما برای تعریف نحوه نمایش دسته بندی محصولات.</div>
                    <!--end::توضیحات-->
                </div>
                <!--end::کارت body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::کناری column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::عمومی options-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>عمومی</h2>
                    </div>
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                        <!--begin::Tags-->
                        <label class="required form-label">دسته بندی نام</label>
                        <!--end::Tags-->
                        <!--begin::Input-->
                        <input type="text" name="category_name" class="form-control mb-2" placeholder="نام محصول" value="">
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">نام دسته مورد نیاز است و توصیه می شود منحصر به فرد باشد.</div>
                        <!--end::توضیحات-->
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label">توضیحات</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false"
                                                                                                                         aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon
                                                class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span
                                        class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item"
                                                                                                                                  data-value="1"></span><span tabindex="0" role="button"
                                                                                                                                                              class="ql-picker-item"
                                                                                                                                                              data-value="2"></span><span tabindex="0"
                                                                                                                                                                                          role="button"
                                                                                                                                                                                          class="ql-picker-item ql-selected"></span></span></span><select
                                    class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span
                                class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke"
                                                                                                                         d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path
                                            class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button"
                                                                                                                                                                                         class="ql-italic"><svg
                                        viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line
                                            class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path
                                            class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3"
                                                                                                                                       y="15"></rect> </svg></button></span><span class="ql-formats"><button
                                    type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7"
                                                                                                                                                                        r="1"></circle> <polyline
                                            class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg
                                        viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke"
                                                                                                                                             points="13 7 15 9 13 11"></polyline> <line
                                            class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div>
                        <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px h- mb-2 ql-container ql-snow" style="height: fit-content">
                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div>
                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                                                                                                                            data-link="https://quilljs.com"
                                                                                                                                                            data-video="Embed URL"><a
                                    class="ql-action"></a><a class="ql-remove"></a></div>
                        </div>
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">برای مشاهده بهتر، یک توضیح برای دسته تنظیم کنید.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::عمومی options-->
            <!--begin::Meta options-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2> تنظیمات متا</h2>
                    </div>
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Tags-->
                        <label class="form-label">برچسب متا تایتل</label>
                        <!--end::Tags-->
                        <!--begin::Input-->
                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="نام متا تگ">
                        <!--end::Input-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">یک عنوان متا تگ تنظیم کنید. توصیه می شود کلمات کلیدی ساده و دقیق باشند.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Tags-->
                        <label class="form-label">توضیحات متا تگ</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false"
                                                                                                                         aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"> <polygon
                                                class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span
                                        class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item"
                                                                                                                                  data-value="1"></span><span tabindex="0" role="button"
                                                                                                                                                              class="ql-picker-item"
                                                                                                                                                              data-value="2"></span><span tabindex="0"
                                                                                                                                                                                          role="button"
                                                                                                                                                                                          class="ql-picker-item ql-selected"></span></span></span><select
                                    class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option selected="selected"></option></select></span><span
                                class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke"
                                                                                                                         d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path
                                            class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button"
                                                                                                                                                                                         class="ql-italic"><svg
                                        viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line
                                            class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path
                                            class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3"
                                                                                                                                       y="15"></rect> </svg></button></span><span class="ql-formats"><button
                                    type="button" class="ql-image"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7"
                                                                                                                                                                        r="1"></circle> <polyline
                                            class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button><button type="button" class="ql-code-block"><svg
                                        viewBox="0 0 18 18"> <polyline class="ql-even ql-stroke" points="5 7 3 9 5 11"></polyline> <polyline class="ql-even ql-stroke"
                                                                                                                                             points="13 7 15 9 13 11"></polyline> <line
                                            class="ql-stroke" x1="10" x2="8" y1="5" y2="13"></line> </svg></button></span></div>
                        <div id="kt_ecommerce_add_category_meta_description" name="kt_ecommerce_add_category_meta_description" class="min-h-100px mb-2 ql-container ql-snow" style="height: fit-content">
                            <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here..."><p><br></p></div>
                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2"
                                                                                                                                                            data-link="https://quilljs.com"
                                                                                                                                                            data-video="Embed URL"><a
                                    class="ql-action"></a><a class="ql-remove"></a></div>
                        </div>
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">برای افزایش رتبه سئو، توضیحات متا تگ را برای دسته بندی تنظیم کنید.</div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label">کلمات کلیدی</label>
                        <!--end::Tags-->
                        <!--begin::or-->
                        <tags class="tagify form-control mb-2 tagify--noTags tagify--empty" tabindex="-1">
                            <span contenteditable="" tabindex="0" data-placeholder="​" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                            ​
                        </tags>
                        <input id="kt_ecommerce_add_category_meta_keywords" name="kt_ecommerce_add_category_meta_keywords" class="form-control mb-2" tabindex="-1">
                        <!--end::or-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fs-7">فهرستی از کلمات کلیدی را تنظیم کنید که مقوله مربوط به آن است. شهریور کلمات کلیدی را با اضافه کردن کاما مرتب کنید
                            <code>,</code>between each keyword.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::Meta options-->
            <!--begin::Automation-->
            <div class="card card-flush py-4">
                <!--begin::کارت header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>اتوماسیون</h2>
                    </div>
                </div>
                <!--end::کارت header-->
                <!--begin::کارت body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Tags-->
                        <label class="form-label mb-5">روش واگذاری محصولات</label>
                        <!--end::Tags-->
                        <!--begin::Methods-->
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="0" id="kt_ecommerce_add_category_automation_0" checked="checked">
                                <!--end::Input-->
                                <!--begin::Tags-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                    <div class="fw-bold text-gray-800">دستی</div>
                                    <div class="text-gray-600">با انتخاب دستی این دسته در حین ایجاد یا به روز رسانی محصول، محصول را یکی یکی به این دسته اضافه کنید.</div>
                                </label>
                                <!--end::Tags-->
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Input row-->
                        <div class="separator separator-dashed my-5"></div>
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="1" id="kt_ecommerce_add_category_automation_1">
                                <!--end::Input-->
                                <!--begin::Tags-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                    <div class="fw-bold text-gray-800">Automatic</div>
                                    <div class="text-gray-600">محصولات مطابق با شرایط زیر به طور خودکار به این دسته اختصاص داده می شود.</div>
                                </label>
                                <!--end::Tags-->
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Input row-->
                        <!--end::Methods-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-none mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                        <!--begin::Tags-->
                        <label class="form-label">شروط</label>
                        <!--end::Tags-->
                        <!--begin::Conditions-->
                        <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                            <span>محصولات باید مطابقت داشته باشند::</span>
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions" checked="checked">
                                <label class="form-check-label" for="all_conditions">همه شروط</label>
                            </div>
                            <!--end::رادیو-->
                            <!--begin::رادیو-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value="" id="any_conditions">
                                <label class="form-check-label" for="any_conditions">بدون شرط</label>
                            </div>
                            <!--end::رادیو-->
                        </div>
                        <!--end::Conditions-->
                        <!--begin::Repeater-->
                        <div id="kt_ecommerce_add_category_conditions">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                        <!--begin::انتخاب2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select select2-hidden-accessible" name="kt_ecommerce_add_category_conditions[0][condition_type]" data-placeholder="انتخاب "
                                                    data-kt-ecommerce-catalog-add-category="condition_type" data-select2-id="select2-data-122-sico" tabindex="-1" aria-hidden="true">
                                                <option></option>
                                                <option value="title">عنوان محصول</option>
                                                <option value="tag" selected="selected" data-select2-id="select2-data-124-cb6b">برچسب محصولات</option>
                                                <option value="price">قیمت محصول</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-123-92us" style="width: 100%;"><span
                                                    class="selection"><span class="select2-selection select2-selection--single form-select" role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0" aria-disabled="false"
                                                                            aria-labelledby="select2-kt_ecommerce_add_category_conditions0condition_type-vl-container"
                                                                            aria-controls="select2-kt_ecommerce_add_category_conditions0condition_type-vl-container"><span
                                                            class="select2-selection__rendered" id="select2-kt_ecommerce_add_category_conditions0condition_type-vl-container" role="textbox"
                                                            aria-readonly="true" title="برچسب محصولات">برچسب محصولات</span><span class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::انتخاب2-->
                                        <!--begin::انتخاب2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select select2-hidden-accessible" name="kt_ecommerce_add_category_conditions[0][condition_equals]" data-placeholder="انتخاب "
                                                    data-kt-ecommerce-catalog-add-category="condition_equals" data-select2-id="select2-data-125-ycew" tabindex="-1" aria-hidden="true">
                                                <option></option>
                                                <option value="equal" selected="selected" data-select2-id="select2-data-127-h7ob">برابر با</option>
                                                <option value="notequal">برابر نباشد با</option>
                                                <option value="greater">بزرگتر از</option>
                                                <option value="less">کوچکتر از</option>
                                                <option value="starts">شروع با</option>
                                                <option value="ends">تمام بشه با</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl" data-select2-id="select2-data-126-z7lm" style="width: 100%;"><span
                                                    class="selection"><span class="select2-selection select2-selection--single form-select" role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0" aria-disabled="false"
                                                                            aria-labelledby="select2-kt_ecommerce_add_category_conditions0condition_equals-yc-container"
                                                                            aria-controls="select2-kt_ecommerce_add_category_conditions0condition_equals-yc-container"><span
                                                            class="select2-selection__rendered" id="select2-kt_ecommerce_add_category_conditions0condition_equals-yc-container" role="textbox"
                                                            aria-readonly="true" title="برابر با">برابر با</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::انتخاب2-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mw-100 w-200px" name="kt_ecommerce_add_category_conditions[0][condition_label]" placeholder="">
                                        <!--end::Input-->
                                        <!--begin::Button-->
                                        <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor"></rect>
                                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group mt-5">
                                <!--begin::Button-->
                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                    <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                        <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor"></rect>
                                    </svg>
                                </span>
                                    <!--end::Svg Icon-->یک شرط دیگر اضافه کنید
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Repeater-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::کارت header-->
            </div>
            <!--end::Automation-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="../../demo13/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
                    <span class="indicator-progress">لطفا صبر کنید...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
@endsection
@section('js')
    <script type="text/javascript">
        "use strict";

        // Class definition
        var KTCustomersList = function () {
            // Define shared variables
            var datatable;
            var filterMonth;
            var filterPayment;
            var table

            // Private functions
            var initCustomerList = function () {
                // Set date data order
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[5].innerHTML, "DD MMM YYYY, LT").format(); // select date from 5th column in table
                    dateRow[5].setAttribute('data-order', realDate);
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'columnDefs': [
                        {orderable: false, targets: 0}, // Disable ordering on column 0 (checkbox)
                        {orderable: false, targets: 6}, // Disable ordering on column 6 (actions)
                    ]
                });

                // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
                datatable.on('draw', function () {
                    initToggleToolbar();
                    handleDeleteRows();
                    toggleToolbars();
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-customer-table-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Filter Datatable
            var handleFilterDatatable = () => {
                // Select filter options
                filterMonth = $('[data-kt-customer-table-filter="month"]');
                filterPayment = document.querySelectorAll('[data-kt-customer-table-filter="payment_type"] [name="payment_type"]');
                const filterButton = document.querySelector('[data-kt-customer-table-filter="filter"]');

                // Filter datatable on submit
                filterButton.addEventListener('click', function () {
                    // Get filter values
                    const monthValue = filterMonth.val();
                    let paymentValue = '';

                    // Get payment value
                    filterPayment.forEach(r => {
                        if (r.checked) {
                            paymentValue = r.value;
                        }

                        // Reset payment value if "All" is selected
                        if (paymentValue === 'all') {
                            paymentValue = '';
                        }
                    });

                    // Build filter string from filter options
                    const filterString = monthValue + ' ' + paymentValue;

                    // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
                    datatable.search(filterString).draw();
                });
            }

            // Delete customer
            var handleDeleteRows = () => {
                // Select all delete buttons
                const deleteButtons = table.querySelectorAll('[data-kt-customer-table-filter="delete_row"]');

                deleteButtons.forEach(d => {
                    // Delete button on click
                    d.addEventListener('click', function (e) {
                        e.preventDefault();

                        // Select parent row
                        const parent = e.target.closest('tr');

                        // Get customer name
                        const customerName = parent.querySelectorAll('td')[1].innerText;

                        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Are you sure you want to delete " + customerName + "?",
                            icon: "warning",
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonText: "Yes, delete!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then(function (result) {
                            if (result.value) {
                                Swal.fire({
                                    text: "You have deleted " + customerName + "!.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                }).then(function () {
                                    // Remove current row
                                    datatable.row($(parent)).remove().draw();
                                });
                            } else if (result.dismiss === 'cancel') {
                                Swal.fire({
                                    text: customerName + " was not deleted.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                });
                            }
                        });
                    })
                });
            }

            // Reset Filter
            var handleResetForm = () => {
                // Select reset button
                const resetButton = document.querySelector('[data-kt-customer-table-filter="reset"]');

                // Reset datatable
                resetButton.addEventListener('click', function () {
                    // Reset month
                    filterMonth.val(null).trigger('change');

                    // Reset payment type
                    filterPayment[0].checked = true;

                    // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
                    datatable.search('').draw();
                });
            }

            // Init toggle toolbar
            var initToggleToolbar = () => {
                // Toggle selected action toolbar
                // Select all checkboxes
                const checkboxes = table.querySelectorAll('[type="checkbox"]');

                // Select elements
                const deleteSelected = document.querySelector('[data-kt-customer-table-select="delete_selected"]');

                // Toggle delete selected toolbar
                checkboxes.forEach(c => {
                    // Checkbox on click event
                    c.addEventListener('click', function () {
                        setTimeout(function () {
                            toggleToolbars();
                        }, 50);
                    });
                });

                // Deleted selected rows
                deleteSelected.addEventListener('click', function () {
                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete selected customers?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // Remove all selected customers
                                checkboxes.forEach(c => {
                                    if (c.checked) {
                                        datatable.row($(c.closest('tbody tr'))).remove().draw();
                                    }
                                });

                                // Remove header checked box
                                const headerCheckbox = table.querySelectorAll('[type="checkbox"]')[0];
                                headerCheckbox.checked = false;
                            });
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: "Selected customers was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                });
            }

            // Toggle toolbars
            const toggleToolbars = () => {
                // Define variables
                const toolbarBase = document.querySelector('[data-kt-customer-table-toolbar="base"]');
                const toolbarSelected = document.querySelector('[data-kt-customer-table-toolbar="selected"]');
                const selectedCount = document.querySelector('[data-kt-customer-table-select="selected_count"]');

                // Select refreshed checkbox DOM elements
                const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');

                // Detect checkboxes state & count
                let checkedState = false;
                let count = 0;

                // Count checked boxes
                allCheckboxes.forEach(c => {
                    if (c.checked) {
                        checkedState = true;
                        count++;
                    }
                });

                // Toggle toolbars
                if (checkedState) {
                    selectedCount.innerHTML = count;
                    toolbarBase.classList.add('d-none');
                    toolbarSelected.classList.remove('d-none');
                } else {
                    toolbarBase.classList.remove('d-none');
                    toolbarSelected.classList.add('d-none');
                }
            }

            // Public methods
            return {
                init: function () {
                    table = document.querySelector('#kt_customers_table');

                    if (!table) {
                        return;
                    }

                    initCustomerList();
                    initToggleToolbar();
                    handleSearchDatatable();
                    handleFilterDatatable();
                    handleDeleteRows();
                    handleResetForm();
                }
            }
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTCustomersList.init();
        });
    </script>
@endsection
