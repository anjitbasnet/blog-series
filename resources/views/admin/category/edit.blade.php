@extends('layouts.backend.app')

@section('title','Category')

@push('css')
     <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush
@section('content')
        <div class="container-fluid">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT CATEGORY
                            </h2>
                            
                        </div>
                        <div class="body">
                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label">Category Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" id="name" class="form-control"  value="{{ $category->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image">
                                </div>
                                <br>
                                <a href="{{ route('admin.category.index') }}" class="btn btn-danger m-t-15 waves-effect" >CANCEL</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
           
        </div>
@endsection

@push('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>

@endpush