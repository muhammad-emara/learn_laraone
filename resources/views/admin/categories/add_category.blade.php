@extends('layouts/contentLayoutMaster')


@section('title', 'Admin-Add-Category')

@section('mystyle')
    {{-- Page Css files --}}

    <link rel="stylesheet" href="{{ asset(mix('css/backend_css/plugins/forms/validation/form-validation.css')) }}">
@endsection

@section('content')

    <!-- Basic Vertical form layout section start -->
    <section class="input-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4 class="card-title">CATEGORIES Details</h4></div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ url('/admin/add-category')  }}" method="post"  novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><label>PARENT ID</label>
                                            <div class="controls"><input type="text" name="parent_id"
                                                                         class="form-control"
                                                                         data-validation-required-message="This field is required"
                                                                         value="{{ old('parent_id') }}"
                                                                         placeholder="parent id"></div>
                                        </div>
                                        <div class="form-group"><label>NAME</label>
                                            <div class="controls"><input type="text" name="name" class="form-control"
                                                                         data-validation-required-message="This field is required"
                                                                         value="{{ old('name') }}"
                                                                         placeholder="name"></div>
                                        </div>
                                        <div class="form-group"><label>DESCRIPTION</label>
                                            <div class="controls"><input type="text" name="description"
                                                                         class="form-control"
                                                                         data-validation-required-message="This field is required"
                                                                         value="{{ old('description') }}"
                                                                         placeholder="description"></div>
                                        </div>
                                        <div class="form-group"><label>URL</label>
                                            <div class="controls"><input type="text" name="url" class="form-control"
                                                                         data-validation-required-message="This field is required"
                                                                         value="{{ old('url') }}"
                                                                         placeholder="url"></div>
                                        </div>
                                        <div class="form-group"><label>STATUS</label>
                                            <div class="controls"><input type="text" name="status" class="form-control"
                                                                         data-validation-required-message="This field is required"
                                                                         value="{{ old('status') }}"
                                                                         placeholder="status"></div>
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
    <!-- // Basic Vertical form layout section end -->

@endsection

@section('vendor-script')
    <!-- vednor files -->
    <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
@endsection
@section('myscript')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/backend_js/scripts/forms/validation/form-validation.js')) }}"></script>
@endsection
