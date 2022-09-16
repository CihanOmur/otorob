@extends('Admin.layouts.app')

@section('wrapper')
{{ auth()->user() }}
@endsection
