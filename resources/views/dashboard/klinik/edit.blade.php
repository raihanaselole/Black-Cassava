<x-layout>
    <x-slot name='page_content'>
        <h4>Edit Data Klinik</h4>
        <form action="{{ route('klinik.update', $klinik->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama_klinik" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_klinik" class="form-control" value="{{ $klinik->nama_klinik }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" name="alamat" class="form-control" value="{{ $klinik->alamat }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="no_telp" class="col-sm-4 col-form-label">No Telepon</label>
                <div class="col-sm-8">
                    <input type="text" name="no_telp" class="form-control" value="{{ $klinik->no_telp }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" value="{{ $klinik->email }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('klinik.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>
