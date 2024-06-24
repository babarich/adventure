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
                <form method="POST" action="{{route('manage.store')}}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                        <div class="row gy-4 mb-4">
                            <div class="col-xl-12">
                                <label for="job-title" class="form-label">Category Name</label>
                                <select type="text" class="form-control" id="name" placeholder="" name="name">
                                    <option value="">Select..</option>
                                     <option value="Hero Home">Hero Home</option>
                                     <option value="Happy Customer">Happy Customer</option>
                                      <option value="Speicial Offer 1">Special Offer 1</option>
                                       <option value="Speicial Offer 2">Special Offer 2</option>
                                        <option value="Travel Background">Travel Background</option>
                                       <option value="Travel">Travel</option>
                                        <option value="Choose Us">Choose Us</option>
                                         <option value="Stories">Stories</option>
                                          <option value="Explore">Explore</option>
                                           <option value="Experience">Experience</option>
                                            <option value="Faq">Faq</option>
                                             <option value="Planning">Planning</option>
                                              <option value="Blog">Blog</option>
                                               <option value="Hero About">Hero About</option>
                                                <option value="Hero Blog">Hero Blog</option>
                                                 <option value="Hero Contact">Hero Contact</option>
                                                  <option value="Hero Service">Hero Service</option>
                                                   <option value="Hero Destination">Hero Destination</option>
                                                    <option value="Hero Testimonial">Hero Testimonial</option>
                                                     <option value="Hero Team">Hero Team</option>
                                                      <option value="Team">Team</option>
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
