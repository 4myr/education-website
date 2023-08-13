<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>{{ request()->is('*create*') ? 'ایجاد درس' : 'ویرایش درس' }}</h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row row-cols-2">
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">کد درس</label>
                    <input type="text" name="code" class="form-control mb-2" placeholder="کد درس" value="{{ old('code', $lecture?->code) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">ترم</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="term_id">
                        <option></option>
                        @foreach($terms as $term)
                            <option value="{{ $term->id }}" {{ $lecture?->term_id == $term->id ? 'selected="selected"' : '' }}>{{ $term->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">گروه درسی</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="lecture_group_id">
                        <option></option>
                        @foreach($lectureGroups as $lectureGroup)
                            <option value="{{ $lectureGroup->id }}" {{ $lecture?->lecture_group_id == $lectureGroup->id ? 'selected="selected"' : '' }}>{{ $lectureGroup->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">استاد</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="teacher_id">
                        <option></option>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $lecture?->teacher_id == $teacher->id ? 'selected="selected"' : '' }}>{{ $teacher->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">ظرفیت</label>
                    <input type="number" name="capacity" min="0" max="100" class="form-control mb-2" placeholder="ظرفیت" value="{{ old('capacity', $lecture?->capacity) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">لینک ورود</label>
                    <input type="text" name="link" class="form-control mb-2" placeholder="لینک ورود" value="{{ old('link', $lecture?->link) }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>

                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">روز برگزاری</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="holding_day">
                        <option></option>
                        @foreach(["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنجشنبه", "جمعه"] as $day)
                            <option value="{{ $day }}" {{ $lecture?->holding_day == $day ? 'selected="selected"' : '' }}>{{ $day }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">ساعت برگزاری</label>
                    <input type="time" name="holding_time" class="form-control mb-2" placeholder="ساعت برگزاری" value="{{ old('holding_time', $lecture?->holding_time) }}">
                </div>
                @if (!$lecture)
                    <div class="mb-6 fv-row fv-plugins-icon-container">
                        <label class="form-label">جلسات</label>
                        <input type="number" name="sessions" min="0" max="100" class="form-control mb-2" placeholder="جلسات" value="16">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                @endif
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">وضعیت</label>
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="انتخاب " id="kt_ecommerce_add_product_status_select" name="is_active">
                        <option></option>
                        <option value="1" {{ !isset($lectureGroup?->is_active) || $lectureGroup?->is_active ? 'selected="selected"' : '' }}>فعال</option>
                        <option value="0"{{ isset($lectureGroup?->is_active) && !$lectureGroup?->is_active ? 'selected="selected"' : '' }}>غیرفعال</option>
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
