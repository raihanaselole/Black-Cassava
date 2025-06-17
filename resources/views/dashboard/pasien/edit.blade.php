<x-layout>
    <x-slot name='page_content'>
        <h4>Edit Data Pasien</h4>
        <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                <div class="col-sm-8">
                    <input type="text" name="nik" class="form-control" value="{{ $pasien->nik }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="klinik_id" class="col-sm-4 col-form-label">Klinik</label>
                <div class="col-sm-8">
                    <select name="klinik_id" class="form-control">
                        @foreach($kliniks as $klinik)
                            <option value="{{ $klinik->id }}" {{ $klinik->id == $pasien->klinik_id ? 'selected' : '' }}>
                                {{ $klinik->nama_klinik }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                    <input type="date" name="tanggal" class="form-control" value="{{ $pasien->tanggal }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="keluhan" class="col-sm-4 col-form-label">Keluhan</label>
                <div class="col-sm-8">
                    <input type="text" name="keluhan" class="form-control" value="{{ $pasien->keluhan }}">
                </div>
            </div>

            <div class="form-group row mt-3">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <select name="status" class="form-control">
                        <option value="not started" {{ $pasien->status == 'not started' ? 'selected' : '' }}>Not started</option>
                        <option value="in progress" {{ $pasien->status == 'in progress' ? 'selected' : '' }}>in progress</option>
                        <option value="completed" {{ $pasien->status == 'completed' ? 'selected' : '' }}>completed</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mt-4">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>
