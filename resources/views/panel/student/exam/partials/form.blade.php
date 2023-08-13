<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    <div class="card card-flush py-4">
        <div class="card-header">
            <div class="card-title">
                <h2>ایجاد آزمون برای درس <strong>«{{ $lecture->lectureGroup->name }}»</strong></h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row row-cols-3">
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">عنوان آزمون</label>
                    <input type="text" class="form-control mb-2" placeholder="عنوان آزمون" value="{{ old('title', $exam?->title) }}" name="title">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">زمان آزمون (دقیقه)</label>
                    <input type="number" min="5" max="60" class="form-control mb-2" placeholder="زمان آزمون (دقیقه)" value="{{ old('time', $exam?->time) }}" name="time">
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="mb-6 fv-row fv-plugins-icon-container">
                    <label class="form-label">شروع آزمون</label>
                    <input type="text"  placeholder="زمان شروع آزمون" id="startAt" data-name="dateText" class="form-control" readonly>
                    <input type="hidden" name="start_at" data-name="dateInput">

                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
            </div>

            <div class="separator separator-dashed mb-6"></div>

            <button type="button" class="btn btn-sm btn-success" id="add-question"><i class="bi bi-plus"></i> افزودن سوال</button>

            <div class="d-flex flex-column gap-6 mt-6" id="questions">
                <div class="d-flex flex-column gap-2 question">
                    <h6><i class="bi bi-question-circle me-2 fs-5 align-text-bottom"></i>سوال <span class="question-number">1</span></h6>

                    <div class="d-flex align-items-center gap-3 w-300px">
                        <label class="form-label" style="min-width: 68px;">نوع سوال:</label>
                        <select class="form-select mb-2 question-type"  data-hide-search="true" data-placeholder="انتخاب "  name="questions[0][type]">
                            <option value="text">متن</option>
                            <option value="choice">چهار گزینه‌ای</option>
                        </select>
                    </div>
                    <div class="d-flex align-items-center gap-3 w-300px">
                        <label class="form-label" style="min-width: 68px;">نمره:</label>
                        <input type="number" name="questions[0][score]" step="0.25" min="0.25" max="10" class="form-control mb-2" placeholder="بارم">
                    </div>

                    <div class="d-flex align-items-center gap-3" style="max-width: 600px">
                        <label class="form-label" style="min-width: 68px;">عنوان سوال:</label>
                        <input type="text" name="questions[0][title]" class="form-control mb-2" placeholder="عنوان سوال">
                    </div>

                    <div class="d-flex gap-4 flex-wrap choice-box d-none">
                        <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                            <label class="form-label" style="min-width: 64px;">گزینه اول:</label>
                            <input type="text" name="questions[0][choice1]" class="form-control mb-2" placeholder="گزینه اول" disabled>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                            <label class="form-label" style="min-width: 64px;">گزینه دوم:</label>
                            <input type="text" name="questions[0][choice2]" class="form-control mb-2" placeholder="گزینه دوم" disabled>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                            <label class="form-label" style="min-width: 64px;">گزینه سوم:</label>
                            <input type="text" name="questions[0][choice3]" class="form-control mb-2" placeholder="گزینه سوم" disabled>
                        </div>
                        <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                            <label class="form-label" style="min-width: 64px;">گزینه چهارم:</label>
                            <input type="text" name="questions[0][choice4]" class="form-control mb-2" placeholder="گزینه چهارم" disabled>
                        </div>
                    </div>
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

        var questionTypeChange = function(e) {
            var parent = $(e.currentTarget).closest('.question');
            var value = $(e.currentTarget).val();

            if (value == 'choice') {
                parent.find('.choice-box').removeClass('d-none');
                parent.find('.choice-box').find('input').attr('disabled', false)
            } else {
                parent.find('.choice-box').addClass('d-none');
                parent.find('.choice-box').find('input').attr('disabled', true)
            }
        };

        $('#add-question').on('click', function() {
            var questions = $('#questions');
            var questionsElements = $('.question');
            var firstQuestion = questionsElements[0];

            var newQuestion = $(firstQuestion).clone();

            newQuestion.html(newQuestion.html().replace(/questions\[0\]/g, 'questions[' + questionsElements.length + ']'))
            newQuestion.find('.question-number').html(questionsElements.length+1);
            newQuestion.find('.choice-box').addClass('d-none');
            newQuestion.find('.choice-box').find('input').attr('disabled', true)
            newQuestion.find('.question-type').on('change', questionTypeChange)
            questions.append(newQuestion)
        });

        $('.question-type').on('change', questionTypeChange)

        const dpInstance = new mds.MdsPersianDateTimePicker(document.getElementById('startAt'), {
            targetTextSelector:'[data-name="dateText"]',
            targetDateSelector:'[data-name="dateInput"]',
            enableTimePicker: true,
            englishNumber:false,
            isGregorian:false,
            persianNumber: true,
            disableBeforeToday: true,
            disableBeforeDate: new Date()
        });
    </script>
@endsection
