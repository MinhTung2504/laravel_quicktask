@extends('products.layout')

@section('content')
    <div class="row rowcreate">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>@lang('public.addproduct')</h3>
            </div>
        </div>
    </div>

    {{-- Kiem tra xem co loi nao khong --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>@lang('public.whoop')</strong> @lang('public.wronginput')<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>@lang('public.name'):</strong>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>@lang('public.price'):</strong>
                    <input type="text" name="price" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>@lang('public.detail'):</strong>
                    <textarea class="form-control formcontrollcss" name="detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">@lang('public.addproduct')</button>
            </div>
        </div>

    </form>
@endsection
