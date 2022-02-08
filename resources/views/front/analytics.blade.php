<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('favicon')

    <title>Sasema Management Company | Analytics Metrics</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('analytics/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('analytics/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{asset('analytics/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{asset('analytics/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('analytics/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('analytics/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('analytics/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">


        <div class="container">
            <!-- <div id="page-wrapper"> -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Traffic Analytics</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- Top -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-signal fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$CountVisitors}}</div>
                                        <div>Visitors Today!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/google-analytics/')}}/visitors">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$CountVisitorsThisMonth}}</div>
                                        <div>Visitors This Month</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/google-analytics/')}}/visitors/">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$CountVisitorsThisMonthRobot}}</div>
                                        <div>Robots This Month</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/google-analytics/')}}/visitors/bots">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$CountRobotVisitors}}</div>
                                        <div>Bot Visits Today</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">

                        <!-- /.panel -->
                        <div class="panel panel-default">

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                {{--  --}}
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                All Traffic Estimate
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Client IP</th>
                                                            {{-- <th>Refer</th> --}}
                                                            {{-- <th>Location</th> --}}
                                                            {{-- <th>Is Robot</th> --}}
                                                            <th>Agent</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($Sessions as $Ses)
                                                        <tr class="odd gradeX">
                                                            <td>
                                                                {{$Ses->id}}
                                                            </td>
                                                            <td>
                                                                {{$Ses->client_ip}}<br>
                                                                <hr>
                                                                <strong>Location</strong>:
                                                                <?php
                                                                    {{$Ses->location}}

                                                                ?>
                                                            </td>



                                                            <td class="center">
                                                                <?php
                                                                    $Agent = DB::table('tracker_agents')->where('id',$Ses->agent_id)->get();

                                                                    foreach($Agent as $agent){
                                                                        $AgentName = $agent->name;
                                                                        $Browser = $agent->browser;
                                                                        echo "<b>Agent</b>: ";
                                                                        echo $AgentName;
                                                                        echo "<hr>";
                                                                        echo "<b>Browser</b>: ";
                                                                        echo $Browser;
                                                                    }
                                                                ?>
                                                            </td>
                                                            <td class="center">
                                                                {{$Ses->created_at}}
                                                            </td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                                <!-- /.table-responsive -->

                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                <!-- /.row -->
                                {{--  --}}
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="morris-bar-chart"></div>
                                    </div>
                                    <!-- /.col-lg-8 (nested) -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->

                        <!-- /.panel -->
                    </div>
                </div>
                <!-- /.row -->
            <!-- </div> -->
            <!-- /#page-wrapper -->
        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('analytics/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('analytics/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('analytics/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('analytics/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('analytics/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{asset('analytics/data/morris-data.js')}}"></script>

     <!-- DataTables JavaScript -->
     <script src="{{asset('analytics/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('analytics/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
     <script src="{{asset('analytics/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('analytics/dist/js/sb-admin-2.js')}}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

    <?php
         $TrackDevicesMobile = DB::table('tracker_devices')->where('kind','Phone')->get(); $countMobile = count($TrackDevicesMobile);
         $TrackDevicesComputer = DB::table('tracker_devices')->where('kind','Computer')->get(); $countComputer = count($TrackDevicesComputer);
         $TrackDevicesOther = DB::table('tracker_devices')->where('kind','Tablet')->get(); $countOther = count($TrackDevicesOther);
    ?>

    <script>
        $(function() {


                Morris.Donut({
                    element: 'morris-donut-chart',
                    data: [{
                        label: "Download Sales",
                        value: 40
                    }, {
                        label: "In-Store Sales",
                        value: 40
                    }, {
                        label: "Mail-Order Sales",
                        value: 20
                    }],
                    resize: true
                });



                Morris.Donut({
                    element: 'morris-donut-chart-device',
                    data: [{
                        label: "Mobile",
                        value: {{$countMobile}}
                    }, {
                        label: "Computer",
                        value: {{$countComputer}}
                    }, {
                        label: "Other",
                        value: {{$countOther}}
                    }],
                    resize: true
                });
        });
    </script>

</body>

</html>
