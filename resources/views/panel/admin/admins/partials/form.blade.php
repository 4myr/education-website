<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>{{ request()->is('*create*') ? 'ایجاد مدیر' : 'ویرایش مدیر' }}</h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row row-cols-2">
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">نام</label>
                    <input type="text" name="first_name" class="form-control mb-2" placeholder="نام" value="{{ old('first_name', $admin?->first_name) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">نام خانوادگی</label>
                    <input type="text" name="last_name" class="form-control mb-2" placeholder="نام خانوادگی" value="{{ old('last_name', $admin?->last_name) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">شماره موبایل</label>
                    <input type="text" name="mobile" class="form-control mb-2" placeholder="شماره موبایل" value="{{ old('mobile', $admin?->mobile) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">رمز عبور</label>
                    <input type="password" name="password" class="form-control mb-2" placeholder="خالی بگذارید">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">نقش</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="role">
                        <option></option>
                        <option value="{{ 'supervisor' }}" {{ !isset($admin?->role) || $admin?->role == 'supervisor'? 'selected="selected"' : ''
                        }}>سوپروایزر</option>
                        <option value="{{ 'admin' }}" {{ $admin?->role == 'admin' ? 'selected="selected"' : ''
                        }}>مدیر</option>
                        <option value="{{ 'content-maker' }}" {{ $admin?->role == 'content-maker' ? 'selected="selected"'
                        : ''
                        }}>مدیر محتوا</option>
                    </select>
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
