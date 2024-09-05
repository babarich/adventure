@extends('layouts.admin')
@section('content')

    <!-- Start::row-1 -->
    <div class="row" style="margin-top: 50px">
        <div class="col-xxl-9 col-xl-8">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                 Create a new image
                    </div>
                </div>
                <form method="POST" action="{{route('manage.update', $image->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Category Name</label>
                                <select type="text" class="form-control" id="name" placeholder="" name="name">
                                    <option value="">Select..</option>
                                     <option value="Hero Home" {{old('name', $image->category === 'Hero Home' ? 'selected' : '')}}>Hero Home</option>
                                     <option value="Happy Customer" {{old('name', $image->category === 'Happy Customer' ? 'selected' : '')}}>Happy Customer</option>
                                      <option value="Special Offer 1" {{old('name', $image->category === 'Special Offer 1' ? 'selected' : '')}}>Special Offer 1</option>
                                      <option value="Special Offer 2" {{old('name', $image->category === 'Special Offer 2' ? 'selected' : '')}}>Special Offer 2</option>
                                       <option value="Travel" {{old('name', $image->category === 'Travel' ? 'selected' : '')}}>Travel</option>
                                        <option value="Choose Us" {{old('name', $image->category === 'Choose Us' ? 'selected' : '')}}>Choose Us</option>
                                         <option value="Stories" {{old('name', $image->category === 'Stories' ? 'selected' : '')}}>Stories</option>
                                          <option value="Explore" {{old('name', $image->category === 'Explore' ? 'selected' : '')}}>Explore</option>
                                           <option value="Experience" {{old('name', $image->category === 'Experience' ? 'selected' : '')}}>Experience</option>
                                            <option value="Faq" {{old('name', $image->category === 'Faq' ? 'selected' : '')}}>Faq</option>
                                             <option value="Planning" {{old('name', $image->category === 'Planning' ? 'selected' : '')}}>Planning</option>
                                              <option value="Blog" {{old('name', $image->category === 'Blog' ? 'selected' : '')}}>Blog</option>
                                                <option value="Service Small" {{old('name', $image->category === 'Service Small' ? 'selected' : '')}}>Service Small</option>
                                                <option value="Service Large" {{old('name', $image->category === 'Service Large' ? 'selected' : '')}}>Service Large</option>
                                                 <option value="What Do" {{old('name', $image->category === 'What Do' ? 'selected' : '')}}>What We Do</option>
                                               <option value="Hero About" {{old('name', $image->category === 'Hero About' ? 'selected' : '')}}>Hero About</option>
                                                <option value="Hero Blog" {{old('name', $image->category === 'Hero Blog' ? 'selected' : '')}}>Hero Blog</option>
                                                 <option value="Hero Contact" {{old('name', $image->category === 'Hero Contact' ? 'selected' : '')}}>Hero Contact</option>
                                                  <option value="Hero Service" {{old('name', $image->category === 'Hero Service' ? 'selected' : '')}}>Hero Service</option>
                                                   <option value="Hero Destination" {{old('name', $image->category === 'Hero Destination' ? 'selected' : '')}}>Hero Destination</option>
                                                    <option value="Hero Testimonial" {{old('name', $image->category === 'Hero Testimonial' ? 'selected' : '')}}>Hero Testimonial</option>
                                                     <option value="Hero Team" {{old('name', $image->category === 'Hero Team' ? 'selected' : '')}}>Hero Team</option>
                                                      <option value="Team" {{old('name', $image->category === 'Team' ? 'selected' : '')}}>Team</option>
                                </select>
                                @error('name')
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
