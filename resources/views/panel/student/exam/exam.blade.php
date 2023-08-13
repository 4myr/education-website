
@extends('panel.student.panel-layout')

@section('body')
    <form action="{{ route('panel.student.exam.answer', [$exam, $student['student_id']]) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5
    fv-plugins-framework">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        @if ($student['status'] == 'finished')
                            <h2>زمان آزمون به پایان رسیده است!</h2>
                        @elseif($student['status'] == 'not_started')
                            <h2>آزمون هنوز شروع نشده است!</h2>
                        @elseif($student['status'] == 'in_progress')
                            <p>تا پایان آزمون <span><strong id="minutes">{{ $exam->start_at->addMinutes($exam->time)->diffInMinutes(Carbon\Carbon::now()) }} دقیقه</strong> وقت دارید</span></p>
                        @endif
                    </div>
                </div>

                @if ($student['status'] == 'in_progress')
                    <div class="card-body pt-0">
                        <div class="d-flex flex-column gap-10 mt-6" id="questions">
                            @foreach($student['questions'] as $number => $question)
                                <div class="d-flex flex-column gap-2 question" data-id="{{ $question['id'] }}">
                                    <h6 class="mb-4"><i class="bi bi-question-circle me-2 fs-5 align-text-bottom"></i> {{ $question['question'] }} ({{ $question['score'] }} نمره)</h6>
                                    @if ($question['type'] == 'choice')
                                        <h6 class="mb-3">پاسخ شما:</h6>
                                        <div class="d-flex gap-4 flex-column choice-box ms-4">
                                        @for($i=1;$i<=4;$i++)
                                            <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                                                <input {{ ($question['answer']['answer'] ?? '') == $question['choice' . $i] ? 'checked' : '' }} type="radio" class="answer form-switch" value="{{
                                                $question['choice' .
                                                 $i]
                                                }}"
                                                       name="answer[{{ $question['id'] }}]"
                                                       id="answer[{{
                                                $question['id'] }}]-{{ $i
                                                }}" />
                                                <label for="answer[{{ $question['id'] }}]-{{ $i }}" class="ms-2 me-4">{{ $question['choice' . $i] }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                    @else
                                        <div class="d-flex align-items-center gap-3" style="max-width: 600px">
                                            <label class="form-label" style="min-width: 68px;">پاسخ شما:</label>
                                            <textarea class="answer form-control mb-2" placeholder="پاسخ خود را اینجا وارد کنید." name="answer[{{ $question['id']
                                            }}]">{{ ($question['answer']['answer'] ?? '') }}</textarea>
                                        </div>
                                    @endif
                                </div>
                                <div class="separator my-2"></div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            @if($student['status'] == 'in_progress')
                <div class="d-flex justify-content-end">
                    <button type="button" id="submitBtn" class="btn btn-primary">
                        <span class="indicator-label">ذخیره تغییرات</span>
                        <span class="indicator-progress">لطفا صبر کنید...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            @endif
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

        function addMinutes(date, minutes) {
          date.setMinutes(date.getMinutes() + minutes);
          return date;
        }


        function diffMinutes(dt2, dt1) {
            var diff = (dt2.getTime() - dt1.getTime()) / 1000;
            return Math.round(diff);
        }

        var time = {{ $exam->time }};
        var start_at = "{{ $exam->start_at }}";

        function getRemains()
        {
            var nowDate = new Date();
            var finishDate = addMinutes(new Date(start_at), time);
            return Math.floor(diffMinutes(finishDate, nowDate));
        }

        if (getRemains() > 0) {
            setInterval(function() {
                var remains = getRemains();

                $('#minutes').text(remains > 60 ? Math.floor(remains / 60) + ' دقیقه' : (remains + ' ثانیه'));

                if (remains <= 0) {
                    window.location.reload();
                }
            }, 1000);
        }

        var updated = true;

        function setUpdated(val) {
            updated = val;
            $('#submitBtn').attr('disabled', updated);
        }

        setUpdated(false);

        $('.answer').on('input', function() {
            setUpdated(false);
        });

        $('.answer').on('change', function() {
            var question = $(this).closest('.question');
            var question_id = question.data('id');
            var answer = $(this).val();

            $.ajax({
                url: '{{ route('panel.student.exam.answer', [$exam]) }}',
                type: 'PATCH',
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                },
                data: {
                    question_id: question_id,
                    answer: answer
                },
                success: function (response) {
                    toastr.success("پاسخ شما ثبت شد.");
                    setUpdated(true)
                },
                error: function (response) {
                    toastr.error("خطایی رخ داده است.");
                }
            });
        });

        $('#submitBtn').on('click', function(e) {
            e.preventDefault();
            // toastr.info("در حال ثبت پاسخ ها");
        })


    </script>
@endsection
