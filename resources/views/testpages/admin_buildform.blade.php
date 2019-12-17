@extends('layouts/contentLayoutMaster')

@section('title', 'Number Input')

@section('mystyle')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/backend_css/plugins/forms/validation/form-validation.css')) }}">


@endsection
@section('content')




    <!-- Input Validation start -->
    <section class="input-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Inputs Validation</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ url('/admin/creat-form')  }}" method="post"  novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Table Name</label>
                                            <div class="controls">
                                                <input type="text" name="tablename" class="form-control"
                                                       data-validation-required-message="This field is required"
                                                       placeholder="Table Name">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Validation end -->



    {{ $tasks['formhrc'] }}
    {!!  $tasks['formhtml'] !!}


@endsection

@section('vendor-script')
    <!-- vednor files -->
    <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('myscript')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/backend_js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
