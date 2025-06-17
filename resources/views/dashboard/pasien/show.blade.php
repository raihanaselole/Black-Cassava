<x-layout>
    <x-slot name='page_content'>
        <h4 class="mb-3">Detail Pasien</h4>

        <table id="pasienTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width"></th>
                    <th class="h6 text-gray-300 text-center">No</th>
                    <th class="h6 text-gray-300 text-center">ID Pasien</th>
                    <th class="h6 text-gray-300 text-center">Nama</th>
                    <th class="h6 text-gray-300 text-center">NIK</th>
                    <th class="h6 text-gray-300 text-center">Klinik</th>
                    <th class="h6 text-gray-300 text-center">Tanggal</th>
                    <th class="h6 text-gray-300 text-center">Keluhan</th>
                    <th class="h6 text-gray-300 text-center">Nomor Antrian</th>
                    <th class="h6 text-gray-300 text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fixed-width"></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">1</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->id }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->nama }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->nik }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->klinik->nama_klinik ?? '-' }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->tanggal }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $pasien->keluhan }}</span></td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">
                            {{ $pasien->antrian->nomor ?? '-' }}
                        </span>
                    </td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">
                            {{ ucfirst($pasien->status) }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </x-slot>
</x-layout>
