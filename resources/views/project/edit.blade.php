@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('project.update', $edit->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="name" value="{{ $edit->name }}"
                                    placeholder="Masukan Nama Anda">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Deskripsi</label>
                            <div class="input-group input-group-outline my-3">
                                <textarea class="form-control" type="text" name="description">{{ $edit->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">


                        <div class="form-group mb-3">
                            <label for="tanggalMasuk">Tanggal Masuk</label>
                            <div class="input-group input-group-outline my-3">
                                <input id="tanggalMasuk" class="form-control tanggalm" type="date"
                                    max="<?= date('Y-m-d') ?>" name="start_date" value="{{ $edit->start_date }}"
                                    placeholder="Masukan Tanggal Anda Bekerja">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggalKeluar">Tanggal Keluar</label>
                            <div class="input-group input-group-outline my-3">
                                <input id="tanggalKeluar" class="form-control tanggalk" type="date" name="end_date"
                                    value="{{ $edit->end_date }}" max="<?= date('Y-m-d') ?>"
                                    placeholder="Masukan Tanggal Anda Selesai Bekerja">
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('tanggalMasuk').addEventListener('change', function() {
                        var masukDate = this.value;
                        document.getElementById('tanggalKeluar').min = masukDate;
                    });
                </script>


                <div class="form-group mb-3">

                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>

            </form>
        </div>
    </div>
@endsection
<script>
    document.getElementById('tanggalMasuk').addEventListener('change', function() {
        var masukDate = this.value;
        document.getElementById('tanggalKeluar').min = masukDate;
    });
</script>
