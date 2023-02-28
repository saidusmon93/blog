@extends('admin.layouts.layout')

@section('title', 'Taglar  Ro\'yhati')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tags</h1>

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
                        <h3 class="card-title">Tags List</h3>
                        <div class="card-tools">
                            <a href="{{route('tags.create')}}" class="btn btn-primary">Add Tag</a>
                        </div>
                    </div>
                    @if(count($tags))
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
                                    @foreach($tags as $tag)
                                    <tr>
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td>{{$tag->slug}}</td>
                                        <td style="width: 100px;">
                                            <a href="{{ route('tags.edit',['tag' => $tag->id]) }}" class="btn btn-info btn-sm float-left">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <form action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="post" class="float-right">
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
                        Tags sheet empty...
                    </p>
                    @endif

                    <div class="card-footer clearfix">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection