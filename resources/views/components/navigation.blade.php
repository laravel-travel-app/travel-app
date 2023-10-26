<nav class="fixed bg-white z-10 shadow-sm w-full">
    <div class="container mx-auto px-5 py-0 lg:py-2 ">
        <div class="flex flex-col items-start lg:items-center lg:flex-row justify-between">
            <div class="flex justify-between w-full lg:w-auto py-3 lg:mb-0">
                <div>
                    <img class="object-contain h-8" src="{{ asset('image/logo.png') }}" alt="M-ONE TRAVELLA">
                </div>
                <div class="block lg:hidden">
                    <button class="burger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <ul id="navs"
                class="hidden transition lg:flex w-full flex-col items-start divide-x-2 justify-center lg:items-center lg:flex-row space-x-0 lg:space-x-5 space-y-5 lg:space-y-0 mb-4 lg:mb-0 ">
                <li>
                    <a href="#paket-wisata"
                        class="text-base pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                        Paket Wisata
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-base pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                        Rental Mobil
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="text-base pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                        Sewa Bus Pariwisata
                    </a>
                </li>
            </ul>
            <div id="contact" class="hidden lg:block w-full lg:w-auto">
                <button
                    class="border mb-4 lg:mb-0 w-full border-clr-primary-500 px-5 py-2 text-clr-primary-500 rounded-md lg:rounded-full hover:bg-clr-primary-500  hover:text-gray-50 transition-colors">Kontak</button>
            </div>
        </div>
    </div>

</nav>
