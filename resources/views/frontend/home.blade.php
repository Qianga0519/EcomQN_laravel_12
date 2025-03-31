@extends('frontend.layouts.app')

@section('title', 'Trang chủ - ShopName')
@section('content')
    <!-- Hero start -->
    @include('frontend.components.home.hero')
    <!-- Hero end -->
    <!-- Category start -->
    @include('frontend.components.home.category')
    <!-- Category end -->
    <!-- Flash sale start -->
    @include('frontend.components.home.flash-sale')
    <!-- Flash sale  end -->
    <!-- Product start -->
    @include('frontend.components.home.product')
    <!-- Product end -->
@endsection
