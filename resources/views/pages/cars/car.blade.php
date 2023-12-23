<x-app-layout title="Sewa Mobil | M-One Travella">
    <section class="min-h-screen">
        <header class=" text-center py-24 mb-10  w-full flex flex-col lg:flex-row items-center justify-evenly">
            <div class="flex flex-col mb-10 w-1/2 md:w-full lg:w-1/3">
                <h1 class="text-2xl md:text-3xl font-bold mb-5
                text-clr-smooth-black">Lengkapi Perjalanan
                    Anda dengan
                    Mobil

                    yang nyaman.
                </h1>
                <p>Kendaraan Terbaik untuk Semua Kebutuhan Anda</p>
            </div>
            <div class=" flex justify-center items-center max-w-md">
                <img src="{{ asset('image/Car/Car-Hero.png') }}" class="w-96 object-cover" alt="">
            </div>
        </header>
        <section class="flex flex-col py-5 mb-10">
            <div class="mb-10">
                <h1 class="text-2xl md:text-4xl font-bold text-clr-smooth-black text-center title-bus">Pilihan Kendaraan
                    untuk Anda
                </h1>
            </div>
            <div class="container mx-auto ">
                <div class="container mx-auto px-4 md:px-12 ">
                    <div class="sm:flex justify-center grid place-items-center flex-wrap mb-5 -mx-1 lg:-mx-4">
                        <div class="grid grid-cols-1 place-items-center gap-5 md:grid-cols-2 lg:grid-cols-3">
                            {{-- Loop disini --}}
                            <section
                                class="flex h-auto w-80 flex-col rounded-md border transition-colors hover:bg-white">
                                <img src="https://www.mtf.co.id/media/image/thumbs/kendaraan/car/20200518/car20200518-pajero20glx204x-730-530_thumb_c.png"
                                    class="h-full w-full object-cover" alt="Example bus" />
                                <article class="px-5 py-5">
                                    <h1 class="text-base font-semibold text-gray-700">Pajero Sport</h1>
                                    <h1 class="mb-3 text-xl font-bold text-gray-700">Rp. 3.300.000</h1>
                                    <div class="grid grid-cols-2 gap-5">
                                        <div>
                                            <ul>
                                                <li class="mb-5 flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M4 18v3h3v-3h10v3h3v-6H4v3m15-8h3v3h-3v-3M2 10h3v3H2v-3m15 3H7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Tempat duduk</p>
                                                        <span>6</span>
                                                    </div>
                                                </li>

                                                <li class="mb-5 flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            width="48" height="48" viewBox="0 0 48 48">
                                                            <path fill="currentColor" fill-rule="evenodd"
                                                                d="M15 9.5c0-.438 4.516-3.5 9-3.5s9 3.063 9 3.5c0 1.56-.166 2.484-.306 2.987c-.093.33-.402.513-.745.513H16.051c-.343 0-.652-.183-.745-.513C15.166 11.984 15 11.06 15 9.5Zm7.5-.5a1 1 0 1 0 0 2h3a1 1 0 0 0 0-2h-3Zm-6.462 10.218c-3.33-1.03-2.49-2.87-1.22-4.218H33.46c1.016 1.298 1.561 3.049-1.51 4.097a8 8 0 1 1-15.912.12Zm7.69.782c2.642 0 4.69-.14 6.26-.384a6 6 0 1 1-11.98.069c1.463.202 3.338.315 5.72.315Zm8.689 14.6A9.992 9.992 0 0 0 24 30a9.992 9.992 0 0 0-8.42 4.602a2.49 2.49 0 0 0-1.447-1.05l-1.932-.517a2.5 2.5 0 0 0-3.062 1.767L8.363 37.7a2.5 2.5 0 0 0 1.768 3.062l1.931.518A2.492 2.492 0 0 0 14 41.006A1 1 0 0 0 16 41v-1c0-.381.027-.756.078-1.123l5.204 1.395a3 3 0 0 0 5.436 0l5.204-1.395c.051.367.078.742.078 1.123v1a1 1 0 0 0 2 .01c.56.336 1.252.453 1.933.27l1.932-.517a2.5 2.5 0 0 0 1.768-3.062l-.777-2.898a2.5 2.5 0 0 0-3.062-1.767l-1.932.517a2.49 2.49 0 0 0-1.445 1.046Zm-15.814 2.347A8.008 8.008 0 0 1 23 32.062v4.109a3.007 3.007 0 0 0-1.88 1.987l-4.517-1.21Zm14.794 0A8.009 8.009 0 0 0 25 32.062v4.109c.904.32 1.61 1.06 1.88 1.987l4.517-1.21ZM24 40a1 1 0 1 0 0-2a1 1 0 0 0 0 2Z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Pengemudi</p>
                                                        <span>Ya</span>
                                                    </div>
                                                </li>
                                                <li class="mb-5 flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                            class="w-6 h-6" width="12"
                                                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                                            <path opacity="1" fill="#1E3050"
                                                                d="M192 512C86 512 0 426 0 320C0 228.8 130.2 57.7 166.6 11.7C172.6 4.2 181.5 0 191.1 0h1.8c9.6 0 18.5 4.2 24.5 11.7C253.8 57.7 384 228.8 384 320c0 106-86 192-192 192zM96 336c0-8.8-7.2-16-16-16s-16 7.2-16 16c0 61.9 50.1 112 112 112c8.8 0 16-7.2 16-16s-7.2-16-16-16c-44.2 0-80-35.8-80-80z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Warna</p>
                                                        <span>Putih</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="mb-5 flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            width="48" height="48" viewBox="0 0 48 48">
                                                            <g fill="none" stroke="currentColor" stroke-width="4">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M36 26V14a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h17M16 12v28m12-28v17m0-17V6a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v6" />
                                                                <path d="M35 44a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M34 32v4h4" />
                                                                <path stroke-linecap="round" d="M13 40v4" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Bagasi</p>
                                                        <span>32</span>
                                                    </div>
                                                </li>
                                                <li class="mb-5 flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            width="48" height="48" viewBox="0 0 48 48">
                                                            <g fill="none" stroke="currentColor" stroke-width="4">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M36 26V14a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2v24a2 2 0 0 0 2 2h17M16 12v28m12-28v17m0-17V6a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v6" />
                                                                <path d="M35 44a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M34 32v4h4" />
                                                                <path stroke-linecap="round" d="M13 40v4" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Transmisi</p>
                                                        <span>Diesel</span>
                                                    </div>
                                                </li>
                                                <li class="flex w-full flex-row items-center gap-2 text-xs">
                                                    <div class="rounded-md border border-gray-300 p-1">
                                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" viewBox="0 0 16 16">
                                                            <path fill="currentColor"
                                                                d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336c.383.228.634.551.794.907c.295.655.294 1.465.294 2.081V7.5a.5.5 0 0 1-.5.5H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm2.5 0a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5h-5Z" />
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <p>Bahan Bakar</p>
                                                        <span>Bensin</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class=" w-52">
                                            <button class="rounded-md bg-[#d5633c] px-2 py-3 text-white">Sewa
                                                Sekarang</button>
                                        </div>
                                    </div>
                                </article>
                            </section>



                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</x-app-layout>
