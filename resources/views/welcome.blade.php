@extends('templates.simple')
@section('body')
    <x-centred-page title="hello a great user">
        hello {{\Illuminate\Support\Facades\Auth::user()->name}}
    </x-centred-page>
@endsection
