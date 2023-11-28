<x-app-layout title="Cara Pesan | M-ONE Travella">
    <div class="min-h-screen">
        <div class="h-1/2 flex flex-col">
            <div class="bg-textured">
                <h2 class="text-center text-gray-600 p-16 text-3xl font-semibold">Cara pemesanan</h2>
            </div>
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center gap-16 mt-20">
                <img src="{{ asset('svg/undraw_join_re_w1lh.svg') }}" class="w-72 h-72" alt="How to order">
                <p class="w-80 one relative">Pendaftaran dilakukan melalui form register akan dikirim via Google Form</p>
            </div>
        </div>
        <div class="h-1/2">
            <div class="container mx-auto flex flex-col lg:flex-row-reverse items-center justify-center gap-16 mt-20">
                <img src="{{ asset('svg/undraw_online_organizer_re_156n.svg') }}" class="w-80 h-80" alt="How to order">
                <p class="w-80 two relative">Booking fee sebesar 50% dari harga trip
                </p>
            </div>
        </div>
        <div class="h-1/2">
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center gap-16 mt-20">
                <img src="{{ asset('svg/undraw_trip_re_f724.svg') }}" class="w-72 h-80" alt="How to order">
                <p class="w-80 three relative">Pembayaran pelunasan paling lambat <br /> H-3 sebelum tanggal
                    keberangkatan
                </p>
            </div>
        </div>
        <div class="h-1/2">
            <div class="container mx-auto flex flex-col lg:flex-row-reverse items-center justify-center gap-16 mt-20">
                <img src="{{ asset('svg/undraw_online_payments_re_y8f2.svg') }}" class="w-80 h-80" alt="How to order">
                <p class="w-80 four relative">Konfirmasi pembayaran dikirim ke nomor resmi kami /admin.oficer kami di.
                    <b>083821440125 </b> via WhatsApp
                </p>
            </div>
        </div>
        <div class="h-1/2">
            <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center gap-16 mt-20 mb-16">
                <img src="{{ asset('svg/undraw_join_re_w1lh.svg') }}" class="w-72 h-72" alt="How to order">
                <div class="w-96 five relative flex flex-col space-y-2">
                    <p class="mb-3">Pembayaran dilakukan melalui transfer ke Rekening Berikut :</p>
                    <span class="border-l-4 border-blue-500 p-2 shadow-md "><i>BCA</i> <b>283-161-2527</b> A.N Dadan
                        syaripudin</span>
                    <span class="border-l-4 border-blue-700 p-2 shadow-md "><i>BRI</i> <b>0354-01-104948-50-9</b> A.N
                        Dadan
                        syaripudin</span>
                    <p>BCA blue /Digital Yang Sudah Kami Save Di highlight Instagram.
                        Selain rekening Di atas kami tidak bertanggung jawab jika ada hal yang tidak di inginkan. Harap
                        selalu hati-hati dan teliti terus berkordinasi dengan Admin oficer kami Terimakasih</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
