@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Investor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Investor</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title ">List Investor</h3>
                            <a href="{{ route('investor.create') }}" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">File</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $no => $item)
                                            <tr>
                                                <th scope="row">{{$no+1}}</th>
                                                <td>{{$item->title}}</td>
                                                <td>
                                                    {{-- <embed src="{{Storage::url($item->file)}}" alt="image"
                                                    style="width: 150px; height: 150px" class="img-thumbnail"> --}}
                                                    {{-- <iframe src="{{Storage::url('assets/img/', $item->file)}}" frameborder="0"></iframe> --}}
                                                    {{-- <object data="{{Storage::url($item->file)}}" type="application/pdf" style="width: 100px; height:100px"></object>
                                                     --}}
                                                    @foreach ($items as $a)
                                                        <embed src="{{Storage::url(['assets/img/', $a->pdf])}}" type="application/pdf" width="100%" height="600px" />
                                                    @endforeach
                                                     
                                                    {{-- <embed type="application/pdf" src="{{Storage::url('assets/img/', $item->file)}}" width="600" height="400"></embed> --}}
                                                </td>
                                                <td>
                                                    <div class="text-right">
                                                        <a href="{{ route('investor.edit', $item->id) }}"
                                                            class="btn btn-warning">
                                                            <i class="fas fa-edit fa-sm text-white-60"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a
                                                            onclick="return confirm('Yakin untuk menghapus investor {{$item->title}}? ')">
                                                            <form action="{{ route('investor.destroy', $item->id) }}"
                                                                method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger">
                                                                    <i class="fas fa-fw fa-trash"></i>
                                                                    <span>Hapus</span>
                                                                </button>
                                                            </form>
                                                    </div>
                                                </td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="4">Data kosong</td>
                                            </tr>
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection
