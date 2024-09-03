@extends('layouts.admin')
@section('content')
    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Create a new content
                    </div>
                </div>
                <form method="POST" action="{{route('content.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Select Category</label>
                                <select    class="form-control" id="type"  name="type">
                                    <option value="">Select..</option>
                                    <option value="Title">Title</option>
                                    <option value="Sub Title">Sub Title</option>
                                    <option value="Paragraph">Paragraph</option>
                                    <option value="Second Card 1">Second Card 1</option>
                                    <option value="Second Card 2">Second Card 2</option>
                                    <option value="Second Card 3">Second Card 3</option>
                                    <option value="Second Card 4">Second Card 4</option>
                                    <option value="About-Title">About-Title</option>
                                    <option value="About-Content">About-Content</option>
                                    <option value="Special 1">Special 1</option>
                                    <option value="Special 2">Special 2</option>
                                    <option value="Special Para1">Special Para1</option>
                                    <option value="Special Para2">Special Para2</option>
                                    <option value="Tour Title">Tour Title</option>
                                    <option value="Tour Content">Tour Content</option>
                                    <option value="Choose Card 1">Choose Card 1</option>
                                    <option value="Choose Card 2">Choose Card 2</option>
                                    <option value="Choose Card 3">Choose Card 3</option>
                                    <option value="Choose Card 4">Choose Card 4</option>
                                    <option value="Choose Para 1">Choose Para 1</option>
                                    <option value="Choose Para 2">Choose Para 2</option>
                                    <option value="Choose Para 3">Choose Para 3</option>
                                    <option value="Choose Para 4">Choose Para 4</option>
                                    <option value="Service Title">Service Title</option>
                                    <option value="Service Content">Service Content</option>
                                    <option value="Explore Content">Explore Content</option>
                                    <option value="Newsletter Content">Newsletter Content</option>
                                </select>
                                @error('type')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>

                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Content</label>
                                <input type="text" class="form-control" id="content" placeholder="" name="content" />
                                @error('content')
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
