<h1>Listagem de clientes</h1>
<form class="form mb-3" action="<?= base_url('admin/getClients')?>" method="post" enctype='multipart/form-data'>
    <div class="mb-3 mt-3">
        <label class="form-label">Buscar:</label>
        <input name="busca" class="form-control" type="text">
    </div>  
    <input class="btn btn-info" type="submit" value="Enviar">
</form>
<table class="table table-striped">
    <tr>
        <th>Id do cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th colspan="5" >Ações</th>
    </tr>

    <?php
        foreach($arrayClients as $client){
    ?>
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
        
            <td>
                <a href="<?=base_url('admin/updateClient/'.$client['idClient'])?>"
                class="btn btn-warning">Alterar</a>

            </td>
            <td>
            <a href="<?=base_url('admin/deleteClient/'.$client['idClient'])?>"
            class="btn btn-danger">Deletar</
            </td>

        </tr>
    <?php
        }
    ?>
</table>   