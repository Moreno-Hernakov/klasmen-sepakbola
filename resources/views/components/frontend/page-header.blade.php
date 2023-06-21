<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="display-3 mb-4 animated slideInDown">{{ ucfirst(Route::current()->getName()) }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb mb-0">
                @foreach ($navbars as $navbar)
                    <li class="breadcrumb-item">
                        <a href="{{ route($navbar->route) }}">{{ $navbar->name }}</a>
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>

<!-- Page Header End -->
