@extends("layouts.home")
@section("title","Journey")
@section("description")
Türkiyenin en beğenilen Gezi Sitesi
@endsection
@section("keywords","Gezi,Trekking,Dagcilik")
@section("content")
@include('home._slider')
@include('home._grids')
@include('home._stats')
@include('home._populars')
@include('home._testimonals')
@endsection