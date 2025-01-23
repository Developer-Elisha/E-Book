@extends('admin.admin_nav')

@section('navbar')

                <div class="card p-5">
                    <div class="text-center">
                        <h1 class="h4 text-white-900 mb-4">Post New Edition!</h1>
                    </div>
                    <form class="user" action="/editrec" enctype="multipart/form-data" method="POST"   >
                        @csrf

                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <input type="hidden" name="bookid" value="{{$specificbook->id}}">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="Book Title" name="booktitle"
                                    value="{{$specificbook->Book_Title}}">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="upload-btn-wrapper col-md-6">
                                 <button class="btn btn-book btn-block">Thumbnail</button>
                                 <input type="file" name="thumbnail" id="image" accept="image/*" placeholder="Thumbnail"
                                 value="{{$specificbook->Thumbnail}}">
                             </div>
                             
                             <div class="upload-btn-wrapper col-md-6">
                                 <button class="btn btn-book btn-block">PDF</button>
                                 <input type="file" name="pdf" id="PDF" accept="PDF/*" placeholder="PDF"
                                 value="{{$specificbook->PDF}}">
                             </div>
                        </div>
                        <br>
                        <div class="form-group"> 
                            <input type="description" class="form-control form-control-user" id="exampleInputdescription"
                                placeholder="Description" name="description"
                                value="{{$specificbook->Description}}">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-user"
                                    id="exampleRepeatAuthor" placeholder="Author" name="Author"
                                    value="{{$specificbook->Author}}">
                            </div>

                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="category" class="form-control form-control-user"
                                    id="exampleInputcategory" placeholder="Category" name="Category"
                                    value="{{$specificbook->Category}}">
                            </div>

                            <div class="col-sm-4">
                                <input type="Price" class="form-control form-control-user"
                                    id="exampleRepeatPrice" placeholder="Price" name="Price" value="{{$specificbook->Price}}">
                            </div>
                            
                        </div>
                        <hr>
                        <div class="upload-btn-wrapper">
                                 <button type="submit" class="btn btn-book btn-block">Upload Book</button>
                             </div>
                        
                    </form>
                </div>
            
     
                @endsection