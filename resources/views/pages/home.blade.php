@extends('layouts.index')

@section('title')
    Home
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 mb-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Summary Data</h6>
            </div>
            <div class="card-body">
                 <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-2"><i
                                class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nama</th>
                            <th>NPWP</th>
                            <th>Kelurahan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->npwp }}</td>
                                <td>{{ $item->kelurahan }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-info btn-circle btn-sm" title="Info Data"><i
                                            class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-warning btn-circle btn-sm" title="Edit Data"><i
                                            class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm" title="Delete Data"><i
                                            class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-auto">
                  {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Content Row -->
<div class="row">

  <!-- Content Column -->
  <div class="col-lg-6 mb-4">

      <!-- Project Card Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
          </div>
          <div class="card-body">
              <h4 class="small font-weight-bold">Server Migration <span
                      class="float-right">20%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Sales Tracking <span
                      class="float-right">40%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Customer Database <span
                      class="float-right">60%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar" role="progressbar" style="width: 60%"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Payout Details <span
                      class="float-right">80%</span></h4>
              <div class="progress mb-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                      aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h4 class="small font-weight-bold">Account Setup <span
                      class="float-right">Complete!</span></h4>
              <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
      </div>

  </div>

  <div class="col-lg-6 mb-4">

      <!-- Illustrations -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
          </div>
          <div class="card-body">
              <div class="text-center">
                  <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                      src="theme/img/undraw_posting_photo.svg" alt="">
              </div>
              <p>Selamat Datang di aplikasi SMART KPP Pratama Medan Barat</p>
              <a target="_blank" rel="nofollow" href="https://undraw.co/">Get to Know the App &rarr;</a>
          </div>
      </div>

  </div>
</div>

<!-- Logout Modal-->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
