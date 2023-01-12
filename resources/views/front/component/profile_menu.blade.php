<section class="profil-menu">
    <div class="container">
        <ul id="menu-profil" class="profil-menu-ul">
            <li class="{{ (request()->is('sambutan')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/sambutan">What We Do</a>
            </li>
            <li class="{{ (request()->is('tentang-kami')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/tentang-kami">Tentang Kami</a>
            </li>
            <li class="{{ (request()->is('prestasi')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/prestasi">News</a>
            </li>
            <li class="{{ (request()->is('agenda')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/agenda">Events</a>
            </li>
            <li class="{{ (request()->is('fasilitas')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/fasilitas">Partners and Supporters</a>
            </li>
            <li class="{{ (request()->is('testimony')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/testimony">Kata Mereka</a>
            </li>
            <li class="{{ (request()->is('karir')) ? 'current-menu-item' : '' }}">
                <a href="{{route('home')}}/karir">Karir</a>
            </li>
        </ul>
    </div>
</section>