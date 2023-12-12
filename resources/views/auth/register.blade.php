@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
  <form action="" method="post">
    <input type="text" name="name" placeholder="Nombre">
    <input type="text" name="lastname" placeholder="Apellidos">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Contraseña">
    <input type="submit" value="Registrar">
  </form>
@endsection