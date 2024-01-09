<x-app-layout title="M-ONE Travella">
    <header class="flex h-1/2 py-48 w-full justify-center flex-col lg:flex-row space-x-0 md:space-x-10 items-center">

        <section class="grid place-items-center lg:place-items-start">
            <img class="object-fill drop-shadow-lg w-1/2 md:w-full" src="{{ asset('image/hero.png') }}"
                alt="Latar belakang">
        </section>
        <section class="flex flex-col p-5">
            <h1 class="text-3xl md:text-5xl font-bold mb-5 text-clr-smooth-black">Temukan Tempat <span
                    class="text-clr-primary-500">Liburan</span> <br /> <span class="text-clr-primary-500">Impian
                </span>Anda
            </h1>
            <p class="text-clr-smooth-black text-base leading-tight mb-5">
                Temukan tempat wisata secara langsung, mudah, cepat pengalaman perjalanan <br> <span class="font-bold">
                    M-One Travella </span> dapat
                mengubah
                perjalanan yang tak terlupakan
            </p>
            <div class="flex items-center">
                <a href="#paket-wisata"
                    class="text-sm custom-shadow-secondary bg-clr-secondary-500 text-clr-smooth-white rounded-full transform-translate-button">
                    <span>Jelajahi Sekarang!</span>
                    <span class="transform-translate-button-icon">></span>
                </a>
            </div>
        </section>
    </header>
    <section id="paket-wisata" class="h-1/2  flex justify-center flex-col bg-white pb-5">
        <div class="py-24">
            <h1 class="text-center text-xl md:text-2xl text-clr-smooth-black font-bold pt-2">Mau jalan-jalan kemana?
            </h1>
            <p class="text-center text-gray-400 text-sm">Berikut tempat yang hampir banyak dikunjungi wisatawan</p>
        </div>
        <section class="container mx-auto">
            <div class="container  mx-auto px-4 md:px-12 ">
                <div class="sm:flex justify-center gap-5 grid place-items-center flex-wrap mb-5 -mx-1 lg:-mx-4">
                    {{-- Looping disini --}}
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <div class="relative left-0 top-0 w-72 rounded-2xl overflow-hidden">
                            <img src="https://elshinta.com/asset/upload/article/2023/september/8628_ELSHINTADOTCOM_20230925_gesat-2.jpg"
                                alt="Bandung" class="h-[350px] rounded-xl object-cover" />
                            <div
                                class="absolute bottom-0 left-0 py-5 px-5 bg-gradient-to-t from-slate-700 to-transparent w-full">
                                <h2 class="text-xl text-white font-bold mb-2">Paket wisata Bandung</h2>
                                <a href="{{ route('tour.bandung') }}"
                                    class="bg-[#d5633c] transform-translate-button flex w-32 items-center justify-between rounded-md text-white text-sm py-2 px-3">
                                    Lihat paket
                                    <span class="transform-translate-button-icon"><svg class="w-4 h-4"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END Column -->
                </div>
            </div>
        </section>
    </section>
    <section class="h-1/2 py-48 flex justify-center flex-col bg-white">
        <div class="py-24">
            <h1 class="text-center text-xl md:text-2xl text-clr-smooth-black font-bold pt-2">Destinasi wisata pilihan
            </h1>
            <p class="text-center text-gray-400 text-sm">Berikut destinasi yang hampir banyak dikunjungi wisatawan</p>
        </div>
        <section class="container mx-auto">
            <div class="container mx-auto px-4 md:px-12">
                <div class="-mx-1 mb-5 grid flex-wrap place-items-center justify-center gap-5 sm:flex lg:-mx-4">
                    <!-- Column -->

                    {{-- Loop disini --}}
                    <div class="my-1 w-72 px-1 md:w-72 lg:my-4 lg:w-72 lg:px-4">
                        <div class="relative left-0 top-0 w-72 overflow-hidden rounded-2xl">
                            <a href="/asds"> <img
                                    src="https://elshinta.com/asset/upload/article/2023/september/8628_ELSHINTADOTCOM_20230925_gesat-2.jpg"
                                    alt="Bandung" class="h-[350px] rounded-xl object-cover transition-all" /></a>

                            <div class="absolute left-0 top-0 h-full w-full p-5 bg-gradient-to-t from-slate-700">
                                <div class="flex h-full flex-col justify-between text-slate-50">
                                    <div>
                                        <h2 class="font-bold">Start From:</h2>
                                        <p>Rp.2.500.000</p>
                                    </div>
                                    <ul class="list-disc px-3 font-bold">
                                        <li>Keliling bandung</li>
                                        <li>Bandros</li>
                                        <li>Dago</li>
                                        <li>Tahura</li>
                                        <li>DLL</li>
                                    </ul>
                                    <div class="flex flex-col gap-3">
                                        <h1 class="text-2xl">Paket 1 Hari (1D Tour)</h1>
                                        <a href="https://wa.link/4ti0bp"
                                            class="bg-[#d5633c] transform-translate-button flex w-full items-center justify-between rounded-md text-white text-sm ">
                                            Booking sekarang
                                            <span class="transform-translate-button-icon"><svg class="w-4 h-4"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Column -->
                </div>
            </div>
        </section>
    </section>
    <section id="paket-wisata" class="h-1/2 py-24 container mx-auto flex flex-col lg:flex-row items-center gap-20">
        <section class="w-full lg:w-1/2 flex items-center justify-center">
            <img src="{{ asset('image/Profile.png') }}" class="w-96" alt="Logo M-One Travella">
        </section>
        <article class="flex flex-col w-full lg:w-1/2 p-3 bg-white rounded-md shadow-md">
            {{-- <div class="">
                <h2 class="text-3xl font-bold text-gray-600">Ketentuan Sewa :</h2>
                <ul class="list-disc p-4">
                    <li>Harga Termasuk : BBM, Supir</li>
                    <li>Harga Tidak Termasuk : Tip, Makan Crew, Tol Parkir, Tiket Obyek Wisata</li>
                    <li>Harga Berlaku Untuk Penjemputan Bandung Kota</li>
                    <li>Catatan : Pemakaian / penggunaan paling awal di hari pertama mulai dari jam 01.00 dini hari dan
                        untuk kepulangan, bus beserta rombongan harus sudah tiba kembali di tempat penjemputan awal
                        maksimal
                        jam 23.00 malam.</li>
                </ul>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-600">Cara Pemesanan Dan Pembayaran :</h2>
                <ul class="list-disc p-4">
                    <li>Anda dapat menghubungi kami melalui Telp, Sms, Whatsapp di nomor yang sudah tertera di website.
                    </li>
                    <li>Informasikan dengan jelas kepada kami mengenai detail penjemputan, tujuan, tanggal dan type bus
                        yang
                        diinginkan untuk mengkonfirmasi harga sewa.</li>
                    <li>Pemesanaan sewa kendaraan akan dikatakan deal jika sudah melakukan DP sebesar 25% dari total
                        sewa.
                    </li>
                    <li>Pelunasan dilakukan maksimal di H-3 ( 3 hari sebelum
                        keberangkatan).</li>
                    <li>Kontak driver akan kami informasikan di H-1 ( 1 hari sebelum keberangkatan).</li>
                </ul>
            </div> --}}
            <div>
                <header class="bg-clr-primary-500 py-2 p-3 rounded-md w-auto">
                    <h2 class="text-white text-xl font-semibold">Ketentuan Sewa :</h2>
                </header>
                <div>
                    <ul class="list-disc p-6">
                        <li>Harga Termasuk : BBM, Supir</li>
                        <li>Harga Tidak Termasuk : Tip, Makan Crew, Tol Parkir, Tiket Obyek Wisata</li>
                        <li>Harga Berlaku Untuk Penjemputan Bandung Kota</li>
                        <li>Catatan : Pemakaian / penggunaan paling awal di hari pertama mulai dari jam 01.00 dini hari
                            dan
                            untuk kepulangan, bus beserta rombongan harus sudah tiba kembali di tempat penjemputan awal
                            maksimal
                            jam 23.00 malam.</li>
                    </ul>
                </div>
            </div>
            <div>
                <header class="bg-clr-primary-500 py-2 p-3 rounded-md w-auto">
                    <h2 class="text-white text-xl font-semibold">Cara Pemesanan & Pembayaran</h2>
                </header>
                <div>
                    <ul class="list-disc p-6">
                        <li>Anda dapat menghubungi kami melalui Telp, Sms, Whatsapp di nomor yang sudah tertera di
                            website.
                        </li>
                        <li>Informasikan dengan jelas kepada kami mengenai detail penjemputan, tujuan, tanggal dan type
                            bus
                            yang
                            diinginkan untuk mengkonfirmasi harga sewa.</li>
                        <li>Pemesanaan sewa kendaraan akan dikatakan deal jika sudah melakukan DP sebesar 25% dari total
                            sewa.
                        </li>
                        <li>Pelunasan dilakukan maksimal di H-3 ( 3 hari sebelum
                            keberangkatan).</li>
                        <li>Kontak driver akan kami informasikan di H-1 ( 1 hari sebelum keberangkatan).</li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
</x-app-layout>
