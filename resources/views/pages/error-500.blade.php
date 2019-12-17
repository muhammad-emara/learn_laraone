@extends('layouts/fullLayoutMaster')

@section('title', 'Error 500')

@section('mystyle')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/backend_css/pages/error.css')) }}">
@endsection
@section('content')
<!-- error 500 -->
<section class="row flexbox-container">
  <div class="col-xl-7 col-md-8 col-12 d-flex justify-content-center">
    <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
      <div class="card-content">
        <div class="card-body text-center">
          <img src="{{ asset('images/backend_images/pages/500.png') }}" class="img-fluid align-self-center" alt="branding logo">
          <h1 class="font-large-2 mt-1 mb-0">Internal Server Error!</h1>
          <p class="p-3">
              We’re not quite sure what went wrong. You can go back, or try looking on our Support Center if you need a hand.
          </p>
          <a class="btn btn-primary btn-lg" href="{{ url('/admin/dashboard') }}">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- error 500 end -->
@endsection
