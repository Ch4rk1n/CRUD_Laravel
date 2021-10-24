@extends('templates.templates')
@section('content')

    <h1 class="text-center">@if(isset($products))Editar @else Cadastrar @endif</h1>
    @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif
    @if(isset($products))
    <form name="formEdit" id="formEdit" method="post" action="{{url("products/$products->id")}}">
        @method('PUT')
    @else
        <form name="formCad" id="formCad" method="post" action="{{url('products')}}">
    @endif
        @csrf
        <div class="form-group">
            <label for="Produto">Produto</label>
            <input type="text" class="form-control" name="produto" id="produto" value="{{$products->produto ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="Preco">Preço</label>
            <input type="number" class="form-control" name="preco" id="preco" value="{{$products->preco ?? ''}}" required>
        </div>
        <div class="form-group">
            <label for="Preco">Usuario</label>
            <select class="form-control" name="id_user" id="id_user" required>

                <option value="{{$products->user->id ?? ''}}">{{$products->user->name ?? 'Autor'}}</option>
                @foreach($users as $user)
                    <option  value=" {{$user->id}} ">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="@if(isset($products))Editar @else Cadastrar @endif">
    </form>
@endsection
