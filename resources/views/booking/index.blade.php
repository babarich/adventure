@extends('layouts.admin')
@section('content')
    <div class="row mb-6 mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex flex-row-reverse">
                  
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Booking List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                            <table id="file-export" class="table table-bordered text-nowrap w-100 dataTable no-footer">
                               <thead>
                               <tr>
                                   <th>SN</th>
                                   <th>Name </th>
                                   <th>Email</th>
                                   <th>Date</th>
                                   <th>Description</th>
                                   <th>Created At</th>
                                   <th>Action </th>

                               </tr>
                               </thead>
                                <tbody>
                                @foreach($books as $book)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$book->name}}</td>
                                        <td>{{$book->email ?? ''}}</td>
                                        <td>{{$book->date}}</td>
                                        <td>{{$book->description}}</td>
                                        <td>{{$book->created_at}}</td>
                                    
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
                    $('#file-export').on('click', '.deleteGroup', function (){
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
                                    url:'{{route('manage.delete',['id' => ''])}}' + '/' + id,
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
