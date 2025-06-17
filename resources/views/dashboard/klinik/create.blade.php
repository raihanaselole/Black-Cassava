<x-layout>
    <x-slot name='page_content'>

        <form action="{{ route('klinik.store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama_klinik" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama_klinik" name="nama_klinik" placeholder="Masukkan Nama Klinik">
                </div>
            </div>
            
            <div class="form-group row mt-15">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon Klinik">
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
            </div>

            <div class="form-group row mt-15">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>

    </x-slot>
</x-layout>
