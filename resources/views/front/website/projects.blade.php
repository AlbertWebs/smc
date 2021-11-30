@extends('front.master-sasema')
@section('content')
<div class="body">
    @include('front.website.header')
  

    <div role="main" class="main">
        <section class="page-header page-header-classic page-header-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                        <h1 data-title-border>Projects</h1>
                    </div>
                    <div class="col-md-4 order-1 order-md-2 align-self-center">
                        <ul class="breadcrumb d-block text-md-end">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Projects</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="card card-admin">
            <div class="container">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>

                <h2 class="card-title">Existing Project Pipeline(EPP)</h2>
                </header>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="datatable-ajax" data-url="//www.okler.net/previews/porto-admin/edge/ajax/ajax-datatables-sample.json">
                        <thead>
                            <tr>
                                <th width="15%">NO#</th>
                                <th width="25%">Project Name</th>
                                <th width="25%">Sector</th>
                                <th width="25%">Ticket Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Projects as $item)
                            <tr>
                                <th width="15%">{{$item->orders}}</th>
                                <th width="25%">{{$item->title}}</th>
                                <th width="25%">{{$item->sector}}</th>
                                <th width="25%">{{$item->ticket}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>

                <h2 class="card-title">Completed Projects</h2>
                </header>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="datatable-ajax" data-url="//www.okler.net/previews/porto-admin/edge/ajax/ajax-datatables-sample.json">
                        <thead>
                            <tr>
                                <th width="15%">NO#</th>
                                <th width="25%">Project Name</th>
                                <th width="25%">Sector</th>
                                <th width="25%">Ticket Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $Order = 1; ?>
                            @foreach ($ProjectsComplete as $item)
                            <tr>
                                <th width="15%">{{$Order}}</th>
                                <th width="25%">{{$item->title}}</th>
                                <th width="25%">{{$item->sector}}</th>
                                <th width="25%">{{$item->ticket}}</th>
                            </tr>
                            <?php $Order = $Order+1 ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        
    </div>

  
    @include('front.website.footnote')
    @include('front.website.footer')
</div>
@endsection