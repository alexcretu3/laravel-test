@extends('layoutall')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading"><h2>Modificare informatii contract</h2></div>
 <div class="panel-body">


 @if (count($errors) > 0)
 <div class="alert alert-danger">
 <strong>Eroare:</strong>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif


 {!! Form::model($contract, ['method' => 'PATCH','route' => ['contracts.update', $contract->id]]) !!}


 <div class="form-group">
    <label for="descriere">Descriere</label>
    <textarea name="descriere" class="form-control" rows="3">{{ $contract->descriere }}</textarea>
 </div>
 
 <div class="form-group">
    <label for="data_intoc">Data intocmire</label>
    <input type="date" name="data_intoc" class="form-control" value="{{$contract->data_intoc }}">
 </div>

 <div class="form-group">
    <label for="cnp_cui">CNP / CUI</label>
    <input type="text" name="cnp_cui" class="form-control" value="{{$contract->cnp_cui }}">
 </div>

 <div class="form-group">
    <label for="nume">Nume</label>
    <input type="text" name="nume" class="form-control" value="{{$contract->nume }}">
 </div>

 <div class="form-group">
    <label for="prenume">Prenume</label>
    <input type="text" name="prenume" class="form-control" value="{{$contract->prenume }}">
 </div>

 <div class="form-group">
    <label for="durata_luni">Durata (luni)</label>
    <input type="text" name="durata_luni" class="form-control" value="{{$contract->durata_luni }}">
 </div>

 <div class="form-group">
    <label for="suma">Suma (RON)</label>
    <input type="text" name="suma" class="form-control" value="{{$contract->suma }}">
 </div>

 <div class="form-group">
 <input type="submit" value="Salvare Modificari" class="btn btn-info">
 
 <a href="{{route('contracts.index') }}" class="btn btndefault">Inapoi</a>
 </div>
 {!! Form::close() !!}
 </div>
 </div>
@endsection