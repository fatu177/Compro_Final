@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('experience.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Kantor</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="company_name" value="}"
                                    placeholder="Masukan Nama Kantor Anda">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Posisi</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="position" value="" style="bordered"
                                    placeholder="Masukan Posisi Pekerjaan Anda">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <div class="input-group input-group-outline my-3">
                                <textarea class="form-control" type="text" name="description" placeholder="Masukan Deskripsi Pekerjaan Anda"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <label for="tanggalMasuk">Tanggal Masuk</label>
                                <div class="input-group input-group-outline my-3">
                                    <input id="tanggalMasuk" class="form-control tanggalm" type="date" name="start_date"
                                        max="<?= date('Y-m-d') ?>" value="">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggalKeluar">Tanggal Keluar</label>
                                <div class="input-group input-group-outline my-3">
                                    <input id="tanggalKeluar" class="form-control tanggalk" type="date" name="end_date"
                                        value="" max="<?= date('Y-m-d') ?>">
                                </div>
                            </div>
                        </div>
                    </div>
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
