@extends('layoutall')
@section('content')
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
   <h2>Lista contractelor incarcate</h2>
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/contracts/create" class="btn btn-default">Adaugare contract nou</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
    <th width="20">Numar</th>
    <th>Descriere</th>
    <th>Data intocmire</th>
    <th>CNP / CUI</th>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Durata (luni)</th>
    <th>Suma (RON)</th>
    <th width="300">Actiune</th>
 </tr>
 @if (count($contracts) > 0)
 @foreach ($contracts as $key => $contract)
 <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $contract->descriere }}</td>
    <th>{{ $contract->data_intoc }}</th>
    <th>{{ $contract->cnp_cui }}</th>
    <th>{{ $contract->nume }}</th>
    <th>{{ $contract->prenume }}</th>
    <th>{{ $contract->durata_luni }}</th>
    <th>{{ $contract->suma }}</th>
    <td>
        <a class="btn btn-success" href="{{route('contracts.show',$contract->id) }}">Vizualizare</a>
        <a class="btn btn-primary" href="{{route('contracts.edit',$contract->id) }}">Modificare</a>
        {{ Form::open(['method' => 'DELETE','route' => ['contracts.destroy', $contract->id],'style'=>'display:inline']) }}
        {{ Form::submit('Sterge', ['class' => 'btn btndanger']) }}
        {{ Form::close() }}
    </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">Nu exista contracte!</td>
 </tr>
 @endif
 </table>
<!-- Introduce nr pagina -->
{{$contracts->render()}}
 </div>
 </div>
@endsection