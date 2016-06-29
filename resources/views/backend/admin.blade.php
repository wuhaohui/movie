@extends("layouts.master")
@section("content")
    {!! Form::open(['url' => '/backend', 'class'=>'form-horizontal']) !!}
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">基础参数</h3>
            <div class="pull-right">
                {!! Form::submit('保存',['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        @include("layouts.errors")
        <div class="panel-body">
            <ul class="nav nav-tabs" style="margin-bottom: 25px">
                <li role="presentation" class="active"><a href="#tab-base"  aria-expanded="true" data-toggle="tab">基本信息</a></li>
                <li role="presentation" ><a href="#tab-profile" data-toggle="tab">编辑信息</a></li>
                <li role="presentation"><a href="#tab-discount" data-toggle="tab">促销信息</a></li>
                <li role="presentation"><a href="#tab-attribute" data-toggle="tab">商品属性</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-base" class="tab-pane  active">
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="siteUrl">siteUrl</label>
                        <div class="col-md-6">
                         {!! Form::input('text','siteUrl',null,['class'=>'form-control','placeholder'=>'siteUrl']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="siteName">siteName</label>
                        <div class="col-md-6">
                         {!! Form::input('text','siteName',null,['class'=>'form-control','placeholder'=>'siteName']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="keyword">keyword</label>
                        <div class="col-md-6">
                         {!! Form::input('text','keyword',null,['class'=>'form-control','placeholder'=>'keyword']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="siteDesc">siteDesc</label>
                        <div class="col-md-6">
                         {!! Form::input('text','siteDesc',null,['class'=>'form-control','placeholder'=>'siteDesc']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

