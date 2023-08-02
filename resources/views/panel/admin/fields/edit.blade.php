@extends('panel.admin.panel-layout')

@section('body')
    <form action="{{ route('panel.admin.fields.update', $field->id) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @method('PATCH')
        @csrf

        @include('panel.admin.fields.partials.form')
    </form>
@endsection
