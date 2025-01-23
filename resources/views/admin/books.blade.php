@extends('admin.admin_nav')

@section('navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Uploaded Books</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Book Title</th>
                                            <th>Tumbnail</th>
                                            <th>Author</th>
                                            <th>Description</th>
                                            <th>Categories</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Book Title</th>
                                            <th>Tumbnail</th>
                                            <th>Author</th>
                                            <th>Description</th>
                                            <th>Categories</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($records as $r)
                                        <tr>
                                            <td>{{$r->id}}</td>
                                            <td>{{$r->Book_Title}}</td>
                                            <td>
                                                <img src="{{asset('Files/'.$r->Thumbnail)}}" alt="" style="heigth: 120px; width: 150px;">
                                            </td>
                                            <td>{{$r->Author}}</td>
                                            <td>{{$r->Description}}</td>
                                            <td>{{$r->Category}}</td>
                                            <td>{{$r->Price}}</td>
                                            <td>
                                                <form action="/upload/{{$r->id}}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                            <form action="/deletepage/{{$r->id}}" method="POST">
                                            @csrf
                                                    <button class="btn btn-danger" >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @endsection