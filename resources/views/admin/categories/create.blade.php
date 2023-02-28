@extends('admin.layouts.layout')
@section('title', 'Kategoriya yaratish')
@section('content')
    <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>


                            <form method="post" action="{{ route('categories.store') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="category" placeholder="Category Name">
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </section>
@endsection
