@php
    $exam = null;
@endphp
@extends('panel.teacher.panel-layout')

@section('body')
    <form action="{{ route('panel.teacher.exam.store', $lecture) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf

        @include('panel.teacher.exam.partials.form')
    </form>
@endsection
