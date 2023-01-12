<div class="pendaftaran_menu mt-20 mb-20">
    <h5>PENDAFTARAN</h5>
    <ul class="pendaftaran_menu_list">
        <li class="{{ (request()->is('pendaftaran')) ? 'active' : '' }}"><a href="{{route('home')}}/pendaftaran">PPDB 2023/24</a></li>
        <hr>
        <li class="{{ (request()->is('prosedur')) ? 'active' : '' }}"><a href="{{route('home')}}/prosedur">Prosedur Pendaftaran</a></li>
        <hr>
        <li class="{{ (request()->is('investasi')) ? 'active' : '' }}"><a href="{{route('home')}}/investasi">Investasi Pendidikan</a></li>
        <hr>
        <li class="{{ (request()->is('tanggal-penting')) ? 'active' : '' }}"><a href="{{route('home')}}/tanggal-penting">Tanggal Penting</a></li>
        <hr>
        <li class="{{ (request()->is('beasiswa')) ? 'active' : '' }}"><a href="{{route('home')}}/beasiswa">Informasi Beasiswa</a></li>
        <hr>
        <li class="{{ (request()->is('faq')) ? 'active' : '' }}"><a href="{{route('home')}}/faq">FAQ</a></li>
    </ul>
</div>