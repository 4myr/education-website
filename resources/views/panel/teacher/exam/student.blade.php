
@extends('panel.teacher.panel-layout')

@section('body')
    <form action="{{ route('panel.teacher.exam.students.check', [$exam, $student['student_id']]) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>تصحیح آزمون  <strong>«{{ $exam->title }}» دانشجو «{{ $student['student']->full_name }}»</strong></h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                        @if(!$student['answered'])
                            <p class="mb-5">دانشجو به این آزمون پاسخی ارسال نکرده است.</p>
                        @endif
                        <div class="d-flex flex-column gap-10 mt-6" id="questions">
                            @foreach($student['questions'] as $number => $question)
                                <div class="d-flex flex-column gap-2 question">
                                    <h6 class="mb-6"><i class="bi bi-question-circle me-2 fs-5 align-text-bottom"></i> <span class="question-number">{{ $number + 1 }}. {{ $question['question'] }}
                                            ({{$question['score']}} نمره)
                                        </span></h6>



                                    <div class="d-flex align-items-center gap-3 w-300px">
                                        <label class="form-label" style="min-width: 68px;">نمره:</label>
                                        <input type="number" class="form-control mb-2" step="0.25" min="0" max="{{ $question['score'] }}" value="{{$question['answer']['score'] ?? 0}}"
                                               name="answers[{{
                                        $question['answer']['id']
                                         ??
                                        null
                                        }}]">
                                    </div>


                                    @if ($question['type'] == 'choice')
                                        <h6 class="mb-3">پاسخ دانشجو:</h6>
                                        <div class="d-flex gap-4 flex-column choice-box ms-4">
                                        @for($i=1;$i<=4;$i++)
                                            <div class="d-flex align-items-center gap-3" style="min-width: 300px">
                                                <input {{ ($question['answer']['answer'] ?? '') == $question['choice' . $i] ? 'checked' : '' }} type="radio" class="answer form-switch" value="{{
                                                $question['choice' .
                                                 $i]
                                                }}" disabled
                                                       id="answer[{{
                                                $question['id'] }}]-{{ $i
                                                }}" />
                                                <label for="answer[{{ $question['id'] }}]-{{ $i }}" class="ms-2 me-4">{{ $question['choice' . $i] }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                    @else
                                        <div class="d-flex align-items-center gap-3" style="max-width: 600px">
                                            <label class="form-label" style="min-width: 68px;">پاسخ دانشجو:</label>
                                            <textarea disabled class="answer form-control mb-2" placeholder="بدون پاسخ" name="answer[{{ $question['answer']['id']
                                            }}]">{{ ($question['answer']['answer'] ?? '') }}</textarea>
                                        </div>
                                    @endif
                                </div>
                                <div class="separator my-2"></div>
                            @endforeach
                        </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">ذخیره تغییرات</span>
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
