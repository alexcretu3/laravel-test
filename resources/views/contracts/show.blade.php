@extends('layoutall')
@section('content')
 <div class="panel panel-default">
 <div class="panel-heading">
 <h2>Vizualizare contract</h2>
 </div>

 <br>
 <div class="panel-body">

 <div class="form-group">
    <strong>Descriere: </strong> {{ $contract->descriere }}
 </div>
 <div class="form-group">
    <strong>Data intocmire: </strong> {{ $contract->data_intoc }}
 </div>

 <div class="form-group">
    <strong>CNP / CUI : </strong> {{ $contract->cnp_cui }}
 </div>

 <div class="form-group">
    <strong>Nume: </strong> {{ $contract->nume }}
 </div>

 <div class="form-group">
    <strong>Prenume: </strong> {{ $contract->prenume }}
 </div>

 <div class="form-group">
    <strong>Durata (luni): </strong> {{ $contract->durata_luni }}
 </div>

 <div class="form-group">
    <strong>Suma: </strong> {{ $contract->suma }}
 </div>


 <div class="pull-right">
    <a class="btn btn-default" href="{{ route('contracts.index')}}">Inapoi</a>
 </div>

 </div>
 </div>
@endsection