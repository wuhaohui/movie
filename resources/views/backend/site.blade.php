@extends("layouts.main")
<style>
    .u-nav{height:50px;}
    .left-body{float:left;width:230px}
    .left-body .u-nav{color:#fff ;text-align: left;z-index: 999;}
    .right-body{margin-left:230px;}
    /*.right-body  .container-fluid {border-left: 1px solid #000000}*/
    .left-sidebar{
        background-color: #222d32;
        position: absolute;  top: 0;  left: 0;  margin-top: 50px;  min-height: 100%;  width: 230px;  z-index: 810;
    }
    .right-content{padding:15px}
    .content-header h1{font-size: 24px;margin: 0;}
    .content-header>h1>small {     font-size: 15px;  display: inline-block;  padding-left: 4px;  font-weight: 300;}
</style>
@section("main")
    <div class="clearfix" >
        <div class="left-body">
            <div class="u-nav palette  palette-belize-hole">
                管理
            </div>
            <div class="left-sidebar">
                <div class=""></div>
            </div>
        </div>


        <div class="right-body">
            <nav class="u-nav  palette palette-peter-river"></nav>
            <div class="right-content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">站点参数</h3>
                    </div>
                    <div class="panel-body">

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#identifier" data-toggle="tab">Home</a></li>
                            <li><a href="#identifier" data-toggle="tab">member</a></li>
                            <li><a href="#identifier" data-toggle="tab">Home</a></li>
                            <li><a href="#identifier" data-toggle="tab">Home</a></li>
                        </ul>
                        {!! Form::open(['url'=>'/backend/','class'=>'form-horizontal']) !!}
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">
                                <div style="height: 50px"></div>
                                <div class="form-group">
                                     <label class="col-md-2 control-label" for="siteurl">siteurl</label>
                                     <div class="col-md-6">
                                        {!! Form::input('text','siteurl',null,['class'=>'form-control','placeholder'=>'siteurl']) !!}
                                     </div>
                                </div>
                                
                                <div class="form-group">
                                     <label class="col-md-2 control-label" for="keyword">keyword</label>
                                     <div class="col-md-6">
                                        {!! Form::input('text','keyword',null,['class'=>'form-control','placeholder'=>'keyword']) !!}
                                     </div>
                                </div>
                                <div class="form-group">
                                     <label class="col-md-2 control-label" for="siteName">siteName</label>
                                     <div class="col-md-6">
                                         {!! Form::input('text','siteName',null,['class'=>'form-control','placeholder'=>'siteName']) !!}
                                     </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="footDesc">footDesc</label>
                                    <div class="col-md-6">
                                     {!! Form::input('text','footDesc',null,['class'=>'form-control','placeholder'=>'footDesc']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="svn">...</div>
                            <div class="tab-pane fade" id="ios">...</div>
                            <div class="tab-pane fade" id="java">...</div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection