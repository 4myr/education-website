@php
    $exam = null;
@endphp
@extends('panel.student.panel-layout')

@section('body')
    <form action="{{ route('panel.student.exam.store', $lecture) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf

        @include('panel.student.exam.partials.form')
    </form>
@endsection
