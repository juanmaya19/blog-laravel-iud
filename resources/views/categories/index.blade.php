@extends('layouts.app')

@section('content')

<div style="font-family: Arial, Helvetica, sans-serif; margin: 0 auto; width: 80%">
  <h2 style="text-align: center; margin-bottom: 30px">Lista Categorias existentes</h2>
  <table style="border-collapse: collapse; width: 100%">
    <thead style="background-color: #343a40; color: white">
      <tr>
        <th style="padding: 10px; border: 1px solid white">Columna 1</th>
        <th style="padding: 10px; border: 1px solid white">Columna 2</th>
        <th style="padding: 10px; border: 1px solid white">Columna 3</th>
      </tr>
    </thead>
    <tbody>
      <tr style="background-color: #f8f9fa">
        <td style="padding: 10px; border: 1px solid #ddd">Valor 1</td>
        <td style="padding: 10px; border: 1px solid #ddd">Valor 2</td>
        <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top">Esta celda esta alineada en la parte superior</td>
      </tr>
      <tr style="background-color: #f8f9fa">
        <td style="padding: 10px; border: 1px solid #ddd">Valor 5</td>
        <td style="padding: 10px; border: 1px solid #ddd">Valor 6</td>
        <td style="padding: 10px; border: 1px solid #ddd; vertical-align: top">Esta celda esta alineada en la parte superior</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection
