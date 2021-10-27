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
                    <li class="active-bre"><a href="#"> Edit Gallery</a>
                    </li>
                    <li class="page-back"><a href="{{url('/')}}/admin/galleries"><i class="fa fa-backward" aria-hidden="true"></i> All Gallerys Images</a>
                    </li>
                </ul>
               
            </div>
            <div class="sb2-2-Edit-blog sb2-2-1">
                <h2>Edit Gallery:</h2>
                <center>
                    @if(Session::has('message'))
                                  <div class="alert alert-success">{{ Session::get('message') }}</div>
                   @endif
   
                   @if(Session::has('messageError'))
                                  <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                   @endif
                </center>
                <form method="POST" action="{{url('/')}}/admin/edit_Gallery/{{$Gallery->id}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                 
                    {{-- status, scope & service --}}
                    <div class="row">
                             
                       
                       
                        <div class="input-field col s12">
                            <select required name="portfolio_id" class="icons" id="mydiv">
                              
                               
                               
                                    <?php $Selected = DB::table('cases')->where('id',$Gallery->portfolio_id)->get(); ?>
                                    @foreach ($Selected as $select)
                                        <option selected value="{{$select->id}}">{{$select->title}}</option>  
                                    @endforeach
                                </option>  
                                
                                <?php $Category = DB::table('cases')->get(); ?>
                                @foreach ($Category as $item)
                                    <option value="{{$item->id}}">{{$item->title}}</option>  
                                @endforeach
                               
                            </select>
                            <label>Case Study</label>
                        </div>
                    </div>
                    
            
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
                                            <label>Gallery Image</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <span class="btn btn-default btn-file">
                                                        Browse… <input name="image_one" type="file" id="imgInp">
                                                    </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                            </div>
                                            <img class="image-preview" style="width:auto;" src="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" id='img-upload'/>
                                        </div>
                                    </div>
                                   
                                  
                                </div>
                            </div>
                            {{-- Preview --}}

                            {{-- Images --}}
                            <br><br>
                            <div class="clearfix"></div>
                            <input type="hidden" name="image_one_cheat" value="{{$Gallery->image}}">
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