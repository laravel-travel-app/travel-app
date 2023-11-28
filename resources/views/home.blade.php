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
                    class="text-sm bg-clr-secondary-500 text-clr-smooth-white rounded-full transform-translate-button">
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
                <div class="sm:flex justify-center grid place-items-center flex-wrap mb-5 -mx-1 lg:-mx-4">

                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/pw-bandung.jpeg') }}">
                            </a>

                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/pw-jogja.jpeg') }}">
                            </a>

                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/pw-karimun.jpeg') }}">
                            </a>

                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/pw-pangandaran.jpeg') }}">
                            </a>

                        </article>
                        <!-- END Article -->
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
            <div class="container  mx-auto px-4 md:px-12 ">
                <div class="sm:flex justify-center grid place-items-center flex-wrap mb-5 -mx-1 lg:-mx-4">
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-tb.jpeg') }}">
                            </a>
                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-tlb.jpeg') }}">
                            </a>
                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-fo.jpeg') }}">
                            </a>

                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-tbs-1.jpeg') }}">
                            </a>
                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-rp-1.jpeg') }}">
                            </a>
                        </article>
                        <!-- END Article -->
                    </div>
                    <!-- END Column -->
                    <!-- Column -->
                    <div class="my-1 px-1 w-72 md:w-72 lg:my-4 lg:px-4 lg:w-72">
                        <!-- Article -->
                        <article class="overflow-hidden rounded-lg shadow-lg">
                            <a href="#">
                                <img alt="Placeholder" class="block h-auto w-72"
                                    src="{{ asset('image/paket-info/paket-rp-2.jpeg') }}">
                            </a>
                        </article>
                        <!-- END Article -->
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
