@extends('layouts.admin')
@section('content')

    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Update team member
                    </div>
                </div>
                <form method="POST" action="{{route('team.update', $team->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="title" value="{{old('name', $team->name)}}" />
                                @error('name')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{old('title', $team->title)}}" />
                                @error('title')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>

                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" placeholder="" name="image" />
                                @error('image')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary btn-wave waves-effect waves-light">
                            <i class="bi bi-save"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--End::row-1 -->










@endsection
