@extends('admin.layouts.layout')

@section('title', 'Postlar Royhati')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Posts</h1>

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
                            <h3 class="card-title">Posts List</h3>
                            <div class="card-tools">
                                <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
                            </div>
                        </div>
                       
                        @if(count($posts))
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Tag</th>
                                        <th>Date</th>
                                        <th>Edit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                 
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->category->title}}</td>
                                        <td>{{$post->tags->pluck('title')->join(', ')}}</td>
                                        <td>{{$post->created_at}}</td>
                                        
                                        <td style="width: 100px;">
                                            <a href="{{ route('posts.edit',['post' => $post->id]) }}" class="btn btn-info btn-sm float-left">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <form
                                                action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                                method="post" class="float-right">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Confirm deletion')">
                                                    <i
                                                        class="fas fa-trash-alt"></i>
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
                                Posts sheet empty...
                            </p>
                        @endif

                        <div class="card-footer clearfix">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection

