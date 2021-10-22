@extends('templates.templates')
@section('content')
    <h1 class="text-center">PRODUTOS</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="products/create">
            <button class="btn btn-success">Cadastrar Produto</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Produto</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($products as $row)
                @php
                    $user=$row->find($row->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$row->produto}}</th>
                    <th scope="row">{{$user->nome}}</th>
                    <th scope="row">{{$row->preco}}</th>
                    <th scope="row">
                        <a href="{{url("products/$row->id/edit")}}">
                            <button class="btn btn-dark">Editar</button>
                        </a>
                        <a href="{{url("products/$row->id")}}" class="js-del" >
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection