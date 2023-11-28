<footer class="w-full static bottom-0 left-0 bg-gradient-to-r from-clr-primary-900 to-clr-secondary-700">
    <section class="flex items-center justify-between flex-col lg:flex-row px-5 text-sm">
        <div class="flex items-center space-x-5 flex-col lg:flex-row w-full">
            <div class="flex items-center">
                <img src="{{ asset('image/Profile.png') }}" class="w-28 h-28" alt="M-ONE TRAVELLA">
                <a class="text-gray-400" href="#">PT. EMONE GROUP INDONESIA</a>
            </div>
            <nav class="flex items-center space-x-4 divide-x-0 lg:divide-x-2 lg:flex-row mb-5 lg:mb-0">
                <a class="text-gray-200 hover:text-clr-secondary-500 transition-colors" href="#">Tentang kami</a>
                <a class="text-gray-200 hover:text-clr-secondary-500 pl-3 transition-colors"
                    href="{{ route('order.index') }}">Cara
                    Pesan</a>
                <a class="text-gray-200 hover:text-clr-secondary-500 pl-3 transition-colors"
                    href="kontak#vision_mission">Visi dan
                    Misi</a>
                <a target="blank" class="text-gray-200 hover:text-clr-secondary-500 pl-3 transition-colors"
                    href="{{ asset('image/legalitas.jpeg') }}">Legalitas</a>
            </nav>
        </div>
        <ul class="flex items-center gap-3">
            <li>
                <a href="https://www.instagram.com/m_one.travella/"><i
                        class="uil-instagram text-gray-200 hover:text-gray-100 text-2xl"></i></a>
            </li>
            <li>
                <a href=""> <i class="uil-facebook text-gray-200 hover:text-gray-100 text-2xl"></i></a>
            </li>
        </ul>
    </section>

</footer>
