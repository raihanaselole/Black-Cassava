<x-layout>
    <x-slot name="page_content">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <a href="{{ url('dashboard/klinik/create') }}" class="btn btn-primary mb-15">+ Tambah Klinik</a>

        <table id="studentTable" class="table table-striped">
            <thead>
                <tr>
                    <th class="fixed-width"></th>
                    <th class="h6 text-gray-300 text-center">Nama Klinik</th>
                    <th class="h6 text-gray-300 text-center">Alamat</th>
                    <th class="h6 text-gray-300 text-center">Nomor Telepon</th>
                    <th class="h6 text-gray-300 text-center">Email</th>
                    <th class="h6 text-gray-300 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kliniks as $klinik)
                <tr>
                    <td class="fixed-width"></td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->nama_klinik }}</span>
                    </td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->alamat }}</span>
                    </td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->no_telp }}</span>
                    </td>
                    <td class="text-center align-middle">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $klinik->email }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <a href="{{ route('klinik.show', $klinik->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ route('klinik.edit', $klinik->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                        <form action="{{ route('klinik.destroy', $klinik->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </x-slot>
</x-layout>
