@extends('layouts.datatables')

@section('table_header')
    {{ __('Users Table') }}
@endsection

@section('table_id')
    '#users-table'
@endsection

@section('table_route')
    "{{ route('dashboard.users.index') }}"
@endsection

@section('table_columns')
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'name', name: 'name'},
    {data: 'email', name: 'email'},
    {data: 'nationalId', name: 'nationalId'},
    {data: 'gym_name', name: 'gym_name'},
@endsection