<x-layout>
    <x-slot name="page_content">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-primary mb-3">+ Tambah Pasien</a>

        <table class="table table-striped mt-15">
            <thead>
                <tr>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Klinik</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Keluhan</th>
                    <th class="text-center">Nomor Antrian</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasiens as $pasien)
                    <tr>
                        <td class="text-center align-middle text-dark">{{ $pasien->nama }}</td>
                        <td class="text-center align-middle text-dark">{{ $pasien->klinik->nama_klinik ?? '-' }}</td>
                        <td class="text-center align-middle text-dark">{{ $pasien->tanggal }}</td>
                        <td class="text-center align-middle text-dark">{{ $pasien->keluhan }}</td>

                        <td class="text-center align-middle">
                            <span class="badge bg-info text-white">{{ $pasien->antrian->nomor ?? 'Belum Ada' }}</span>
                        </td>
                        <td class="text-center align-middle">
                            @php
                                $statusClass = match($pasien->status) {
                                    'not started' => 'secondary',
                                    'in progress' => 'warning',
                                    'completed' => 'success',
                                    default => 'dark'
                                };
                            @endphp
                            <span class="badge bg-{{ $statusClass }}">{{ ucfirst($pasien->status) }}</span>
                        </td>
                        <td class="text-center align-middle">
                            <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                            <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </x-slot>
</x-layout>
