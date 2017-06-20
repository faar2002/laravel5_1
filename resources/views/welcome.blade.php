@extends('layout')

@section('content')
    <div class="container">
        @if(Session::has('alert'))
            <p class="alert alert-success">
                {{Session::get('alert')}}
            </p>
        @endif
        <div class="content">
            <div class="title">Laravel 5</div>
        </div>
    </div>