@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('Edit User') }}</h1>
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
                        <form action="{{ route('admin.users.update', $user->id) }}" method="post" class="w-25">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="{{ __('Enter new User Name') }}" value="{{ $user->name }}">
                                @error('title')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="{{ __('Enter new User Email') }}" value="{{ $user->email }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>{{ __('Choose User Role') }}</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)
                                        <option value="{{ $id }}"{{ $id == $user->role ? ' selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="{{ __('Update') }}">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
