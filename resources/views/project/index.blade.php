@extends('layout.app')
@section('content')
    <div class="m-3" align="right">
        <a class="btn bg-gradient-dark mb-0" href="{{ route('project.create') }}"><i
                class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah
            Project</a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Project</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-5">
                        <table class="table align-items-center justify-content-center mb-0" id="example"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama</th>


                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Deskripsi</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Tanggal Mulai</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Tanggal Selesai</th>

                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <span hidden>{{ $i = 1 }}</span>
                                @foreach ($datas as $data)
                                    <tr>

                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 text-center">{{ $i++ }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1"> {{ $data->name }} </p>
                                        </td>
                                        <td style=" max-width: 30vw;">
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center"
                                                style="word-wrap: break-word;  white-space: normal;">
                                                {{ $data->description }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->start_date }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->end_date }}
                                            </p>
                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('project.edit', $data->id) }}"
                                                    class="btn btn-primary btn-sm me-1">Edit</a>
                                                <form action="{{ route('project.destroy', $data->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-3" align="right">
        <a class="btn bg-gradient-dark mb-0" href="{{ route('gambar.create') }}"><i
                class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah
            Gambar</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">gambar</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-5">
                        <table class="table align-items-center justify-content-center mb-0" id="example1" name="example">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Project</th>


                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Image</th>


                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <span hidden>{{ $i = 1 }}</span>
                                @foreach ($image as $gambar)
                                    <tr>

                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 text-center">{{ $i++ }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1">
                                                {{ $gambar->project->name }} </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                <img src="{{ asset('images/' . $gambar->image) }}" alt=""
                                                    width="50px">
                                            </p>
                                        </td>


                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('gambar.edit', $gambar->id) }}"
                                                    class="btn btn-primary btn-sm me-1">Edit</a>
                                                <form action="{{ route('gambar.destroy', $gambar->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                                </form>

                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
