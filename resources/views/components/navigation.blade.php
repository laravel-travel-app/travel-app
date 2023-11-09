<nav class="bg-white w-full h-auto shadow-sm z-50">
    <div class="container mx-auto px-7 py-0 lg:py-2">
        <div class="flex flex-col items-start lg:items-center lg:flex-row justify-between">
            <div class="flex justify-between w-full lg:w-auto py-3 lg:mb-0">
                <div>
                    <a href="{{ route('home.index') }}">
                        <img class="object-contain h-8" src="{{ asset('image/logo.png') }}" alt="M-ONE TRAVELLA">
                    </a>
                </div>
                <div class="block lg:hidden">
                    <button class="burger" onclick="toggleMenu()"></button>
                </div>
            </div>
            <ul id="navs"
                class="hidden transition lg:flex w-full flex-col items-start divide-x-0 lg:divide-x-2 justify-center lg:items-center lg:flex-row space-x-0 lg:space-x-5 space-y-5 lg:space-y-0 mb-4 lg:mb-0 ">
                <li>
                    <a href="{{ route('home.index') }}"
                        class="text-base pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                        Paket Wisata
                    </a>
                </li>
                <li>
                    <a href="{{ route('car.index') }}"
                        class="text-base pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                        Rental Mobil (City Tour)
                    </a>
                </li>
                <li>
                    <div class="bus-dropdown" id="bus-dropdown">
                        <button id="bus-dropdown-button"
                            class="text-base pl-0 lg:pl-3 block text-gray-600 hover:text-clr-primary-500 transition-colors">
                            <span>Bus Pariwisata</span>
                            <i id="icon" class="uil-angle-down text-xl"></i>
                        </button>
                        <div class="menu">
                            <a href="{{ route('bus.index') }}">
                                <button
                                    class="hover:bg-clr-secondary-600 w-full hover:text-clr-smooth-white transition-colors">
                                    Armada
                                </button>
                            </a>

                            <a href="{{ route('bus.price') }}">
                                <button
                                    class="hover:bg-clr-secondary-600 w-full hover:text-clr-smooth-white transition-colors">
                                    Daftar Harga
                                </button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
            <div id="contact" class="hidden lg:block w-full lg:w-auto">
                <a class="border mb-4 lg:mb-0 w-full border-clr-primary-500 px-5 py-2 text-clr-primary-500 rounded-md lg:rounded-full hover:bg-clr-primary-500  hover:text-gray-50 transition-colors"
                    href="{{ route('contact.index') }}">Kontak
                </a>
            </div>
        </div>
    </div>

</nav>
