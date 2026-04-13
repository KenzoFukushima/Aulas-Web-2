@extends('layout/main')

@section('content')

<h1>Calculo de custo de viagem</h1>

<form action="/resultado" method="post">
    @csrf
    <label>Distancia a percorrer    (KM)</label>
    <input type="number" name="distancia">
    <br>
    <label>Consume medio    (KM/L)</label>
    <input type="number" name="consumoMedio" step="0.01">
    <br>
    <label>Preco atual do combustivel   (R$)</label>
    <input type="number" name="precoCombustivel" step="0.01">
    <br>
    <label>Valor gasto com Pedagio   (R$)</label>
    <input type="number" name="custoPedagio" step="0.01">
    <br>
    <button type="submit">Calcular</button>
</form>

@endsection