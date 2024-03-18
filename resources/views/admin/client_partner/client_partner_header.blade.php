@extends('admin.layout.template')
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client Partner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('client_partner_header')}}">Home</a></li>
                        <li class="breadcrumb-item active">Client Partner</li>
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
                            <h6 class="m-0 font-weight-bold text-primary">Add Client_Partner Header</h6>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('client_partner_header.store')}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" autocomplete="off"
                                            value="{{ old('title') }}" id="title" class="form-control">
                                        @if ($errors->has('title'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('title') }}
                                        </span>
                                        @endif

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subtitle">SubTitle</label>
                                        <input type="text" name="subtitle" autocomplete="off" id="subtitle"
                                         value="{{ old('subtitle') }}" class="form-control">
                                        @if ($errors->has('subtitle'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('subtitle') }}
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
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($client_headers as $client_header) 
                                    <tr>
                                        <td>{{$client_header->id}}</td>
                                        <td>{{$client_header->title}}</td>
                                        <td>{{$client_header->subtitle}}</td>
                                         <td>{{$client_header->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('client_partner_header.edit',['id'=>$client_header['id']])}}" class="btn btn-primary">Edit</a>
                                            <a href="{{route('client_partner_header.delete',['id'=>$client_header['id']])}}" class="btn btn-danger">Delete</a>
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