@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="">Gambar</label>
                <input type="file" name="image" class="form-control" id="imageInput">
                <br>
                <img id="imagePreview" class="img-preview" width="200px"/>
            </div>
            <div class="form-group mb-3">
                <label for="">Nama</label>
                <input class="form-control" type="text" name="name" value="" placeholder="Masukan Nama Anda">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input class="form-control" type="email" name="email" value="" style="bordered"
                    placeholder="Masukan Email Anda">
            </div>
            <div class="form-group mb-3">
                <label for="">Birthday</label>
                <input class="form-control" type="date" name="birthday" value="">
            </div>
            <div class="form-group mb-3">
                <label for="">Deskripsi</label>
                <textarea class="form-control" type="text" name="description"
                    placeholder="Masukan Deskripsi Pekerjaan Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">address</label>
                <textarea class="form-control" type="text" name="address"
                    placeholder="Masukan address Pekerjaan Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">No HP</label>
                <textarea class="form-control" type="text" name="phone" placeholder="Masukan No HP Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Github</label>
                <textarea class="form-control" type="text" name="github" placeholder="Masukan Github Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">LinkedIn</label>
                <textarea class="form-control" type="text" name="linkedin"
                    placeholder="Masukan LinkedIn Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">twitter</label>
                <textarea class="form-control" type="text" name="twitter"
                    placeholder="Masukan twitter Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Facebook</label>
                <textarea class="form-control" type="text" name="facebook"
                    placeholder="Masukan Facebook Anda"> </textarea>
            </div>
            <div class="form-group mb-3">
                <label for="">Instagram</label>
                <textarea class="form-control" type="text" name="instagram"
                    placeholder="Masukan Instagram Anda"> </textarea>
            </div>




            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
