@extends('layouts.dashboard')

@section('content')


    <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Kriteria</h4>
                  <p class="card-description">
                    Tambah Kriteria
                  </p>
                  <form action="/kriteria/store"  method="POST" class="forms-sample">
                    @csrf

                    <div class="form-group">
                    <label for="nama">Kriteria *</label>
                    <input id="nama" type="text" name="nama" class="form-control"
                        placeholder="Please enter Name Kriteria"  required="required"
                        >
                    </div>

                    <div class="form-group">
                    <label for="bobot">Bobot *</label>
                    <input id="bobot" type="text" name="bobot" class="form-control"
                        placeholder="Please enter Bobot Kriteria" required="required"
                        >
                    </div>

                    {{-- <div class="form-group">
                    <label for="bobot">Bobot *</label>
                    <input id="bobot" type="text" name="bobot" class="form-control"
                        placeholder="Please enter Bobot Kriteria" required="required"
                        >
                    </div> --}}

                    <div class="form-group">
                        <label for="label">Please specify your need *</label>
                        <select id="label" name="label" class="form-control" required="required"
                            data-error="Please specify your need.">
                            {{-- <option     value=""  selected disabled>--Select Label--</option> --}}
                            <option value="min">Min</option>
                            <option value="max">Max</option>
                        </select>
                    </div>

                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" value="save" name="submit">Tambah</button>
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

