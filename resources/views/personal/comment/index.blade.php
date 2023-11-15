@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Comments') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">{{ __('Comments') }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

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
                @foreach($comments as $comment)
                    <tr>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->content }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('personal.comment.edit', $comment->id) }}"><i class="fas fa-edit fa-lg mx-2" style="color: #f4c01a"></i></a>
                                <form action="{{ route('personal.comment.destroy', $comment->id) }}" method="post">
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
@endsection
