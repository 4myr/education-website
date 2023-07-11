<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>تصویر شاخص</h2>
            </div>
        </div>

        <div class="card-body text-center pt-0">

            <style>.image-input-placeholder {
                    background-image: url('{{ $news?->image_url ?? asset('/metronic/assets/media/svg/files/blank-image.svg')}}');
                }

                [data-theme="dark"] .image-input-placeholder {
                    background-image: url('{{ $news?->image_url ?? asset('/metronic/assets/media/svg/files/blank-image-dark.svg') }}');
                }</style>
            <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                <div class="image-input-wrapper w-150px h-150px"></div>
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="تعویض آواتار">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                    <input type="hidden" name="image_remove"/>
                </label>
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="انصراف image">
														<i class="bi bi-x fs-2"></i>
													</span>
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="حذف آواتار">
														<i class="bi bi-x fs-2"></i>
													</span>
            </div>
            <div class="text-muted fs-7">تصویر بندانگشتی خبر را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند</div>
        </div>
    </div>

    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>وضعیت</h2>
            </div>
            <div class="card-toolbar">
                <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
            </div>
        </div>
        <div class="card-body pt-0">
            <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="is_active">
                <option></option>
                <option value="1" {{ !isset($news?->is_active) || $news?->is_active ? 'selected="selected"' : '' }}>منتشر شده</option>
                <option value="0"{{ isset($news?->is_active) && !$news?->is_active ? 'selected="selected"' : '' }}>پیش نویس</option>
            </select>
            <div class="text-muted fs-7">وضعیت خبر را تنظیم کنید.</div>
        </div>
    </div>
</div>
<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>عمومی</h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="mb-10 fv-row fv-plugins-icon-container">
                <label class="form-label">عنوان خبر</label>
                <input type="text" name="title" class="form-control mb-2" placeholder="عنوان خبر" value="{{ old('title', $news?->title) }}">
                <div class="text-muted fs-7">عنوان خبر را وارد کنید و توصیه می شود منحصر به فرد باشد.</div>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div>
                <label class="form-label">توضیحات</label>
                <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2" style="height: fit-content"></div>
                <input type="hidden" name="content" id="content">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <a href="../../demo13/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">انصراف</a>
        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
            <span class="indicator-label">ذخیره تغییرات</span>
            <span class="indicator-progress">لطفا صبر کنید...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
</div>

@section('js')
    <script type="text/javascript">
        "use strict";

        // Class definition
        var KTAppEcommerceSaveProduct = function () {

            // Private functions

            // Init quill editor
            const initQuill = () => {
                // Define all elements for quill editor
                const elements = [
                    '#kt_ecommerce_add_product_description',
                    '#kt_ecommerce_add_product_meta_description'
                ];

                // Loop all elements
                elements.forEach(element => {
                    // Get quill element
                    let quill = document.querySelector(element);

                    // Break if element not found
                    if (!quill) {
                        return;
                    }

                    // Init quill --- more info: https://quilljs.com/docs/quickstart/
                    quill = new Quill(element, {
                        modules: {
                            toolbar: [
                                [{
                                    header: [1, 2, false]
                                }],
                                ['bold', 'italic', 'underline'],
                                ['image', 'code-block']
                            ]
                        },
                        placeholder: 'اینجا بنویسید...',
                        theme: 'snow' // or 'bubble'
                    });


                      var form = document.querySelector("form");
                      var content = document.querySelector('#content');

                      form.addEventListener('submit', function(e){
                        content.value = quill.root.innerHTML;
                      });
                });
            }

            // Public methods
            return {
                init: function () {
                    // Init forms
                    initQuill();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTAppEcommerceSaveProduct.init();
        });
    </script>
@endsection
