@extends('layouts.dashboard')

@section('content')


    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Alternatif</h4>
                  <p class="card-description">
                    Tambah Alternatif
                  </p>
                  <form class="forms-sample" action="/alternatif/{{$alternatif->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    {{-- <div class="form-group">
                      <label for="nama">Nama Alternatif</label>
                      <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="{{$alternatif->nama}}">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi" value="{{$alternatif->deskripsi}}">
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="text" class="form-control" id="harga" placeholder="harga" name="harga" value="{{$alternatif->harga}}">
                    </div>
                    <div class="form-group">
                      <label for="kualitas">Kualitas</label>
                      <input type="text" class="form-control" id="kualitas" placeholder="kualitas" name="kualitas" value="{{$alternatif->kualitas}}">
                    </div>
                    <div class="form-group">
                      <label for="daya_tahan">Daya Tahan</label>
                      <input type="text" class="form-control" id="daya_tahan" placeholder="daya_tahan" name="daya_tahan" value="{{$alternatif->daya_tahan}}">
                    </div>
                    <div class="form-group">
                      <label for="kemudahan_pengiriman">Kemudahan Pengiriman</label>
                      <input type="text" class="form-control" id="kemudahan_pengiriman" placeholder="kemudahan_pengiriman" name="kemudahan_pengiriman" value="{{$alternatif->kemudahan_pengiriman}}">
                    </div> --}}


                     <div class="form-group">
                    <label for="nama">Nama Alternatif *</label>
                    <input id="nama" type="text" name="nama" class="form-control"
                        placeholder="Please enter Name Alternatif"  required="required"
                        value="{{$alternatif->nama}}">
                    </div>

                    <div class="form-group">
                    <label for="deskripsi">Deskripsi *</label>
                    <input id="deskripsi" type="text" name="deskripsi" class="form-control"
                        placeholder="Please enter Deskripsi Kriteria" required="required"
                        value="{{$alternatif->deskripsi}}">
                    </div>

                    <div class="form-group">
                    <label for="harga">Harga *</label>
                    <input id="harga" type="text" name="harga" class="form-control"
                        placeholder="Please enter Harga" required="required"
                        value="{{$alternatif->harga}}">
                    </div>

                    <div class="form-group">
                    <label for="kualitas">Kualitas *</label>
                    <input id="kualitas" type="text" name="kualitas" class="form-control"
                        placeholder="Please enter Kualitas" required="required"
                        value="{{$alternatif->kualitas}}">
                    </div>

                    <div class="form-group">
                    <label for="kemasan">Kemasan *</label>
                    <input id="kemasan" type="text" name="kemasan" class="form-control"
                        placeholder="Please enter Kemasan" required="required"
                        value="{{$alternatif->kemasan}}">
                    </div>

                    <div class="form-group">
                    <label for="daya_tahan">Daya Tahan *</label>
                    <input id="daya_tahan" type="text" name="daya_tahan" class="form-control"
                        placeholder="Please enter Daya Tahan" required="required"
                        value="{{$alternatif->daya_tahan}}">
                    </div>

                    <div class="form-group">
                    <label for="kemudahan_pengiriman">Kemudahan Pengiriman *</label>
                    <input id="kemudahan_pengiriman" type="text" name="kemudahan_pengiriman" class="form-control"
                        placeholder="Please enter Kemudahan Pengiriman" required="required"
                        value="{{$alternatif->kemudahan_pengiriman}}">
                    </div>

                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Simpan</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->



@endsection

