@extends('layouts/contentLayoutMaster')


@section('title', 'Admin-Change-Password')

@section('mystyle')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/backend_css/pages/authentication.css')) }}">

    <link rel="stylesheet" href="{{ asset(mix('css/backend_css/plugins/forms/validation/form-validation.css')) }}">
@endsection
@section('content')
    <section class="row flexbox-container">
        <div class="col-xl-8 col-10 d-flex justify-content-center">
            <div class="card bg-authentication rounded-0 mb-0">
                <div class="row m-0">
                    <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                        <img src="{{ asset('images/backend_images/pages/register.jpg') }}" alt="branding logo">
                    </div>
                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2 pb-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Change Your Password</h4>
                                </div>
                            </div>
                            <form action="{{ url('/admin/change-password')  }}" method="post">
                                @csrf
                                <div class="card-content">

                                    <div class="card-title">
                                    @if (Session::has('flash_massage_error'))



                                        <div class="chip chip-danger mr-1">
                                            <div class="chip-body">
                                            <span class="chip-text alert-validation-msg">


                                        <span>Error <strong> {!!   session('flash_massage_error') !!}</strong> Please Retry</span>

                                            </span>
                                                <div class="chip-closeable">
                                                    <i class="feather icon-x"></i>
                                                </div>
                                            </div>
                                        </div>


                                    @endif
                                    @if (Session::has('flash_massage_success'))
                                        <div class="card chip-success mr-1">
                                            <div class="chip-body">
                                                <div class="avatar">
                                                    <i class="feather icon-battery"></i>
                                                </div>
                                                <span
                                                    class="chip-text"> {!!   session('flash_massage_success') !!}</span>
                                            </div>
                                        </div>

                                    @endif
                                    </div>
                                    <div class="card-body pt-0">


                                        <div class="form-label-group">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="password" name="currpass" id="currpass"
                                                           class="form-control" placeholder="Your Current  Password"
                                                           required
                                                           data-validation-required-message="The Current password field is required"
                                                           value="{{ old('currpass') }}"
                                                    >

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-label-group">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="password" name="password" id="inputPassword"
                                                           class="form-control" placeholder="Your Password" required
                                                           data-validation-required-message="The password field is required"
                                                           minlength="6"

                                                           value="{{ old('password') }}"

                                                    >

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-label-group">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <input type="password" name="con-password" class="form-control"
                                                           placeholder="Confirm Password" required
                                                           data-validation-match-match="password"
                                                           data-validation-required-message="The Confirm password field is required"
                                                           minlength="6"
                                                           value="{{ old('con-password') }}"

                                                    >
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary float-right btn-inline mb-50">
                                            Change
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection


@section('vendor-script')
    <!-- vednor files -->
    <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('myscript')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/backend_js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection

