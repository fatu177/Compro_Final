@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-6 col-md-6">

                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="name" value=""
                                    placeholder="Masukan Nama Anda">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="email" name="email" value="" style="bordered"
                                    placeholder="Masukan Email Anda">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Profesi</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="text" name="profession" value="" style="bordered"
                                    placeholder="Masukan Profesi Anda">
                            </div>
                        </div>
                        <div class="form-group mb-3">

                            <label for="">Birthday</label>
                            <div class="input-group input-group-outline my-3">
                                <input class="form-control" type="date" name="birthday" max="<?= date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="form-group
                                    mb-3">
                            <label for="">Gambar</label>
                            <div class="input-group input-group-outline my-3">
                                <input type="file" name="image" class="form-control" id="imageInput"
                                    value=">
                                <br>

                            </div>
                            <img id="imagePreview"
                                    src="{{ asset('images/' . $edit->image) }}" class="img-preview" width="200px" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-3">
                                <label for="">No HP</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="phone"
                                        placeholder="Masukan No HP Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Github</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="github"
                                        placeholder="Masukan Github Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">LinkedIn</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="linkedin"
                                        placeholder="Masukan LinkedIn Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">twitter</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="twitter"
                                        placeholder="Masukan twitter Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Facebook</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="facebook"
                                        placeholder="Masukan Facebook Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Instagram</label>
                                <div class="input-group input-group-outline my-3">
                                    <input value="" class="form-control" type="text" name="instagram"
                                        placeholder="Masukan Instagram Anda">
                                </div>
                            </div>
                            <div class="form-group mb-3">

                                <label for="">Deskripsi</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" type="text" name="description" placeholder="Masukan Deskripsi Diri Anda">} </textarea>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Alamat</label>
                                <div class="input-group input-group-outline my-3">
                                    <textarea class="form-control" type="text" name="address" placeholder="Masukan Alamat Anda">} </textarea>
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
