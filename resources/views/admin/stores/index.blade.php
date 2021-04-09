@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
              <th>#</th>
              <th>Loja</th>
              <th>Ações</th>
            </tr>
        </thead>
        <body>
            @foreach($stores as $store)
                <tr>
                  <td>{{$store->id}}</td>
                  <td>{{$store->name}}</td>
                  <td></td>
                </tr>
            @endforeach
        </body>
    </table>

    {{$stores->links()}}

@endsection
