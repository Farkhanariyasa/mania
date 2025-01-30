<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <!-- Left: Title -->
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Aset TI</h1>
            </div>
        </div>
        <div class="overflow-x-auto bg-white dark:bg-gray-900 shadow-lg rounded-lg p-4">
            <table class="table-auto w-full border-collapse rounded-lg overflow-hidden" id="aset">
                <!-- Table header -->
                <!-- <thead class="text-xs font-semibold uppercase text-gray-600 dark:text-gray-300 bg-gray-100 dark:bg-gray-800"> -->
                <thead>
                    <tr>
                        <th class="p-3 text-left">Nama Aset</th>
                        <th class="p-3 text-left">Merek</th>
                        <th class="p-3 text-left">Tipe</th>
                        <th class="p-3 text-left">Jenis</th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($asetTI as $aset_ti)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-150">
                        <td class="p-3">{{ $aset_ti->nama }}</td>
                        <td class="p-3">{{ $aset_ti->merek }}</td>
                        <td class="p-3">{{ $aset_ti->tipe }}</td>
                        <td class="p-3">{{ $aset_ti->jenis }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let table = new DataTable('#aset');
    </script>
</x-app-layout>