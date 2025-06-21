<x-layout>
    <x-slot name='page_content'>

        <form action="{{ route('pasien.store') }}" method="POST">
            @csrf
            <input type="hidden" name="source" value="admin">
            
            <div class="form-group row">
                <label for="klinik_id" class="col-sm-4 col-form-label">Pilih Klinik</label>
                <div class="col-sm-8">
                    <select name="klinik_id" id="klinik_id" class="form-control" required>
                        @foreach($kliniks as $klinik)
                            <option value="{{ $klinik->id }}">{{ $klinik->nama_klinik }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pasien</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pasien" required>
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nik" name="nik" maxlength="16" placeholder="Masukkan NIK Pasien" required>
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal Kunjungan</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}" required>
                </div>
            </div>

            <div class="form-group row mt-15">
                <label for="keluhan" class="col-sm-4 col-form-label">Keluhan</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="keluhan" name="keluhan" placeholder="Masukkan Keluhan Pasien" required></textarea>
                </div>
            </div>

            <div class="form-group row mt-15">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>

        </form>

    </x-slot>
</x-layout>
