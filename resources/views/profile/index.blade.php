@extends('layout.app')

@section('content')
    @php
        $i = 0;
    @endphp
    @foreach ($datas as $data)
        @php
            $i++;
        @endphp
    @endforeach
    @if ($i == 0)
        <div class="m-3" align="right">
            <a class="btn bg-gradient-dark mb-0" href="{{ route('profile.create') }}"><i
                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah
                Profile</a>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Profile</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="" align="center">

                        <img src="{{ asset('images/' . $data->first()->image) }}" class="align-content-center m-3"
                            alt="" width="200px">
                    </div>
                    <div class="table-responsive p-5">

                        <table class="table table-responsive align-items-center justify-content-center mb-0">

                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Tanggal Lahir</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No HP</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Alamat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Github</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        LinkedIn</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Twitter</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Facebook</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Instagram</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Deskripsi</th>

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
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1"> {{ $data->email }} </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1"> {{ $data->birthday }} </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->phone }}
                                            </p>
                                        </td>

                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->address }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->github }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->linkedin }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->twitter }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->facebook }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center">
                                                {{ $data->instagram }}
                                            </p>
                                        </td>
                                        <td style=" max-width: 30vw;">
                                            <p class="text-sm font-weight-bold mb-0 ps-1 text-center"
                                                style="word-wrap: break-word;  white-space: normal;">
                                                {{ $data->description }}
                                            </p>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('profile.edit', $data->id) }}"
                                                    class="btn btn-primary btn-sm me-1">Edit</a>
                                                <form action="{{ route('profile.destroy', $data->id) }}" method="post"
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
