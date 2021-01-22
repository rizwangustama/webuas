@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Events</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Events</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Events</h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        {{-- Input harus ditambah name, value harus sama dengan yang ada di data base --}}
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                         {{-- Input harus ditambah name, value harus sama dengan yang ada di data base --}}
                        <label for="tanggal">Article</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal"
                            placeholder="Enter Article">

                    </div>

                    <div class="form-group">
                        {{-- Input harus ditambah name, value harus sama dengan yang ada di data base --}}
                       <label for="file">Gambar</label>
                       <input type="file" name="image" class="form-control" id="file"
                           placeholder="Enter Article">
                   </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection
