<h1 style="text-align: center">Cambio de genero</h1>
<div class="container jumbotron " style="margin: auto ">
<table class="table">
    <thead>
    <tr >
        <th class="text-center">ID</th>
        <th>Genero</th>

    </tr>
    </thead>
    <tbody>
    @foreach($gen as $value)
    <tr>
        <td class="text-center">{{$value->id}}</td>
        <td>{{$value->genero}}</td>
        <td class="td-action text-right">
            <button type="button" rel="tooltip" title="View profile" class="btn btn-info btn-simple btn-xs">
                <i class="fa fa-user"></i>
            </button>
            <button type="button" rel="tooltip" title="Editar" class="btn btn-success btn-simple btn-xs">
                <i class="fa fa-edit"></i>
            </button>
            <button type="button" rel="tooltip" title="borrar" class="btn btn-danger btn-simple btn-xs">
                <i class="fa fa-times"></i>
            </button>
        </td>
    </tr>
        @endforeach
    </tbody>
</table>

</div>
