@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Liked Posts') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">{{ __('Liked Posts') }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">

                    <div class="card-header">
                        <div class="col-4 float-sm-right">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-block btn-primary">{{ __('Add new post') }}</a>
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
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.posts.show', $post->id) }}"><i class="far fa-eye fa-lg mx-2" style="color: lightskyblue"></i></a>
                                            <form action="{{ route('personal.liked.delete', $post->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class="fas fa-trash-alt fa-lg mx-1 text-danger" role="button"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
