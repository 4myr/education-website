@extends('panel.admin.panel-layout')

@section('body')
    <form action="{{ route('panel.admin.admins.update', $admin->id) }}" method="post" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
        @method('PATCH')
        @csrf

        @include('panel.admin.admins.partials.form')
    </form>
@endsection
