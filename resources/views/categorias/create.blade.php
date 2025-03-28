

<div class="card-title redondo">

<h2 class="text-center sombra white sombraTexto redondo p-2">Categorias</h2>
</div>

<div class="card-body alert alert-light">
<form class="form-group"action="{{ url('/categorias')}}" method="post">
    <!---Enviar informacion solo de este formulario-->
@csrf
<label for="nombreC">Nombre:</label>
<br>
<input class="form-control"type="text" name="nombreC" id="nombreC" placeholder="ingresa el nombre de la categoria">

<hr>
<button class="btn btn-outline-dark"type="submit">Agregar categoria</i></button>
</form>

</div>




