<x-app-layout title="Paket Wisata Bandung | M-One Travella">
    <section class="min-h-screen">
        <section class="h-1/2 flex justify-center flex-col bg-white">
            <div class="py-36 flex items-center justify-center  bg-clr-primary-500">
                <div class="p-5 md:w-1/2 flex  justify-start flex-col  gap-5">
                    <h1 class=" text-4xl md:text-5xl text-clr-smooth-white font-bold pt-2">

                    </h1>
                    <p class="text-clr-smooth-white text-sm">Tak terasa, keajaiban Bandung menanti untuk
                        dijelajahi!
                        Nikmati pesona alamnya yang memukau, cicipi kuliner khasnya yang lezat, dan rasakan
                        hangatnya
                        sapaan
                        ramah penduduk lokal. Ayo, jadikan momen-momen tak terlupakan di Bandung sebagai bagian dari
                        petualangan seru kita bersama!
                    </p>
                </div>

            </div>
            <section class="container mx-auto">
                <div class="container mx-auto px-4 md:px-12">
                    <div class="mb-10 mt-10">
                        <h1 class="text-2xl font-semibold text-clr-smooth-black text-center">Pilihan Paket
                            Liburan
                            ke
                            Bandung
                            Bersama Emone Travella</h1>
                        <p class="text-sm text-slate-400 text-center">Jangan tunggu terlalu lama, segera tentukan
                            paket
                            tour
                            yang telah
                            kami rangkum dan sesuaikan
                            dengan jadwal liburan Anda.</p>
                    </div>
                    <div class="-mx-1 mb-5 grid flex-wrap place-items-center justify-center gap-5 sm:flex lg:-mx-4">
                        <!-- Column -->

                        @foreach ($packages as $package)
                            <div class="my-1 w-72 px-1 md:w-72 lg:my-4 lg:w-72 lg:px-4">
                                <div class="relative left-0 top-0 w-72 overflow-hidden rounded-2xl">
                                    <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->package_name }}"
                                        class="h-[350px]  rounded-xl object-cover transition-all backdrop-filter backdrop-grayscale" />

                                    <div
                                        class="absolute left-0 top-0 h-full w-full p-5 bg-gradient-to-t from-slate-900">
                                        <div class="flex h-full flex-col justify-between text-slate-50">
                                            <div>
                                                <h2 class="font-bold">Start From:</h2>
                                                <p>@currency($package->price) </p>
                                            </div>
                                            <ul class="list-disc px-3 font-bold">
                                                <li>{{ $package->desc }}</li>
                                            </ul>
                                            <div class="flex flex-col gap-3">
                                                <h1 class="text-2xl">{{ $package->package_name }}</h1>
                                                <a href="{{ route('tour.pangandaran.detail') }}"
                                                    class="bg-[#d5633c] transform-translate-button flex w-full items-center justify-between rounded-md text-white text-sm ">
                                                    Lihat Detail
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
                        @endforeach
                        <!-- END Column -->
                    </div>
                </div>
            </section>
        </section>
    </section>

</x-app-layout>
