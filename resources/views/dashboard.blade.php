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
                        <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">IKU</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Kegiatan</a>
                      </li>
                     
                    </ul>
                    <div>
                      <div class="btn-wrapper">
                        
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                      </div>
                    </div>
                  </div>
                 
                          <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  
                                  <div class="table-responsive  mt-1">
                                    <table class="table select-table">
                                      <thead>
                                        <tr>
                                          <th>Indikator Kinerja Utama</th>
                                          <th>Target</th>
                                          <th>Satuan</th>
                                          <th>Capaian IKU</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>
                                            
                                                <h6>Rumusan kebijakan/ strategi  peningkatan ketahanan energi nasional</h6>
                                                <p>Biro Fasilitasi Penanggulangan Krisis dan Pengawasan Energi</p>
                                              
                                          </td>
                                          <td>
                                            <h6 align=center>1</h6>
                                            
                                          </td>
                                          <td>
                                          <h6>Rumusan Rekomendasi</h6>
                                          </td>
                                          <td>
                                          <div>
                                              <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                <p class="text-success">79%</p>
                                                <p>0/1</p>
                                              </div>
                                              <div class="progress progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </div>
                                            <div class="badge badge-opacity-warning">In progress</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          
                                          
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                </div>
          </div>
          <!-- content-wrapper ends -->

@endsection