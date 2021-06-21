@extends('products.layout')

@section('content')
    <div class="row rowshow">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>@lang('public.showproduct')</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('public.name'):</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('public.price'):</strong>
                {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>@lang('public.detail'):</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
@endsection
