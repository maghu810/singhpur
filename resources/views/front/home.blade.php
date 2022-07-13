@extends('master')
@section('title', 'Home Page')
@section('content')
      <!-- banner -->
      @include('front.banner')
      <!-- end banner -->
      <!-- about section -->
      @include('front.about')
      <!-- about section -->
      
      <!-- contact section -->
      @include('front.contact')
      </div>
      <!-- end contact section -->
@endsection
