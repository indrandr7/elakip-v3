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
                              <table class="table select-table" col-lg-8>
                                <thead>
                                  <tr align="center">
                                    <th>No</th>
                                    <th width="40px">Nama Biro</th>
                                    <th>Aksi</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <td align="center">1</td>
                                  <td>Biro Umum</td>
                                  <td align="center">
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-inverse-primary btn-icon btn-sm">
                                        <i class="ti-pencil"></i>
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