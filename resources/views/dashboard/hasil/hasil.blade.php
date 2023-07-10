@extends('layouts.dashboard')

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hasil Pethitungan</h4>
                  <p class="card-description">
                    Menampilkan Normalisasi Dan Hasil
                  </p>
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
                            Hasil
                          </th>
                        </tr>
                      </thead>
                      <tbody>
             @foreach ($results as  $result)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $result['nama_alt'] }}</td>
                                    <td>{{ $result['harga'] }}</td>
                                    <td>{{ $result['kualitas'] }}</td>
                                    <td>{{ $result['kemasan'] }}</td>
                                    <td>{{ $result['daya_tahan'] }}</td>
                                    <td>{{ $result['kemudahan_pengiriman'] }}</td>
                                    <td>{{ $result['hasil'] }}</td>
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
