<?php 
echo form_open("contatos/salvaralteracao"); 
?>

<input type='hidden' name='id' value='<?php echo $tabela[0]->id; ?>'>

<div class="form-group">
    <label>Nome</label>
    <input type="text" name='nome' class="form-control" value='<?php echo $tabela[0]->nome; ?>' >
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text" name='telefone' class="form-control" value='<?php echo $tabela[0]->telefone; ?>' >
</div>

<div class="form-group">
    <label>Email</label>
    <input type="Email" name='email' class="form-control" value='<?php echo $tabela[0]->email; ?>' >
</div>

<input type='submit' value='Salvar'>