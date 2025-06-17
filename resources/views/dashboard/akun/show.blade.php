<x-layout>
    <x-slot name="page_content">
        <div class="container" style="min-height: calc(100vh - 150px); display: flex; align-items: center; justify-content: center;">
    <div class="row align-items-center w-100">
        <!-- Gambar -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('admin/images/logo.png') }}" alt="User Image" 
                 class="img-fluid rounded-circle shadow-lg" 
                 style="width: 200px; height: 200px; object-fit: cover;">
        </div>

        <!-- Data -->
        <div class="col-md-8">
            <div class="card shadow-lg p-4">
                <h5 class="card-title mb-30 mt-20 text-center">Detail Pengguna</h5>
                
                {{-- <!-- Nama -->
                <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                    <span><strong class="text-secondary">Nama:  </strong>{{ $users->name }}</span>
                </div>
                
                <!-- Email -->
                <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                    <span><strong class="text-secondary">Email:  </strong>{{ $users->email }}</span>
                </div>
                
                <!-- Role -->
                <div class="card m-20 border border-gray-200 shadow-sm p-15 rounded">
                    <span><strong class="text-secondary">Role:  </strong>{{ $users->role }}</span>
                </div>

                <!-- Tombol Kembali -->
                <div class="text-center mt-4 mb-10">
                    <a href="{{ url('/users') }}" class="btn btn-primary">Kembali</a>
                    <form action="{{ url('users/destroy', $users->id) }}" method="POST" class="d-inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-delete">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                </div> --}}
            </div>
        </div>
    </div>
</div>
    </x-slot>
</x-layout>
