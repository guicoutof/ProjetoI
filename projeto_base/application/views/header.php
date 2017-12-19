<!-- Esse é o menu, nós sempre utilizamos esse menu, mas nada te impede de utilizar outro. Cada <a> do menu cria os href utilizando a função base_url('caminho'). Essa função aponta a pasta raiz do projeto e depois voce monta o caminho, lembrando da regra pasta_raiz/nome_do_controller/funcao/parametros(opcional) -->
<!-- Pensando bem, na realidade o menu oficial nao é esse, pois eu tirei a importação do fonte awesome do projeto e o menu ficou feio, mas o negócio é fazer com a certa. Quando for desenvolver algo, peça o menu para alguem. -->
<div class="nav-side-menu">
  <div class="brand">iHouse</div>
  <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
  <div class="menu-list">

    <ul id="menu-content" class="menu-content collapse out">
      <li>
        <a href="<?= base_url() ?>">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
      </li>

      <li data-toggle="collapse" data-target="#service" class="collapsed">
        <a href="#"><spam class=""></spam> Menu 2 <span class="glyphicon glyphicon-arrow-down"></span></a>
      </li>  
      <ul class="sub-menu collapse" id="service">
        <a href="<?= base_url("controller/funcao") ?>"><li>Submenu 2.1</li></a>
        <a href="<?= base_url("controller/funcao") ?>"><li>Submenu 2.2</li></a>
      </ul>

      <li data-toggle="collapse" data-target="#new" class="collapsed">
        <a href="#"><span class=""></span> Menu 3 <span class="glyphicon glyphicon-arrow-down"></span></a>
      </li>
      <ul class="sub-menu collapse" id="new">
        <a href="<?= base_url("controller/funcao") ?>"><li>Submenu 3.1</li></a>
        <a href="<?= base_url("controller/funcao") ?>"><li>Submenu 3.2</li></a>
      </ul>

      <li>
        <a href="<?= base_url('Pessoa/index') ?>">
          <span class=""></span> Cadastrar Pessoa
        </a>
      </li>
      
    </ul>
  </div>
</div>