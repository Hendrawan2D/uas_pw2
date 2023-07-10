@extends('layouts.dashboard')

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Alternatif</h4>
                  <p class="card-description">
                    Menampilkan Semua Data Alternatif
                  </p>
                  <a class="btn btn-success btn-rounded btn-fw" href="{{ url ('/alternatif/tambah') }}"> Tambah Alternatif</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Alternatif
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Harga
                          </th>
                          <th>
                            Kualitas
                          </th>
                          <th>
                            Kemasan
                          </th>
                          <th>
                            Daya Tahan
                          </th>
                          <th>
                            Kemudahan Pengiriman
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($alternatif as  $name_column)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $name_column->nama }}</td>
                                        <td>{{ $name_column->deskripsi }}</td>
                                        <td>{{ $name_column->harga }}</td>
                                        <td>{{ $name_column->kualitas }}</td>
                                        <td>{{ $name_column->kemasan }}</td>
                                        <td>{{ $name_column->daya_tahan }}</td>
                                        <td>{{ $name_column->kemudahan_pengiriman }}</td>

                                        <td>
                                            @csrf
                                                 <a href="/alternatif/{{$name_column->id}}/edit" data-tip="edit" type="button" class="btn btn-outline-warning btn-sm">Edit</a>
                                                 <a href="/alternatif/{{$name_column->id}}/delete"  type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
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
        </div>

@endsection
