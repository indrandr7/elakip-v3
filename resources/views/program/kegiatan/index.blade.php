@extends('layout.main')
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="home-tab">
                            <div class="btn-wrapper">
                  <a href="#" class="btn btn-secondary text-white me-0"><i class="icon-plus"></i>Tambah</a>
                </div>
              </div>
            </div>
           
                    <div class="row flex-grow">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                          <div class="card-body">
                            
                            <div class="table-responsive  mt-1">
                              <table class="table table-hover" col-lg-6>
                                <thead>
                                  <tr align="center">
                                    <th>No</th>
                                    <th width="40px">Komponen</th>
                                    <th width="40px">Sub Komponen</th>
                                    <th>Target</th>
                                    {{-- <th>Satuan</th> --}}
                                    <th>PIC</th>
                                    <td>Aksi</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  <td align="center">1</td>
                                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates esse corporis iure repudiandae id</td>
                                  <td>Subkomponen</td>
                                  <td align="center">100%</td>
                                  {{-- <td align="center">Persentase</td> --}}
                                  <td>
                                    <h6>Biro Umum</h6>
                                    <p>UDPK</p>
                                  </td>
                                  <td align="center">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-inverse-primary btn-icon btn-sm">
                                        <i class="ti-pencil"></i>
                                        <button type="button" class="btn btn-inverse-info btn-icon btn-sm">
                                          <i class="ti-list"></i>
                                          <button type="button" class="btn btn-inverse-danger btn-icon btn-sm">
                                            <i class="ti-trash"></i>
                                    </div>
                                  </td>
                                </tbody>
                              </table>
                            </div>
                          </div>
          </div>
    </div>


@endsection