@extends('panel.admin.panel-layout')

@section('body')
    <form action="{{ route('panel.admin.settings.update') }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        @method('PATCH')

        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>تنظیمات</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row row-cols-1">
                        <div class="mb-6 fv-row fv-plugins-icon-container d-flex align-items-center gap-4">
                            <input id="submit-score" type="checkbox" name="submit-score" class="form-check mb-2" placeholder="ثبت نمره" {{ \App\Models\Settings::getSome('submit-score') ?
                            'checked="checked"'
                            : ''  }}">
                            <label for="submit-score" class="form-label">اجازه ثبت نمره</label>
                        </div>

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
    </form>
@endsection

@section('js')
    <script type="text/javascript">
        "use strict";

        // Class definition
        var InitializerPage = function () {
            // Private functions

            // Public methods
            return {
                init: function () {

                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            InitializerPage.init();
        });
    </script>
@endsection
