<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">
    <nav class="block w-full max-w-screen-lg px-4 py-2 mx-auto bg-white shadow-md rounded-md lg:px-8 lg:py-3 mt-4">
        <div class="container flex flex-wrap items-center justify-between mx-auto text-slate-800">
            <div class="flex items-center flex-1 justify-start">
                <div class="relative mr-3">
                      <button id="btn-menu" type="button" class="p-2 rounded-md text-slate-800 hover:bg-slate-100 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                    </button>
                <div id="menu-kiri" class="hidden absolute left-0 mt-2 w-44 bg-white border border-slate-200 rounded-md shadow-lg py-1 z-50">
                    <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Akun</a>
                    <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Pengaturan</a>
                </div>
                </div>
                    <a href="#" class="block cursor-pointer py-1.5 text-base text-slate-800 font-semibold">
                    Raihan Store
                    </a>
                </div>
                <div class="items-center justify-center hidden gap-x-2 lg:flex">
                    <div class="w-full max-w-sm min-w-[240px]">
                        <div class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        <input type="text" class="w-full pl-10 pr-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-600 text-sm border border-slate-200 rounded-md transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Type here..." />
                        </div>
                    </div>
                    <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    Search
                    </button>
                </div>
            <div class="flex items-center justify-end flex-1 gap-x-6">
                <div class="relative">
                      <button id="btn-kategori" type="button" class="flex items-center gap-x-1 p-1 text-sm text-slate-600 hover:text-slate-900 focus:outline-none">
                            <span>Kategori Produk</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m19 9-7 7-7-7" />
                            </svg>
                    </button>
                        <div id="menu-kategori" class="hidden absolute right-0 mt-2 w-48 bg-white border border-slate-200 rounded-md shadow-lg py-1 z-50">
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Elektronik</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Fashion</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Aksesoris</a>
                        <a href="#" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100">Semua Produk</a>
                    </div>
                </div>
                <a href="#" class="p-1 text-sm text-slate-600 hover:text-slate-900">
                    Keranjang
                </a>
              </div>
        </div>
    </nav>
    
    <script>
        const btnMenu = document.getElementById('btn-menu');
        const menuKiri = document.getElementById('menu-kiri');
        const btnKategori = document.getElementById('btn-kategori');
        const menuKategori = document.getElementById('menu-kategori');

        btnMenu.addEventListener('click', function () {
            menuKiri.classList.toggle('hidden');
            menuKategori.classList.add('hidden');
        });

        btnKategori.addEventListener('click', function () {
            menuKategori.classList.toggle('hidden');
            menuKiri.classList.add('hidden');
        });

        window.addEventListener('click', function (e) {
            if (!btnMenu.contains(e.target) && !menuKiri.contains(e.target)) {
                menuKiri.classList.add('hidden');
            }
            if (!btnKategori.contains(e.target) && !menuKategori.contains(e.target)) {
                menuKategori.classList.add('hidden');
            }
        });
    </script>
</body>
</html>