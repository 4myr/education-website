@php
    $news = null;
@endphp
@extends('panel.admin.panel-layout')

@section('body')
    <form action="{{ route('panel.admin.news.store') }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @csrf

        @include('panel.admin.news.partials.form')
    </form>
@endsection
