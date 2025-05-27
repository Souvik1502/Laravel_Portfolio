@extends('layouts.master')

@section('title', 'Web Developer Portfolio')

@section('content')
    @include('partials.navigation')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.skills')
    @include('partials.projects')
    @include('partials.contact')
    @include('partials.footer')
@endsection