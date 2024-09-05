@extends('layouts.admin')
@section('content')
    <div class="row mb-6 mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-primary" href="{{route('travel.create')}}"><i class="bx bx-plus"></i> Add New Travel</a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Travel List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-export" class="table table-bordered text-nowrap w-100 dataTable no-footer">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title </th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($travels as $travel)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$travel->title}}</td>
                                    <td>{{$travel->content}}</td>
                                    <td>
                                        <img src="data:image/jpeg;base64,{{ $travel->image }}" alt="travel" style="height: 50px; width: 50px" >
                                    </td>

                                    <td>{{$travel->created_at}}</td>
                                    <td>
                                        <a href="{{route('travel.edit', $travel->id)}}" class="btn btn-sm btn-primary btn-wave waves-effect waves-light">
                                            <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                        </a>
                                        <a href="{{route('travel.show', $travel->id)}}" class="btn btn-sm btn-success btn-wave waves-effect waves-light">
                                            <i class="ri-eye-line align-middle me-2 d-inline-block"></i>View
                                        </a>

                                        <a class="btn btn-sm btn-danger btn-wave waves-effect waves-light deleteTravel"
                                           data-id="{{$travel->id}}">
                                            <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




        @endsection

        @section('scripts')
            <script>
                $(document).ready(function (){
                    $('#file-export').on('click', '.deleteTravel', function (){
                        var id = $(this).data('id');
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                                confirmButton: 'btn btn-success ms-2',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: false
                        })
                        swalWithBootstrapButtons.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url:'{{route('travel.delete',['id' => ''])}}' + '/' + id,
                                    type:'POST',
                                    data:{
                                        _token:'{{csrf_token()}}',
                                    },
                                    success:function (response){
                                        location.reload()
                                        swalWithBootstrapButtons.fire(
                                            'Deleted!',
                                            'Your group has been deleted.',
                                            'success'
                                        )
                                    },
                                    error:function (error){

                                    }
                                })

                            } else if (
                                result.dismiss === Swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons.fire(
                                    'Cancelled',
                                    'You have cancelled this action :)',
                                    'error'
                                )
                            }
                        })
                    });
                });
            </script>

@endsection