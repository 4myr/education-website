@php
    $lectureStudent = null;
@endphp
@extends('panel.admin.panel-layout')

@section('body')
    <form action="{{ route('panel.admin.lecture-students.store', $lecture->id) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf

        @include('panel.admin.lecture-students.partials.form')
    </form>
@endsection
