@extends('layouts.dashboard')

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Kriteria</h4>
                  <p class="card-description">
                    Menampilkan Semua Data Kriteriap
                  </p>
                  <a class="btn btn-success btn-rounded btn-fw" href="{{ url ('/kriteria/tambah') }}"> Tambah Kriteria</a>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Nama Kriteria
                          </th>
                          <th>
                            Bobot
                          </th>
                          <th>
                            Label
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($kriteria as  $name_column)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $name_column->nama }}</td>
                                        <td>{{ $name_column->bobot }}</td>
                                        <td>{{ $name_column->label }}</td>

                                        <td>
                                            @csrf
                                            {{-- <ul class="action-list"> --}}
                                                {{-- <li><a href="/kriteria/{{$name_column->id}}/edit" data-tip="edit"><i class="fa fa-edit"></i></a></li>
                                                <form action="/kriteria/{{$name_column->id}}/delete" method="post">
                                                    @method('delete')
                                                <li><a href="/kriteria/{{$name_column->id}}/delete" data-tip="delete"><i class="fa fa-trash"></i></a></li> --}}

                                                 <a href="/kriteria/{{$name_column->id}}/edit" data-tip="edit" type="button" class="btn btn-outline-warning btn-sm">Edit</a>
                                                 <a href="/kriteria/{{$name_column->id}}/delete"  type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
                                            {{-- </form> --}}
                                            {{-- </ul> --}}
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
