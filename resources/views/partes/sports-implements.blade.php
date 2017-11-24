<br>
<br>
<!-- State input-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">

                <div class="container-fluid">
                    <div class="row">
                        <legend style="text-align: center"><h2>Implementos Deportivos</h2></legend>
                        <br>
                        <br>


                        <div class="form-group">
                            <label class="col-md-7" for="fn" style="text-align: right; font-size: large">
                                Seleccione el tipo de implemento que desea consultar
                            </label>
                            <select class="col-md-2" style="font-size: large">
                                <option value="Disponible">Seleccione</option>
                                <option value="Disponible">Balones</option>
                                <option value="No Disponible">Listar Todo</option>
                            </select>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<br>
<br>
<table id="mytable" class="table table-bordred table-striped">
    <thead>

    <th style="text-align: center"><input type="checkbox" id="checkall" /></th>
    <th style="text-align: center">Referencia</th>
    <th style="text-align: center">Implemento</th>
    <th style="text-align: center">Cantidad Total</th>
    <th style="text-align: center">Editar</th>
    <th style="text-align: center">Eliminar</th>
    </thead>
    <tbody>

    <tr>
        <td style="text-align: center"><input type="checkbox" class="checkthis" /></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    </tbody>
</table>
<script>
    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>