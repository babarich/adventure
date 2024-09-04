@extends('layouts.admin')
@section('content')
    <div class="row mb-6 mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-row-reverse gap-3">
                <div class="mr-4">
                    <a class="btn btn-primary" href="{{route('team.index')}}"><i class="bx bx-left-arrow-alt"></i>Back</a>
                </div>




            </div>
        </div>
    </div>

    <!-- Start::row-1 -->
    <div class="row mt-4">

        <div class="col-xxl-12 col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="card-body p-0">
                            <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-between">

                                <ul class="list-group" style="width: 100%">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <div class="me-2 fw-semibold">
                                            Full Name :
                                        </div>
                                        <span class="fs-12 text-muted float-end">{{$team->name}}</span>
                                    </li>

                                    <li class="list-group-item d-flex justify-content-between">
                                        <div class="me-2 fw-semibold">
                                            Title:
                                        </div>
                                        <span class="fs-12 text-muted float-end">{{$team->title}}</span>

                                    </li>

                                    <li class="list-group-item d-flex justify-content-between">
                                        <div class="me-2 fw-semibold">
                                            Created At:
                                        </div>
                                        <span class="fs-12 text-muted float-end">{{$team->created_at}}</span>

                                    </li>


                                    <li class="list-group-item d-flex justify-content-between">
                                        <div class="me-2 fw-semibold">
                                            Created By:
                                        </div>
                                        <span class="fs-12 text-muted float-end">{{$team->user->name ?? ''}}</span>

                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!--End::row-1 -->
    <div class="col-xl-12 col-lg-12 col-sm-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    Image
                </div>
            </div>
            <div class="card-body">
                <img src="data:image/jpeg;base64,{{ $team->image }}" class="d-block w-100"  alt="{{ $team->title }}">
            </div>
        </div>
    </div>



@endsection

@section('scripts')


@endsection
