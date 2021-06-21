@extends('products.layout')
 
@section('content')
    <div class="row rowindex">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Quick Task CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">@lang('public.createproduct')</a>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <a href="locale/en">@lang('public.en')</a>
        <a href="locale/vi">@lang('public.vi')</a>
    </div>

    @if (Session::has('createSuccess'))
        <div class="alert alert-success">
            <p>@lang('public.procreatedsuccess')</p>
        </div>
    @elseif (Session::has('updateSuccess'))
        <div class="alert alert-success">
            <p>@lang('public.proupdatedsuccess')</p>
        </div>
    @elseif(Session::has('delSuccess')) 
        <div class="alert alert-success">
            <p>@lang('public.prodeletedsuccess')</p>
        </div>
    @endif
   
    <table class="table table-bordered tableproduct">
        <tr>
            <th>@lang('public.no')</th>
            <th>@lang('public.name')</th>
            <th>@lang('public.price')</th>
            <th>@lang('public.detail')</th>
            <th>@lang('public.action')</th>
        </tr>
        @foreach ($products as $key => $product)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">@lang('public.show')</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">@lang('public.edit')</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">@lang('public.delete')</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{ $products->links() }}
      
@endsection
