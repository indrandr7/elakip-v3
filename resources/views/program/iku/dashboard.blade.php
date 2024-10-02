@extends('layout.main')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-12">
                <div class="home-tab">
                  <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="/" role="tab" aria-controls="overview" aria-selected="true">IKU Biro</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="/kegiatan" role="tab" aria-selected="false">Kegiatan</a>
                      </li>
                     
                    </ul>
                    <div>
                      <div class="btn-wrapper">
                        
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>Export</a>
                      </div>
                    </div>
                  </div>
                 
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  
                                  <div class="table-responsive  mt-1">
                                    <table class="table table-hover">
                                      <thead>
                                        <tr align="center">
                                          <th>No. IKU</th>
                                          <th>Indikator Kinerja Utama</th>
                                          <th>Satuan</th>
                                          <th>Target</th>
                                          <th>Capaian IKU</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data_iku as $d )
                                        <tr>
                                          <td align="center">IKU-{{ $d['id'] }}</td>
                                          <td>
                                            
                                                <h6><b>{{ $d['nama_iku'] }}</b></h6>
                                                <p>{{ $d['nama_biro'] }}</p>
                                                <p><b>Pokja: </b>{{ $d['nama_bagian'] }}</p>
                                              
                                          </td>
                                          <td>
                                            <h6 align=center>{{ $d['satuan'] }}</h6>
                                            
                                          </td>
                                          <td>
                                          <h6 align=center>{{ $d['target_iku'] }}</h6>
                                          </td>
                                          <td>
                                          <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">{{ $d['persentase_iku'] }}%</p>
                                                <p>{{ $d['realisasi_iku'] }}/{{ $d['target_iku'] }}</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $d['persentase_iku'] }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                            <div class="badge badge-opacity-success">{{ $d['status'] }}</div>
                                            <p>{{ $d['capaian_iku'] }}</p>
                                          </td>
                                        </tr>
                                        @endforeach

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                </div>
          </div>
          <!-- content-wrapper ends -->
<div class="d-flex justify-content-end">
    {{ $data_iku->links() }}
</div>


@endsection