@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Add User') }}</h1>
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
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.users.store') }}" method="post" class="w-25">
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="{{ __('Enter User Name') }}" value="{{ old('name') }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="{{ __('Enter User Email') }}" value="{{ old('email') }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Choose User Role') }}</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}"{{ $id == old('role') ? ' selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="{{ __('Add') }}">
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
