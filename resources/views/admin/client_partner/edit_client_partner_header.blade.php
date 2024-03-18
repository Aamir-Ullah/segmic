@extends('admin.layout.template')
@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Client Partner Header</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('client_partner_header')}}">Home</a></li>
                        <li class="breadcrumb-item active">Client Partner Header</li>
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
                            <h6 class="m-0 font-weight-bold text-primary">Update Client_Partner Header</h6>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('client_partner_header.update',['id'=>$client_header['id']])}}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex">
                                    <div class="form-group col-md-6">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" autocomplete="off"
                                            value="{{$client_header->title}}" id="title" class="form-control">
                                        @if ($errors->has('title'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('title') }}
                                        </span>
                                        @endif

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subtitle">SubTitle</label>
                                        <input type="text" name="subtitle" autocomplete="off" id="subtitle"
                                         value="{{$client_header->subtitle}}" class="form-control">
                                        @if ($errors->has('subtitle'))
                                        <span class="text-danger mt-0">*
                                            {{ $errors->first('subtitle') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection