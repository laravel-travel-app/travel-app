<x-app-layout title="Daftar Harga Sewa Bus Pariwisata | M-One Travella">
    <section class="min-h-screen">
        <header class=" h-auto text-center py-24 mb-10  w-full flex flex-col lg:flex-row items-center justify-evenly">
            <div class="flex flex-col mb-10 w-1/2 md:w-full lg:w-1/3">
                <h1 class="text-2xl md:text-3xl font-bold mb-5
                text-clr-smooth-black">Nikmati Perjalanan
                    anda dengan Bus Pariwisata
                </h1>
                <p>Kendaraan Terbaik untuk Semua Kebutuhan Anda</p>
            </div>
            <div class=" flex justify-center items-center max-w-md">
                <img src="{{ asset('image/bus/Bus-Hero.png') }}" class="w-96 object-cover" alt="">
            </div>
        </header>
        <section class="flex flex-col py-5 mb-10">
            <div class="mb-10">
                <h1 class="text-2xl md:text-4xl font-bold text-clr-smooth-black text-center title-bus">Berikut Harga
                    Sewa Bus Pariwisata
                </h1>
            </div>
            <div class="container mx-auto ">
                <div class="container mx-auto px-4 md:px-12 ">


                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-xs text-clr-smooth-white uppercase">
                                <tr>
                                    <th scope="col" class="px-6 py-3 bg-clr-primary-500 dark:bg-gray-800">
                                        Jenis Kendaaran
                                    </th>
                                    <th scope="col" class="px-6  bg-clr-primary-500 py-3">
                                        Kapasitas
                                    </th>
                                    <th scope="col" class="px-6 py-3  bg-clr-primary-500 dark:bg-gray-800">
                                        Harga sewa perhari
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        TOYOTA HIACE
                                    </th>
                                    <td class="px-6 py-4">
                                        14
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        1.600.000
                                    </td>

                                </tr>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        ELF LONG
                                    </th>
                                    <td class="px-6 py-4">
                                        31-25
                                    </td>
                                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                        1.700.000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
    </section>

</x-app-layout>
