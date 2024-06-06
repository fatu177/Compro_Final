@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('experience.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Kantor</label>
                    <input class="form-control" type="text" name="company_name" value=""
                        placeholder="Masukan Nama Kantor Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Posisi</label>
                    <input class="form-control" type="text" name="position" value="" style="bordered"
                        placeholder="Masukan Posisi Pekerjaan Anda">
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
