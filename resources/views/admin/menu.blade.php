<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('news.index') }}">
                    <span data-feather="home"></span>
                    Главный сайт
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <span data-feather="file"></span>
                    Админка
                </a>
            </li>


        </ul>
    </div>
</nav>
