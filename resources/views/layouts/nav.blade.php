<nav class="mt-5">
                <a class="flex items-center mt-4 py-2 px-6 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/dashboard*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.dashboard.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>

                    <span class="mx-3">Dashboard</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/formdaftar*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.formdaftar.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>

                    <span class="mx-3">Data Pendaftar</span>
                </a>


                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/category*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.category.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>

                    <span class="mx-3">Kategori</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/post*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.post.index') }}">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" /></svg>


                    <span class="mx-3">Post</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/contact*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.contact.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>

                    <span class="mx-3">Kontak</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/categoriprestasi*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.categoriprestasi.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" /></svg>


                    <span class="mx-3">Kategori Prestasi</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/prestasi*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.prestasi.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>


                    <span class="mx-3">Prestasi</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/agenda*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.agenda.index') }}">
                    <svg  class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" /></svg>


                    <span class="mx-3">Agenda</span>
                </a>
                
                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/unggulan*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.unggulan.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>

                    <span class="mx-3">Keunggulan</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/testimony*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.testimony.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 010 12.728M16.463 8.288a5.25 5.25 0 010 7.424M6.75 8.25l4.72-4.72a.75.75 0 011.28.53v15.88a.75.75 0 01-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.01 9.01 0 012.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75z" /></svg>


                    <span class="mx-3">Testimoni</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/facility*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.facility.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" /></svg>



                    <span class="mx-3">Fasilitas</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/profile*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{route('admin.profile.index')}}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>

                    <span class="mx-3">Profil Saya</span>
                </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/identity*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                href="{{route('admin.identity.index')}}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>

                <span class="mx-3">Identity</span>
            </a>

            <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/logo*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                href="{{route('admin.logo.index')}}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>

                <span class="mx-3">Logo</span>
            </a>

                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/slider*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                    href="{{ route('admin.slider.index') }}">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>

                    <span class="mx-3">Sliders</span>
                </a>
                <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/logo*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                href="/tampilabout">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>

                <span class="mx-3">About Us</span>
            </a>
            <a class="flex items-center mt-4 py-2 px-6 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 {{ Request::is('admin/logo*') ? ' bg-gray-700 bg-opacity-25 text-gray-100' :  'text-gray-500' }}"
                href="/tampilvisi">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>

                <span class="mx-3">Visi</span>
            </a>
                

            </nav>