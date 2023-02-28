@extends('layout.layout')
@section('title', 'LifeStyleBlog')
@section('header')
<div class="container-fluid m-4 p-0">

</div>
@endsection
@section('content')
<div class="page-wrapper">
    <div class="blog-custom-build">
        @foreach($posts as $post)
        <div class="blog-box wow fadeIn">
            @if(!empty($post->thumbnail))
            <div class="post-media">
                <a href="{{ route('posts.single', ['slug' =>$post->slug]) }}" title="">
                    <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                    <div class="hovereffect">
                        <span></span>
                    </div>

                </a>
            </div>
            @endif
            <div class="blog-meta big-meta text-center">
                <h4><a href="{{ route('posts.single', ['slug' =>$post->slug]) }}" title="">{{ $post->title }}</a></h4>
                {!! $post->description !!}
                <small><a href="{{ route('categories.single', ['slug' =>$post->category->slug]) }}" title="">{{ $post->category->title }}</a></small>
                <small> {{$post->getPostDate() }} </small>
                <small><i class="fa fa-eye"></i> {{ $post->views }}</small>
            </div>
        </div>

        <hr class="invis">
        @endforeach
    </div>
</div>

<hr class="invis">

<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation">
            {{ $posts->links() }}
        </nav>
    </div>
</div>
@endsection