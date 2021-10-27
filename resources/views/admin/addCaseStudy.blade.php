@extends('admin.master')
@section('content')
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<style>
    .modal a.close-modal{
        top:0px !important;
        right:0px !important;
    }
</style>
<!--== BODY CONTNAINER ==-->
 <div class="container-fluid sb2">
    <div class="row">
        @include('admin.sidebar')

        <!--== BODY INNER CONTAINER ==-->
        
        <div class="sb2-2">
            <div class="sb2-2-2">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="active-bre"><a href="#"> Add Portfolio</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/casestudies"><i class="fa fa-backward" aria-hidden="true"></i> All Projects</a>
                    </li>
                </ul>
               
            </div>
            <div class="sb2-2-add-blog sb2-2-1">
                <h2>Add Project:</h2>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif
   
                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/add_CaseStudy" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="name" type="text"  value=""  class="validate">
                            <label for="list-title">Title</label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="client" type="text"  value=""  class="validate">
                            <label for="list-title">Client</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="video" type="text"  value=""  class="validate">
                            <label for="list-title">Video</label>
                        </div>
                    </div>
                    <br>
                    {{-- status, scope & service --}}
                    <div class="row">
                             
                        {{--  --}}
                        <div class="input-field col s12">
                            <select required name="status" class="icons" id="mydiv">
                              
                               
                                <option value="Ongoing">Ongoing</option>
                                <option value="Completed" selected>Completed</option>
                               
                            </select>
                            <label>Choose Status</label>
                        </div>
                       
                        <div class="section-space col s12"></div>
                        <div class="input-field col s12">
                            <select required name="service" multiple>
                              
                                <?php $Category = DB::table('categories')->get(); ?>
                                @foreach ($Category as $item)
                                    <option value="{{$item->labels}}">{{$item->labels}}</option>  
                                @endforeach
                            </select>
                            <label>Select Tags</label>
                        </div>

                        <div class="section-space col s12"></div>
                        <div class="input-field col s12">
                            <select required name="Consultant" class="icons" id="mydiv">
                              
                               
                              
                                
                                <?php $Category = DB::table('categories')->distinct()->get(['labels']);  ?>
                                @foreach ($Category as $item)
                                    <option value="{{$item->labels}}">{{$item->labels}}</option>  
                                @endforeach
                               
                            </select>
                            <label>Consulatation</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="list-title" name="location" type="text"  value=""  class="validate">
                            <label for="list-title">Location</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea required name="scope" class="materialize-textarea"></textarea>
                            <label for="textarea1">Scope</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea required id="article-ckeditor" name="content" class="materialilze-textarea" placeholder="content"></textarea>

                        </div>
                    </div>
                    <script src="https://amanivehiclesounds.co.ke/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'article_ckeditor' );
                        </script>
                <br><br>
                     {{-- Images --}}
                                 {{-- Preview --}}
                            {{-- Style --}}
                            <style>
                                .btn-file {
                                    position: relative;
                                    overflow: hidden;
                                }
                                .btn-file input[type=file] {
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    min-width: 100%;
                                    min-height: 100%;
                                    font-size: 100px;
                                    text-align: right;
                                    filter: alpha(opacity=0);
                                    opacity: 0;
                                    outline: none;
                                    background: white;
                                    cursor: inherit;
                                    display: block;
                                }

                                #img-upload{
                                    width: 100%;
                                }
                            </style>
                            {{-- Style --}}
                            <div class="row">
                                <div class="">
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_one" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_two" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                    <div class="input-field col s4">
                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_three" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                    <div class="input-field col s6">
                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_four" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                    <div class="input-field col s6">
                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_five" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="" id='img-upload'/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                            
                            {{--  --}}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" class="waves-effect waves-light btn-large" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--== BODY INNER CONTAINER ==-->

    </div>
</div>


@endsection