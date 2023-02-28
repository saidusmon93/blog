@extends('admin.layouts.layout')

@section('title', 'Postni o\'zgartirish')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Posts</h1>
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
                        <h3 class="card-title">Edit Post</h3>
                    </div>


                    <form method="post" action="{{ route('posts.update',['post'=> $post->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="5">{{$post->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="content" rows="7">{{$post->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach($categories as $k => $v)
                                    <option value="{{$k}}" @if($k==$post->category_id )
                                        selected
                                        @endif> {{ $v }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select name="tags[]" id="tags" class="select2" multiple="multiple" data-placeholder="Select tag" style="width: 100%;">
                                    @foreach($tags as $k => $v)
                                    <option value="{{$k}}" @if(in_array($k, $post->tags->pluck('id') ->all()) )
                                        selected
                                        @endif
                                        >{{$v}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="thumbnail" id="thumbanil" class="custom-file-input">
                                        <label for="thumbnail" class="custom-file-label"> Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img src="{{$post->getImage()}}" class="img-thumbnail" width="200">
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