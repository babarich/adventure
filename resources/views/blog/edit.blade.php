@extends('layouts.admin')
@section('content')

    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Update the  blog content
                    </div>
                </div>
                <form method="POST" action="{{route('blog.update', $blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Tag</label>
                                <select type="text" class="form-control" id="tag" placeholder="" name="tag">
                                    <option value="">Select..</option>
                                    <option value="Travelling" {{old('tag', $blog->tag === 'Travelling' ? 'selected': '')}}>Travelling</option>
                                    <option value="Vacation" {{old('tag', $blog->tag === 'Vacation' ? 'selected': '')}}>Vacation</option>
                                    <option value="Food" {{old('tag', $blog->tag === 'Food' ? 'selected': '')}}>Food</option>
                                    <option value="Entertainment" {{old('tag', $blog->tag === 'Entertainment' ? 'selected': '')}}>Entertainment</option>
                                    <option value="Music" {{old('tag', $blog->tag === 'Music' ? 'selected': '')}}>Music</option>
                                    <option value="Movies" {{old('tag', $blog->tag === 'Movies' ? 'selected': '')}}>Movies</option>
                                </select>
                                @error('tag')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{old('title', $blog->title)}}" />
                                @error('title')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Content</label>
                                <textarea rows="3" type="text" class="form-control" id="content" placeholder="" name="content">{{old('content', $blog->content)}}</textarea>
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
