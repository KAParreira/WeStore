@extends('template.base')

<link rel="stylesheet" href="{{url('CSS/contato.css')}}">

@section('content')

<div class="Conteudo">
   <h1>Contato</h1>
</div>

<div class="BoxContainer">
   <form>
      <br>
      <div class="boxForm">
         <label>E-mail</label>
         <input type="text" id="email">
      </div>
      <div class="boxForm">
         <label>Celular</label>
         <input type="number" id="celular">
      </div>
      <h3>Mensagen</h3>
      <div class="boxForm">
         <textarea id="mensagen" placeholder="Escreva uma mensagem aqui!"></textarea>
      </div>
   </form>

   <div class="redes">
      <h4>Instagram</h4>
      <h4>Twitter</h4>
      <h4>Youtube</h4>
      <h4>LinkedIn</h4>
   </div>
</div>

@endsection