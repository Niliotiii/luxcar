<?php

//header
include_once 'includes/header.php';
?>

<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <div class="row center">
          <div class="col s12">
            <h3 class="light materialize-red-text">Adicionar Carro</h3>

            <form action="php_action/create.php" method="POST">
              <div class="input-field col s12 m4">
                <input type="text" name="marca" id="marca">
                <label for="marca">MARCA</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">MODELO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="descricao" id="descricao">
                <label for="descricao">DESCRIÇÃO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="mod_fab" id="mod_fab">
                <label for="mod_fab">MODELO/FABRICAÇÃO</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="cor" id="cor">
                <label for="cor">COR</label>
              </div>
              <div class="input-field col s12 m4">
                <input type="text" name="placa" id="placa">
                <label for="placa">PLACA</label>
              </div>
              <div class="input-field col s12">
                <input type="text" name="valor" id="valor">
                <label for="valor">VALOR (R$)</label>
              </div>
              <button type="submit" name="btn_adicionar" class="btn vermelho-vivo"> ADICIONAR</button>

            </form>

          </div>
        </div>
        <br /><br />
      </div>
    </div>

<?php
//footer
include_once 'includes/footer.php';
?>