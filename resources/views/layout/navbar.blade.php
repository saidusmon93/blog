<header class="market-header header">

    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md  fixed-top">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="/assets/front/images/version/header-logo.png" alt="" width="200"></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    @foreach($cats as $cat)
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('categories.single',['slug' => $cat->slug]) }} ">{{$cat->title}}</a>
                    </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('about') }} ">About Us </a>
                    </li>

                </ul>
                @include('layout.btn_search')
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->