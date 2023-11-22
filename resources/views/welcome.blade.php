@extends('layouts.app')

@section('content')
<div>
<div class="container">
        <x-head-img></x-head-img>
</div>
    <br>
    <x-market/>
<div class="container">
        <x-categore/>
</div>

{{-- <div class="mt-4">
    <!-- Facebook -->
    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-facebook-f"></i></a>
    <!-- Dribbble -->
    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-dribbble"></i></a>
    <!-- Twitter -->
    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-twitter"></i></a>
    <!-- Google + -->
    <a type="button" class="btn btn-floating btn-primary btn-lg"><i class="fab fa-google-plus-g"></i></a>
    <!-- Linkedin -->
</div> --}}
</div>
@endsection
