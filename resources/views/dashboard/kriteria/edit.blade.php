@extends('layouts.dashboard')

@section('content')


    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kriteria</h4>
                  <p class="card-description">
                    Edit Kriteria
                  </p>
                  <form class="forms-sample" action="/kriteria/{{$kriteria->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                            <label for="nama">Kriteria *</label>
                            <input id="nama" type="text" name="nama" class="form-control"
                                placeholder="Please enter Name Kriteria" value="{{$kriteria->nama}}" required="required"
                                >
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot *</label>
                            <input id="bobot" type="text" name="bobot" value="{{$kriteria->bobot}}" class="form-control"
                                placeholder="Please enter Bobot Kreteria" required="required"
                                >
                        </div>
                        <div class="form-group">
                            <label for="lebel">Please specify your need *</label>
                            <select id="lebel" name="label" class="form-control" required="required"
                                data-error="Please specify your need.">
                                {{-- <option value=""  selected disabled>--Select Label--</option> --}}
                                <option value="min" @if($kriteria->label == "min") selected @endif>Min</option>
                                <option value="max" @if($kriteria->label == "max") selected @endif>Max</option>
                            </select>

                        </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" value="save" name="submit">Simpan</button>
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

