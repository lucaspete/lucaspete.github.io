<?php 
echo form_open("contatos/salvar"); 
?>
<div class="form-group">
    <label>Nome</label>
    <input type="text" name='nome' class="form-control" placeholder="">
</div>

<div class="form-group">
    <label>telefone</label>
    <input type="text" name='telefone' class="form-control" placeholder="">
</div>

<div class="form-group">
    <label>Email</label>
    <input type="email" name='email' class="form-control" placeholder="">
</div>

<input type='submit' value='Salvar'>