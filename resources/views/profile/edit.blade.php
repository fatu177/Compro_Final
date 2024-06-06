@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('profile.update', $edit->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="name" value="{{ $edit->name }}"
                        placeholder="Masukan Nama Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ $edit->email }}" style="bordered"
                        placeholder="Masukan Email Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Birthday</label>
                    <input class="form-control" type="date" name="birthday" value="{{ $edit->birthday }}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" type="text" name="description" placeholder="Masukan Deskripsi Diri Anda">{{ $edit->description }} </textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea class="form-control" type="text" name="address" placeholder="Masukan Alamat Anda">{{ $edit->address }} </textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="">No HP</label>
                    <input value="{{ $edit->phone }}" class="form-control" type="text" name="phone"
                        placeholder="Masukan No HP Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Github</label>
                    <input value="{{ $edit->github }}" class="form-control" type="text" name="github"
                        placeholder="Masukan Github Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">LinkedIn</label>
                    <input value="{{ $edit->linkedin }}" class="form-control" type="text" name="linkedin"
                        placeholder="Masukan LinkedIn Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">twitter</label>
                    <input value="{{ $edit->twitter }}" class="form-control" type="text" name="twitter"
                        placeholder="Masukan twitter Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Facebook</label>
                    <input value="{{ $edit->facebook }}" class="form-control" type="text" name="facebook"
                        placeholder="Masukan Facebook Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Instagram</label>
                    <input value="{{ $edit->instagram }}" class="form-control" type="text" name="instagram"
                        placeholder="Masukan Instagram Anda">
                </div>



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
