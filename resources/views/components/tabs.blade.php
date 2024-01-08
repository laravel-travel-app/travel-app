<div x-data="{ openTab: 1 }">
    <ul class="flex border-b">
        <li @click="openTab = 1" :class="{ 'border-l': openTab === 1 }" class="-mb-px mr-1">
            <a href="#" class="inline-block py-2 px-4 font-semibold"
                :class="{ 'border-b-2 border-blue-500': openTab === 1 }">Tab 1</a>
        </li>
        <li @click="openTab = 2" :class="{ 'border-l': openTab === 2 }" class="mr-1">
            <a href="#" class="inline-block py-2 px-4 font-semibold"
                :class="{ 'border-b-2 border-blue-500': openTab === 2 }">Tab 2</a>
        </li>
        <!-- Tambahkan lebih banyak tab jika diperlukan -->
    </ul>

    <div x-show="openTab === 1" class="p-4">Konten Tab 1</div>
    <div x-show="openTab === 2" class="p-4">Konten Tab 2</div>
    <!-- Tambahkan lebih banyak konten tab sesuai dengan jumlah tab -->
</div>
