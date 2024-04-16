@extends('front.master')
@section('thired' ,' About us')

@section('seconed' , 'About')

@section('hero')
@include('front.partilas.hero')@endsection
@section('about-active' , 'active')
@section('title' , 'About')

@section('about')
@include('front.partilas.about')
@include('front.partilas.feature')
@include('front.partilas.team')

@endsection


