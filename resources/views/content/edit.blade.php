@extends('layouts.admin')
@section('content')
    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Update a new content
                    </div>

                </div>
                <form method="POST" action="{{route('content.update', $content->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Select Category</label>
                                <select type="text" class="form-control" id="type" placeholder="" name="type">
                                    <option value="">Select..</option>
                                    <option value="Title" {{old('type', $content->type === 'Title' ? 'selected' : '')}}>Title</option>
                                    <option value="Sub Title" {{old('type', $content->type === 'Sub Title' ? 'selected' : '')}}>Sub Title</option>
                                    <option value="Paragraph" {{old('type', $content->type === 'Paragraph' ? 'selected' : '')}}>Paragraph</option>
                                    <option value="Second Card 1" {{old('type', $content->type === 'Second Card 1' ? 'selected' : '')}}>Second Card 1</option>
                                    <option value="Second Card 2" {{old('type', $content->type === 'Second Card 2' ? 'selected' : '')}}>Second Card 2</option>
                                    <option value="Second Card 3" {{old('type', $content->type === 'Second Card 3' ? 'selected' : '')}}>Second Card 3</option>
                                    <option value="Second Card 4" {{old('type', $content->type === 'Second Card 4' ? 'selected' : '')}}>Second Card 4</option>
                                    <option value="About-Title" {{old('type', $content->type === 'About-Title' ? 'selected' : '')}}>About-Title</option>
                                    <option value="About-Content" {{old('type', $content->type === 'About-Content' ? 'selected' : '')}}>About-Content</option>
                                    <option value="Special 1" {{old('type', $content->type === 'Special 1' ? 'selected' : '')}}>Special 1</option>
                                    <option value="Special 2" {{old('type', $content->type === 'Special 2' ? 'selected' : '')}}>Special 2</option>
                                    <option value="Special Para1" {{old('type', $content->type === 'Special Para1' ? 'selected' : '')}}>Special Para1</option>
                                    <option value="Special Para2" {{old('type', $content->type === 'Special Para2' ? 'selected' : '')}}>Special Para2</option>
                                    <option value="Tour Title" {{old('type', $content->type === 'Tour Title' ? 'selected' : '')}}>Tour Title</option>
                                    <option value="Tour Content" {{old('type', $content->type === 'Tour Content' ? 'selected' : '')}}>Tour Content</option>
                                    <option value="Choose Card 1" {{old('type', $content->type === 'Choose Card 1' ? 'selected' : '')}}>Choose Card 1</option>
                                    <option value="Choose Card 2" {{old('type', $content->type === 'Choose Card 2' ? 'selected' : '')}}>Choose Card 2</option>
                                    <option value="Choose Card 3" {{old('type', $content->type === 'Choose Card 3' ? 'selected' : '')}}>Choose Card 3</option>
                                    <option value="Choose Card 4" {{old('type', $content->type === 'Choose Card 4' ? 'selected' : '')}}>Choose Card 4</option>
                                    <option value="Choose Para 1" {{old('type', $content->type === 'Choose Para 1' ? 'selected' : '')}}>Choose Para 1</option>
                                    <option value="Choose Para 2" {{old('type', $content->type === 'Choose Para 2' ? 'selected' : '')}}>Choose Para 2</option>
                                    <option value="Choose Para 3" {{old('type', $content->type === 'Choose Para 3' ? 'selected' : '')}}>Choose Para 3</option>
                                    <option value="Choose Para 4" {{old('type', $content->type === 'Choose Para 4' ? 'selected' : '')}}>Choose Para 4</option>
                                    <option value="Service Title" {{old('type', $content->type === 'Service Title' ? 'selected' : '')}}>Service Title</option>
                                    <option value="Service Content" {{old('type', $content->type === 'Service Content' ? 'selected' : '')}}>Service Content</option>
                                    <option value="Explore Content" {{old('type', $content->type === 'Explore Content' ? 'selected' : '')}}>Explore Content</option>
                                    <option value="Newsletter Content" {{old('type', $content->type === 'Newsletter Content' ? 'selected' : '')}}>Newsletter Content</option>
                                </select>
                                @error('type')
                                <span class="text-danger"><strong>{{$message}}</strong></span>
                                @enderror
                            </div>
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Content</label>
                                <input type="file" class="form-control" id="content" placeholder="" name="content"
                                       value="{{$content->content}}"/>
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
