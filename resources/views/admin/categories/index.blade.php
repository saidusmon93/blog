@extends('admin.layouts.layout')

@section('title', 'Kategoriyalar ro\'yhati')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories</h1>

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Simple Tables</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories List</h3>
                        <div class="card-tools">
                            <a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>
                        </div>
                    </div>
                    @if(count($categories))
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td style="width: 100px;">
                                            <a href="{{ route('categories.edit',['category' => $category->id]) }}" class="btn btn-info btn-sm float-left">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post" class="float-right">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm deletion')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @else
                    <p class="p-2">
                        Categories sheet empty...
                    </p>
                    @endif

                    <div class="card-footer clearfix">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection