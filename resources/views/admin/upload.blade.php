@extends('admin.admin_nav')

@section('navbar')

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
<div>
                <center>
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Post New Edition!</h1>
                    </div>
                    <form class="user" action="/books" enctype="multipart/form-data" method="POST"  >
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Book Title" name="title">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="upload-btn-wrapper col-md-6">
                                 <button class="btn btn-book btn-block">Thumbnail</button>
                                 <input type="file" name="thumbnail" id="image" accept="image/*" placeholder="Thumbnail">
                             </div>
                             
                             <div class="upload-btn-wrapper col-md-6">
                                 <button class="btn btn-book btn-block">PDF</button>
                                 <input type="file" name="pdf" id="PDF" accept="PDF/*" placeholder="PDF">
                             </div>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <input type="description" class="form-control form-control-user" id="exampleInputdescription"
                                placeholder="Description" name="description">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleRepeatAuthor" placeholder="Author" name="Author">
                            </div>

                            <div class="col-sm-4 mb-3 mb-sm-0 mt-2">
                                <!-- <input type="category" class="form-control form-control-user"
                                    id="exampleInputcategory" placeholder="Category" name="Category"> -->
                            <select class="form-control " name="Category" placeholder="Category">
                               @foreach($cat as $c)
                               <option value="{{$c->id}}">{{$c->categoryname}}</option>
                               @endforeach
                                
                            </select>
                            </div>

                            <div class="col-sm-4">
                                <input type="Price" class="form-control form-control-user"
                                    id="exampleRepeatPrice" placeholder="Price" name="Price">
                            </div>
                            
                        </div>
                        <hr>
                        <div class="upload-btn-wrapper">
                                 <button type="submit" class="btn btn-book btn-block">Upload Book</button>
                             </div>
                        
                    </form>
                </div>
            
                </center>
                </div>
</div>

</div>
            @endsection