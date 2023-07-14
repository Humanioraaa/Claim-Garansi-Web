@extends('layouts.admin')
@section('content')


<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 class="mt-0 font-14">List Staff Admin Garansi. <span class="badge badge-pink">6</span></h5>
                        </li>
                    </ul>
                </div><!--end col-->


            </div><!--end row-->
            <div class="row">
                @foreach ( $staff as $show )
                <div class="col-lg-4">
                    <div class="card team-card">
                        <div class="card-body">

                            <div class="media align-items-center">
                                <div class="media-body ml-3 align-self-center">
                                    <h4 class="team-leader m-0"> Role : </h4>
                                    <p class="text-muted font-12 mb-0">Admin Garansi</p>
                                </div>
                            </div>
                            <h4 class="m-0 mt-4 font-14 font-weight-semibold">{{$show->name}}</h4>
                            <p class="text-muted mb-0">{{$show->email}}</p>
                            <div class="mt-4 d-flex justify-content-between">
                                <div class="align-self-center">
                                    <button type="button" class="btn btn-xs btn-light btn-round">
                                        <a href=" /1_manager_staffdetail/{{$show->id}}" style="text-decoration : none">Lihat Detail <i class="mdi mdi-arrow-right"></i></a>
                                    </button>
                                </div>
                            </div>
                           <hr class="hr-dashed my-4">
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                @endforeach
            </div><!--end row-->
        </div><!-- container -->

    </div>
    <!-- end page content -->
</div>



@endsection
