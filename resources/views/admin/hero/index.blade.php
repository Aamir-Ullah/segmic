@extends('admin.layout.template')
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hero Section</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.hero-section.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Hero Section</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Add Hero_Section</h6>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('admin.hero-section.store')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    {{-- <div class="form-group col-md-6">
                                        <label for="services">Services</label>
                                        <input type="text" name="services" autocomplete="off"
                                            value="{{ old('services') }}" id="services" class="form-control">
                                        @if ($errors->has('services'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('services') }}
                                        </span>
                                        @endif

                                    </div> --}}
                                    <div class="form-group col-md-6">
                                        <label for="hero_video">Video</label>
                                        <input type="file" name="video" autocomplete="off" id="hero_video"
                                            accept="video/*" value="{{ old('video') }}" class="form-control">
                                        @if ($errors->has('video'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('video') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hero Section All Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="header_table" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services</th>
                                        <th>Video</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hero_data as $hero)
                                    <tr>
                                        <td>{{$hero->id}}</td>
                                        <td>{{$hero->services}}</td>
                                        <td>
                                            <video controls height="100px" width="100px">
                                                <source src="{{ asset($hero->video) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </td>
                                        {{-- <td>{{"date"}}</td> --}}
                                        <td>{{$hero->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Services</th>
                                        <th>Video</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection