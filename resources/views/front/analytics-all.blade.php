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
                        <h1 class="page-header">All Traffic Analytics</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- Top -->
                <div class="row">

                </div>


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
                                            <th>Client IP</th>
                                            <th>Refer</th>
                                            <th>Location</th>
                                            {{-- <th>Is Robot</th> --}}
                                            <th>Agent</th>
                                            <th>Language</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Sessions as $Ses)
                                        <tr class="odd gradeX">
                                            <td>{{$Ses->client_ip}}</td>
                                            <td>
                                                <?php
                                                    $Refer = DB::table('tracker_referers')->where('id',$Ses->referer_id)->get();
                                                    if($Refer->isEmpty()){
                                                        echo "None";
                                                    }
                                                    foreach($Refer as $refer){
                                                        $ReferDomain = DB::table('tracker_domains')->where('id',$refer->domain_id)->get();
                                                        foreach($ReferDomain as $referDomain){
                                                           $refersDomain = $referDomain->name;
                                                           $refersURL = $refer->url;
                                                           echo "<b>Domain</b> ";
                                                           echo $refersDomain;
                                                           echo "<hr>";
                                                           echo "<b>Links</b> ";
                                                           echo $refersURL;
                                                        }
                                                    }
                                                ?>

                                            </td>
                                            <td>
                                                <?php
                                                    // $ip = $Ses->client_ip;
                                                    // $CountryName = \App\Http\Controllers\AnalyticsController::getIP($ip);
                                                    // echo $CountryName;
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
                                                <?php
                                                    $Lang = DB::table('tracker_languages')->where('id',$Ses->language_id)->get();

                                                    foreach($Lang as $lang){
                                                        $Lang = $lang->preference;
                                                        echo "<b>Agent</b>: ";
                                                        echo $Lang;
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <!-- /.table-responsive -->
                                <div class="well">
                                    <h4>Traffic Home</h4>
                                    {{-- <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p> --}}
                                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="{{url('/google-analytics')}}/">View Dashboard</a>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
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

</body>

</html>
