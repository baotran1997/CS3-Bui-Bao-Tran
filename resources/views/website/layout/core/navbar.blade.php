
<div class="container-fluid navbar-custom">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <div class="d-flex flex-column">
            <div class="navbar-brand-container">

                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <img src="{{ asset('image/logo/logo-cs3-white.png') }}" alt="">

                </a>
                <button class="navbar-toggler hidden-border" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto" id="navbar-text">

                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('home.showBookByCategory', 1) }}">Romance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.showBookByCategory', 4) }}">Computing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.showBookByCategory', 6) }}">Children's Books </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.showBookByCategory', 3) }}">Crime & Thriller </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.showBookByCategory', 2) }}">Fiction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.showBookByCategory', 5) }}">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.showCart') }}"><i class="fas fa-shopping-cart"></i>
                            <span class="cart-icon">({{session('cart') ? session('cart')->totalQty : 0 }})</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
