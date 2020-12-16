<!DOCTYPE html>
<!-- saved from url=(0060)https://blackrockdigital.github.io/startbootstrap-sb-admin/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../SB Admin - Dashboard_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../SB Admin - Dashboard_files/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../SB Admin - Dashboard_files/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../SB Admin - Dashboard_files/sb-admin.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <link href="../css/bootstrapt.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">/* Chart.js */
        @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}

        * {box-sizing: border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;}

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }
        /* Admin Calendar Button */
        .DivPanel{margin:10px 0px 0px 0px;}
        .DivPanel ul li{ list-style-type:none; display: inline-block;padding:10px;background:#cccccc; color:black;}
        .DivPanel ul li a{color:black;}
        .DivPanel ul li a:hover{text-decoration:none;}
        .DivPanel ul li:hover{opacity:0.8;}
    </style>
</head>
<body id="page-top">

@if($VarAdmin=='AdminPanel')

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="#">Admin Paneli</a>

    <!-- Navbar Search -->
    <!-- Navbar -->

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <span>Ishchi oyna</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="/food">
                <span>Ovqtlar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/hizmat">
                <span>Xizmatlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/calendar">
                <span>Calendar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/comment">
                <span>Fikrlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/AddInfor">
                <span>Ovqat qushish</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/AddXizmat">
                <span>Xizmat qushish</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->

            <!-- Icon Cards-->
            <div class="row">

                <!-- Area Chart Example-->

                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        Ma`lumotlar oynasi</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        @if(isset($var))
                                <h4>{{ $Head }}</h4>
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="dataTable_length">
                                            <label>
                                                Show
                                                <select name="dataTable_length" aria-controls="dataTable"
                                                        class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label>
                                        </div></div>

                                    <div class="col-sm-12 col-md-6">
                                        <div id="dataTable_filter" class="dataTables_filter">

                                            <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" id="myInput"></label>

                                        </div></div></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name:
					                activate to sort column descending" style="width: 91px;">

                                                    Id

                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                         rowspan="1" colspan="1" aria-label="Position: activate to
                                                sort column ascending" style="width: 146px;">

                                                    Name

                                                </th>
                                                <th class="sorting" tabindex="0"
                                                         aria-controls="dataTable" rowspan="1" colspan="1"
                                                         aria-label="Office: activate to sort column ascending"
                                                         style="width: 64px;">

                                                    Text

                                                </th>
                                                <th class="sorting"
                                                         tabindex="0" aria-controls="dataTable" rowspan="1"
                                                         colspan="1" aria-label="Age: activate to sort
					                            column ascending" style="width: 30px;">

                                                    Menu

                                                </th>
                                                <th class="sorting" tabindex="0"
                                                         aria-controls="dataTable" rowspan="1"
                                                         colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                         style="width: 64px;">

                                                    Rasm

                                                </th>
                                                <th class="sorting" tabindex="0"
                                                         aria-controls="dataTable"
                                                         rowspan="1" colspan="1"
                                                         aria-label="Salary: activate to
					                            sort column ascending" style="width: 58px;">

                                                    Uchirish

                                                </th>
                                                <th class="sorting" tabindex="0"
                                                    aria-controls="dataTable"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to
					                            sort column ascending" style="width: 58px;">

                                                    Tahrirlash

                                                </th>
                                            </tr>
                                            </thead>
                                            <!--Pastki qismi-->
                                            <tfoot>
                                            <tr><th rowspan="1" colspan="1">
                                                    Id</th><th rowspan="1" colspan="1">
                                                    Name</th><th rowspan="1" colspan="1">
                                                    Text</th><th rowspan="1" colspan="1">
                                                    Menu</th><th rowspan="1" colspan="1">
                                                    Rasm</th>
                                                    <th rowspan="1" colspan="1">
                                                    Uchirish</th>
                                                    <th rowspan="1" colspan="1">
                                                    Tahrirlash</th>
                                            </tr>
                                            </tfoot>
                                            <tbody id="myTable">
                                            @foreach($var as $value)
                                            {{--Div1--}}
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->text }}</td>
                                                <td>{{ $value->menu }}</td>
                                                <td>{{ $value->img }}</td>
                                            @if(($value->menu!='Tashqi xizmatlar') && ($value->menu!='Toyhana xizmati'))
                                                <td><button><a href="/DeleteFood/{{ $value->id }}" style="text-decoration:none;color:black;">Delete</a></button></td>
                                                <td><button><a href="/EditFood/{{ $value->id }}" style="text-decoration:none;color:black;">Tahrirlash</a></button></td>
                                            @else
                                                <td><button><a href="/DeleteHizmat/{{ $value->id }}" style="text-decoration:none;color:black;">Delete</a></button></td>
                                                <td><button><a href="/EditHizmat/{{ $value->id }}" style="text-decoration:none;color:black;">Tahrirlash</a></button></td>
                                            @endif
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{--Calendar--}}
                        @elseif(isset($month))
                                <div style="width:900px;">
                                    <h1>Admin Calendari</h1>
                                    <div class="month">
                                        <ul>
                                            @foreach( $month as $value )
                                                <li class="prev"><a href="/pref/{{ ($value->id)-1 }}" style="text-decoration:none;">&#10094;</a></li>
                                                <li class="next"><a href="/pref/{{ ($value->id)+1 }}" style="text-decoration:none;">&#10095;</a></li>
                                                <li>
                                                    {{ $value->name }}<br>
                                                    <span style="font-size:18px">{{ $value->year }}</span>
                                                    @endforeach
                                                </li>
                                        </ul>
                                    </div>
                                    <ul class="weekdays">
                                        <li>Dush</li>
                                        <li>Sesh</li>
                                        <li>Chor</li>
                                        <li>Pays</li>
                                        <li>Juma</li>
                                        <li>Shan</li>
                                        <li>Yaks</li>
                                    </ul>
                                    <ul class="days">
                                        @foreach( $days as $value )
                                            @if( $value->day=='---' )
                                                <li> </li>
                                                @else
                                                    @if($CalenType=='naxor')
                                                        @if($value->naxor=='band')
                                                            <li><span class="active">{{ $value->day }}</span></li>
                                                        @else
                                                            <li>{{ $value->day }}</li>
                                                        @endif
                                                    @elseif($CalenType=='abed')

                                                        @if($value->abed=='band')
                                                            <li><span class="active">{{ $value->day }}</span></li>
                                                        @else
                                                            <li>{{ $value->day }}</li>
                                                        @endif

                                                    @elseif($CalenType=='vecher')

                                                        @if($value->vecher=='band')
                                                            <li><span class="active">{{ $value->day }}</span></li>
                                                        @else
                                                            <li>{{ $value->day }}</li>
                                                    @endif
                                                    @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            {{--Select end--}}
                                <div class="DivPanel">
                                    <h3 style="text-transform:uppercase;"> {{ $CalenType }} </h3>
                                    <ul>
                                        <li><a href="/naxor/{{ $day }}">Nahorgi osh</a></li>
                                        <li><a href="/abed/{{ $day }}">Obed</a></li>
                                        <li><a href="/vecher/{{ $day }}">Vecher</a></li>
                                    </ul>
                                    {{--forms insert--}}
                                    <h3>Bazaga kiritish</h3>
                                    <form action="/CalendarInsert" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="usr">Kun:</label>
                                            <input type="text" class="form-control" id="usr" name="day">
                                            <br/>
                                            <label for="sel1">Band qilish vaqti:</label>
                                            <br/>
                                            <select class="form-control" id="sel1" name="Time">
                                                <option value="naxor">Nahorgi</option>
                                                <option value="abed">Obed</option>
                                                <option value="vecher">Vecher</option>
                                            </select>
                                            <br/>
                                            <label for="sel1">Holatni kursatish:</label>
                                            <br/>
                                            <select class="form-control" id="sel1" name="Type">
                                                <option value="band">band qilish</option>
                                                <option value="---">Bekor qilish</option>
                                            </select>
                                            <br/>
                                            <label for="sel1">Oyni tanlang:</label>
                                            <select class="form-control" id="sel1" name="Month">
                                                @foreach($fullMonth as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <input type="submit" value="junatish" class="submit btn btn-primary btn-lg btn-block">
                                    </form>
                                    {{--forms updet--}}

                                </div>
                            @elseif(isset($comment))
                            {{--start--}}
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">

                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="dataTable_length">
                                                <label>
                                                    Show
                                                    <select name="dataTable_length" aria-controls="dataTable"
                                                            class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label>
                                            </div></div>

                                        <div class="col-sm-12 col-md-6">
                                            <div id="dataTable_filter" class="dataTables_filter">

                                                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable" id="myInput"></label>

                                            </div></div></div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name:
					                activate to sort column descending" style="width: 91px;">

                                                        Id

                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" aria-label="Position: activate to
                                                sort column ascending" style="width: 146px;">

                                                        Name

                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Email

                                                    </th>
                                                    <th class="sorting"
                                                        tabindex="0" aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Age: activate to sort
					                            column ascending" style="width: 30px;">

                                                        Text

                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Phone

                                                    </th>
                                                {{--start--}}
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Holati

                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Uchirish

                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Kursatish

                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="dataTable" rowspan="1"
                                                        colspan="1" aria-label="Start date:
                                                activate to sort column ascending"
                                                        style="width: 64px;">

                                                        Yashirish

                                                    </th>
                                                {{--finish--}}
                                                </thead>
                                                <!--Pastki qismi-->
                                                <tfoot>
                                                <tr><th rowspan="1" colspan="1">
                                                        Id</th><th rowspan="1" colspan="1">
                                                        Name</th><th rowspan="1" colspan="1">
                                                        Email</th><th rowspan="1" colspan="1">
                                                        Text</th><th rowspan="1" colspan="1">
                                                        Phone</th>
                                                    {{--start--}}
                                                    <th rowspan="1" colspan="1">
                                                        Uchirish
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Kursatish
                                                    </th>
                                                    <th rowspan="1" colspan="1">
                                                        Yashirish
                                                    </th>
                                                    {{--end--}}
                                                </tfoot>
                                                <tbody id="myTable">
                                                @foreach($comment as $value)
                                                    {{--Div1--}}
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $value->id }}</td>
                                                        <td>{{ $value->name }}</td>
                                                        <td>{{ $value->email }}</td>
                                                        <td>{{ $value->Text }}</td>
                                                        <td>{{ $value->phone }}</td>
                                                        <td>{{ $value->type }}</td>
                                                        <td><button><a href="/DeleteComment/{{ $value->id }}" style="color:black;">Delete</a></button></td>
                                                        <td><button><a href="/ShowComment/{{ $value->id }}" style="color:black;">Show</a></button></td>
                                                        <td><button><a href="/HideComment/{{ $value->id }}" style="color:black;">Hide</a></button></td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            {{--end--}}
                            {{--start add--}}
                        @elseif(isset($Type))
                                <div class="container" style="width:900px;">
                            @if($Type=='TypeVarXizmat')
                                    <h3>Xizmat qushish oynasi</h3>
                            @else
                                    <h3>Ovqat qushish oynasi</h3>
                            @endif

                                    <form action="/AddInformationType" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="usr">Name:</label>
                                            <input type="text" class="form-control" id="usr" name="name">
                                        </div>
                                    <label for="sel1">Menu-ni tanlang:</label>
                            @if($Type=='TypeVarXizmat')
                                        <select class="form-control" id="sel1" name="menu">
                                            <option value="Toyhana xizmati">Toyhana xizmati</option>
                                            <option value="Tashqi xizmatlar">Tashqi xizmatlar</option>
                                        </select>
                            @else
                                        <select class="form-control" id="sel1" name="menu">
                                            <option>Asosiy Ovqat</option>
                                            <option>Ikkinchi Ovqat</option>
                                            <option>Disert</option>
                                            <option>Ichimliklar</option>
                                        </select>
                            @endif
                                        <label for="comment">Text:</label>
                                        <textarea class="form-control" rows="5" id="comment" name="text"></textarea><br/>
                                        <label for="fname">Rasm tanlang</label><br/>
                                        <input type="file"  name="file" accept="image/jpeg,image/png,image/gif"><br/><br/>

                                        <input type="submit" value="junatish" class="submit btn btn-primary btn-lg btn-block">
                                    </form>
                                </div>
                            {{--update database food--}}
@elseif(isset($food))
           <!--start-->
                                                <div class="container" style="width:900px;">

                                                    <h3>{{ $Head }}</h3>
            <!--End-->
    @foreach($FoodVar as $value)
                                    <form action="/AddInformation" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="usr">Name:</label>
                                            <input value="{{$value->name}}" type="text" class="form-control" id="usr" name="name"/>
                                        </div>
                                        <input type="hidden" name="id" value="{{ $value->id }}"/>
                                        {{ csrf_field() }}
                                        <label for="sel1">Menu-ni tanlang:</label>
                {{--start hizmat--}}
                @if(($value->menu=='Toyhana xizmati')||($value->menu=='Tashqi xizmatlar'))
                                            <select class="form-control" id="sel1" name="menu">
                            @if($value->menu=='Toyhana xizmati')
                                                <option selected value="Toyhana xizmati">Toyhana xizmati</option>
                                                <option value="Tashqi xizmatlar">Tashqi xizmati</option>
                            @else
                                                <option value="Toyhana xizmati">Toyhana xizmati</option>
                                                <option selected value="Tashqi xizmatlar">Tashqi xizmati</option>
                            @endif
                                            </select>
                {{--end xizmat--}}
                @else
                                            <select class="form-control" id="sel1" name="menu">
                            @if($value->menu=='Asosiy Ovqat')
                                                <option selected value="Asosiy Ovqat">Asosiy Ovqat</option>
                                                <option value="Ikkinchi Ovqat">Ikkinchi Ovqat</option>
                                                <option value="Disert">Disert</option>
                                                <option value="Ichimliklar">Ichimliklar</option>
                            @elseif($value->menu=='Ikkinchi Ovqat')
                                                    <option value="Asosiy Ovqat">Asosiy Ovqat</option>
                                                    <option selected value="Ikkinchi Ovqat">Ikkinchi Ovqat</option>
                                                    <option value="Disert">Disert</option>
                                                    <option value="Ichimliklar">Ichimliklar</option>
                            @elseif($value->menu=='Disert')
                                                    <option value="Asosiy Ovqat">Asosiy Ovqat</option>
                                                    <option value="Ikkinchi Ovqat">Ikkinchi Ovqat</option>
                                                    <option selected value="Disert">Disert</option>
                                                    <option value="Ichimliklar">Ichimliklar</option>
                            @else
                                                    <option value="Asosiy Ovqat">Asosiy Ovqat</option>
                                                    <option value="Ikkinchi Ovqat">Ikkinchi Ovqat</option>
                                                    <option value="Disert">Disert</option>
                                                    <option selected value="Ichimliklar">Ichimliklar</option>
                            @endif
                                            </select>
                    @endif
                                        <label for="comment">Text:</label>
                                        <textarea class="form-control" rows="5" id="comment" name="text">{{$value->text}}</textarea><br/>
                                        <label for="fname">Rasm tanlang</label><br/>
                                        <input type="file"  name="file" accept="image/jpeg,image/png,image/gif"/><br/><br/>
                                        <label>Oldingi tanlangan rasm</label>
                                        <div>
                                            <img src="../upload/{{$value->img}}" width="150px"height="150px">
                                        </div><br>
                                        <input type="submit" value="junatish" class="submit btn btn-primary btn-lg btn-block">
                                    </form>
                                </div>
                            {{--add end--}}
        @endforeach
        {{--insert into food and hizmat--}}
@endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Created by Bahronov Husan</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->

    <!-- Logout Modal-->
    </div>
@endif

<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
    <!-- Bootstrap core JavaScript-->
    <script src="SB Admin - Dashboard_files/jquery.min.js.Без названия"></script>
    <script src="SB Admin - Dashboard_files/bootstrap.bundle.min.js.Без названия"></script>

    <!-- Core plugin JavaScript-->
    <script src="SB Admin - Dashboard_files/jquery.easing.min.js.Без названия"></script>

    <!-- Page level plugin JavaScript-->
    <script src="SB Admin - Dashboard_files/Chart.min.js.Без названия"></script>
    <script src="SB Admin - Dashboard_files/jquery.dataTables.js.Без названия"></script>
    <script src="SB Admin - Dashboard_files/dataTables.bootstrap4.js.Без названия"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="SB Admin - Dashboard_files/sb-admin.min.js.Без названия"></script>

        <!-- Demo scripts for this page-->
    <script src="SB Admin - Dashboard_files/datatables-demo.js.Без названия"></script>
    <script src="SB Admin - Dashboard_files/chart-area-demo.js.Без названия"></script>
</body>
</html>