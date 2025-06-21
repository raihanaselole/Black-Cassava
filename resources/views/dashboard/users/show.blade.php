<x-layout>
    <x-slot name="page_content">
        <div class="container" style="min-height: calc(100vh - 150px); display: flex; align-items: center; justify-content: center;">
            <div class="row align-items-center w-100">
                <!-- Gambar -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('admin/images/6.svg') }}" alt="User Image" 
                        class="img-fluid rounded-circle shadow-lg" 
                        style="width: 200px; height: 200px; object-fit: cover;">
                </div>

                <!-- Data -->
                <div class="col-md-8">
                    <div class="card shadow-lg p-4">
                        <h5 class="card-title mb-30 mt-20 text-center">Detail Pengguna</h5>
                         @php
                            $gender = $user->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan';
                            $tanggal_lahir = \Carbon\Carbon::parse($user->tanggal_lahir)->format('d/m/Y');
                        @endphp

                        <!-- Nama -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Nama:  </strong>{{ $user->name }}</span>
                        </div>
                        <!-- Nama -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">NIK:  </strong>{{ $user->nik }}</span>
                        </div>
                        <!-- Nama -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Jenis Kelamin:  </strong>{{ $gender }}</span>
                        </div>
                        <!-- Nama -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Nomor Telepon:  </strong>{{ $user->no_telp }}</span>
                        </div>
                        <!-- Nama -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Tanggal Lahir:  </strong>{{ $tanggal_lahir }}</span>
                        </div>
                        
                        
                        <!-- Email -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Email:  </strong>{{ $user->email }}</span>
                        </div>
                        
                        <!-- Role -->
                        <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                            <span><strong class="text-secondary">Role:  </strong>{{ $user->role }}</span>
                        </div>

                        <!-- Tombol Kembali -->
                        <div class="text-center mt-4 mb-10">
                            <a href="{{ url('dashboard/users') }}" class="btn btn-primary">Kembali</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-delete">
                                    <i class="far fa-trash-alt"></i> Hapus
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   
    </x-slot>
</x-layout>
