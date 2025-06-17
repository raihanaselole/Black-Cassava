<x-layout>
    <x-slot name='page_content'>
        <h4 class="mb-3">Detail Klinik</h4>
        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width"></th>
                    <th class="h6 text-gray-300 text-center">No</th>
                    <th class="h6 text-gray-300 text-center">ID Klinik</th>
                    <th class="h6 text-gray-300 text-center">Nama Klinik</th>
                    <th class="h6 text-gray-300 text-center">Alamat</th>
                    <th class="h6 text-gray-300 text-center">Nomor Telepon</th>
                    <th class="h6 text-gray-300 text-center">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fixed-width"></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">1</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->id }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->nama_klinik }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->alamat }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->no_telp }}</span></td>
                    <td class="text-center align-middle"><span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->email }}</span></td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ url('dashboard/klinik') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </x-slot>
</x-layout>
