<div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-cog" aria-hidden="true"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{ route('client.show', ['id' => $model->id]) }}">Ver</a>
        <a class="dropdown-item" href="{{ route('client.edit', ['id' => $model->id]) }}">Editar</a>
        <a class="dropdown-item" href="{{ route('client.confirm_delete', ['id' => $model->id]) }}">Excluir</a>
    </div>
