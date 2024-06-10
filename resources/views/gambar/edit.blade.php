@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('gambar.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                        <div class="form-group mb-3">
                            <label for="">Project</label>
                            <div class="input-group input-group-outline my-3">
                                <select name="id_project" class="form-control" style="border-radius: 20px;">
                                    <option selected value="{{ $edit->id_project }}">Pilih Project</option>
                                    @foreach ($datas as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Gambar</label>
                            <div class="input-group input-group-outline my-3">
                                <input type="file" name="image" class="form-control" id="imageInput">
                            </div>
                            <br>
                            <img id="imagePreview" src="{{ asset('images/' . $edit->image) }}" class="img-preview"
                                width="200px" />
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                    </div>
            </form>
        </div>
    </div>
@endsection
