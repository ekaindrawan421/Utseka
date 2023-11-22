<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="50" height="42">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Web Film</span>
    </a>

    <ul class="nav nav-pills">
        @php
            $menu = [
            ['url' => '/',               'name' => 'Home'], 
            ['url' => 'anggota',       'name' => 'Anggota'], 
            ['url' => 'film',              'name' => 'Film']];
        @endphp

        @foreach ($menu as $m)
            @include('layout.nav-item', ['menu' => $m])
        @endforeach
    </ul>
</header>


