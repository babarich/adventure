@extends('layouts.admin')
@section('content')

    <style>
        .rating {
            display: inline-flex;
            margin-top: -10px;
            flex-direction: row-reverse;
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 28px;
            font-size: 35px;
            color: #fdbb1a;
            cursor: pointer;
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }
    </style>

    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Create a new  testimonial
                    </div>
                </div>
                <form method="POST" action="{{route('testimonial.update', $testimonial->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" name="name"
                                       value="{{old('name', $testimonial->name)}}" />
                                @error('name')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="" name="title"
                                value="{{old('title', $testimonial->title)}}"/>
                                @error('title')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label class="col-form-label">Rating</label><br/>
                                <div class="rating">
                                    <input type="radio" name="rate" value="5" id="5" />
                                    <label for="5">☆</label> <input type="radio" name="rate" value="4" id="4" {{$testimonial->rate === 4 ? 'checked' : ''}}>
                                    <label for="4">☆</label> <input type="radio" name="rate" value="3" id="3" {{$testimonial->rate === 3 ? 'checked' : ''}}>
                                    <label for="3">☆</label> <input type="radio" name="rate" value="2" id="2" {{$testimonial->rate === 2 ? 'checked' : ''}}>
                                    <label for="2">☆</label> <input type="radio" name="rate" value="1" id="1" {{$testimonial->rate === 1 ? 'checked' : ''}}>
                                    <label for="1">☆</label>
                                </div>
                                @error('rate')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Content</label>
                                <textarea type="text" class="form-control" id="title" placeholder="" name="content" >{{old('content', $testimonial->content)}}</textarea>
                                @error('title')
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
