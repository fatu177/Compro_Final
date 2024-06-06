@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('education.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Sekolah</label>
                    <input class="form-control" type="text" name="school_name" value=""
                        placeholder="Masukan Nama Sekolah Anda">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label" for="">Pendidikan</label>
                    <div class="input-group input-group-outline my-3">
                        <input class="form-control" type="text" name="degree" value=""
                            placeholder="Masukan Pendidikan Terakhir Anda">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input class="form-control" type="text" name="field_of_study" value=""
                        placeholder="Masukan Jurusan Terakhir Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" type="text" name="description" placeholder="Masukan Deskripsi Pekerjaan Anda"> </textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="tanggalMasuk">Tanggal Masuk</label>
                    <input id="tanggalMasuk" class="form-control tanggalm" type="date" name="start_date"
                        max="<?= date('Y-m-d') ?>" value="">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggalKeluar">Tanggal Keluar</label>
                    <input id="tanggalKeluar" class="form-control tanggalk" type="date" name="end_date" value=""
                        max="<?= date('Y-m-d') ?>">
                </div>

                <script>
                    document.getElementById('tanggalMasuk').addEventListener('change', function() {
                        var masukDate = this.value;
                        document.getElementById('tanggalKeluar').min = masukDate;
                    });

                    document.getElementById('tanggalKeluar').addEventListener('change', function() {
                        var KeluarDate = this.value;
                        document.getElementById('tanggalMasuk').max = KeluarDate;
                    })
                </script>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
