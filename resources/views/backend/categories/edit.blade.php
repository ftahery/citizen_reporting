@extends('backend.layout')
@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i> {{ trans('backend.category_edit') }}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backend.home') }}</a> /
                    <a href="">{{ trans('backend.categories') }}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{route("categories_list")}}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                {{Form::open(['route'=>['categories_update',$Category->id],'method'=>'POST', 'files' => true])}}
                @if(Helper::GeneralWebmasterSettings("en_box_status"))
                <div class="form-group row">
                    <label for="name_en"
                           class="col-sm-2 form-control-label">{!!  trans('backend.category_name').' (EN)' !!}
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('name_en',$Category->name_en, array('placeholder' => '','class' => 'form-control','id'=>'name_en','required'=>'', 'dir'=>trans('backend.ltl    '))) !!}
                    </div>                   
                </div>
                <div class="form-group row">
                    <label for="name_ar"
                           class="col-sm-2 form-control-label">{!!  trans('backend.category_name').' (AR)' !!}
                    </label>                   
                    <div class="col-sm-10">
                        {!! Form::text('name_ar',$Category->name_ar, array('placeholder' => '','class' => 'form-control','id'=>'name_ar','required'=>'', 'dir'=>trans('backend.rtl    '))) !!}
                    </div>
                </div>
                @endif
                @if(Helper::GeneralWebmasterSettings("en_box_status"))
                    <div class="form-group row">
                        <label for="status"
                            class="col-sm-2 form-control-label">{!!  trans('backend.status') !!}</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                    {!! Form::radio('status','1',($Category->status==1) ? true : false, array('id' => 'status','class'=>'has-value')) !!}
                                    <i class="dark-white"></i>
                                    {{ trans('backend.active') }}
                                </label>
                                <br>
                                <label class="ui-check ui-check-md" style="margin-bottom: 5px;">
                                    {!! Form::radio('status','0',($Category->status==0) ? true : false, array('id' => 'status','class'=>'has-value')) !!}
                                    <i class="dark-white"></i>
                                    {{ trans('backend.notActive') }}
                                </label>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! trans('backend.update') !!}</button>
                        <a href="{{route("categories_list")}}"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! trans('backend.cancel') !!}</a>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
@endsection