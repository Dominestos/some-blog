@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Categories') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">

                            <div class="card-header">
                                <div class="col-3 float-sm-right">
                                    <a href="{{ route('admin.categories.create') }}" class="btn btn-block btn-primary">{{ __('Add new category') }}</a>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                    <tr>
                                        <th class="col-2">ID</th>
                                        <th>{{ __('Title') }}</th>
                                        <th class="col-3">{{ __('Action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>
                                                <a href="{{ route('admin.categories.show', $category->id) }}"><i class="far fa-eye fa-lg mx-1" style="color: lightskyblue"></i></a>
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit fa-lg" style="color: #f4c01a"></i></a>
                                                <a href="#"><i class="fas fa-trash-alt fa-lg mx-1" style="color: #ff0000;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
