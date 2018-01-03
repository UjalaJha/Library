<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VESIT LIBRARY</title>
    <link rel="icon" href="{!!('img/logo.ico') !!}"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@include('inc.nav_admin')
<div id="wrapper">
    <!-- Navigation -->
    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h2>Member</h2>
                {!! Form::open(['method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Member Name')}}
                    {{ Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Add name']) }}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'Member ID')}}
                    {{ Form::number('value', '', ['class' =>'form-control', 'placeholder' => 'Add ID']) }}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'SEX')}}<br>
                    {{ Form::radio('sex', 'male') }} {{Form::label('title', 'male')}}<br>
                    {{ Form::radio('sex', 'female') }} {{Form::label('title', 'female')}}
                </div>
                <div class="form-group dropdown">
                    {!! Form::label('select', 'Category', ['class' => ' control-label'] )  !!}<br>
                    {!!  Form::select('select', ['DG' => 'Degree', 'MCA' => 'MCA'],  'S', ['class' => 'form-control dropdown' ]) !!}

                </div>
                <p></p>
                {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                <!-- /#wrapper -->

                <!-- jQuery -->
                <script src="vendor/jquery/jquery.min.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

                <!-- Metis Menu Plugin JavaScript -->
                <script src="vendor/metisMenu/metisMenu.min.js"></script>

                <!-- Morris Charts JavaScript -->
                <script src="vendor/raphael/raphael.min.js"></script>
                <script src="vendor/morrisjs/morris.min.js"></script>
                <script src="data/morris-data.js"></script>

                <!-- Custom Theme JavaScript -->
                <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

