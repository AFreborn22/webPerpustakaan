<!-- navbar utama -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="ASSETS/logoperpus.svg" alt="" width="110"
                height="me-auto"></a>
        <button class="navbar-toggler btn-light" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto me-auto">
                <a class="nav-link active" aria-current="page" href="/">{{ __('home.home') }}</a>
                <a class="nav-link active" aria-current="page" href="/Sekilas">{{ __('home.glance') }}</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('home.feature') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/Fitur">{{ __('home.onlineF') }}</a></li>
                        <li><a class="dropdown-item" href="/Fasilitas">{{ __('home.offlineF') }}</a></li>
                        <li><a class="dropdown-item" href="/News">{{ __('home.news') }}</a></li>
                        <li><a class="dropdown-item" href="/InfoPMB">{{ __('home.pmb') }}</a></li>
                    </ul>
                </li>
                <a class="nav-link active" aria-current="page" href="/Bantuan">{{ __('home.help') }}</a>
                <a class="nav-link active" aria-current="page" href="/caraPenggunaan">{{ __('home.htu') }}</a>
                <a class="nav-link active" aria-current="page" href="/Kontak">{{ __('home.contact') }}</a>

                <!-- Dropdown Bahasa -->
                <form action="{{ route('change.language') }}" method="POST">
                    @csrf
                    <select name="language" onchange="this.form.submit()" class="d-inline">
                        <option value="id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>ID</option>
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                    </select>
                </form>

            </div>
            <a href="/login">

                <button type="button" class="btn btn-primary">Login</button>
            </a>
        </div>
    </div>
</nav>
