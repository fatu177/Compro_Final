@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('skill.update', $edit->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Skill</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="name" value="{{ $edit->name }}"
                                    placeholder="Masukan Nama Skill Anda">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Level</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="level" value="{{ $edit->level }}"
                                    placeholder="Masukan Level Skill Anda">
                            </div>
                        </div>
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
