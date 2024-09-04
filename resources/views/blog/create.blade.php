@extends('layouts.admin')
@section('content')

    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Create a new  blog content
                    </div>
                </div>
                <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Tag</label>
                                <select type="text" class="form-control" id="tag" placeholder="" name="tag">
                                    <option value="">Select..</option>
                                    <option value="Travelling">Travelling</option>
                                    <option value="Vacation">Vacation</option>
                                    <option value="Food">Food</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Music">Music</option>
                                    <option value="Movies">Movies</option>
                                </select>
                                @error('tag')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="" name="title" />
                                @error('title')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Content</label>
                                <textarea rows="3" type="text" class="form-control" id="content" placeholder="" name="content"></textarea>
                                @error('content')
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
