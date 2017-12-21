<style>
  .espaco-vertical{
    background-color: #000080;
    color:white;
  }

  .container {
    padding-bottom: 5px;
    padding-top: 10px;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    }

  h1{
    text-align: center;
  }

   .box {
    padding-top: 20px;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
    width: 50%;
    height: 75%;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    /*background: white;*/
    font-weight: bold;
    border-top-style: solid;
    border-top-color: #696969;
    border-bottom-style: solid;
    border-bottom-color: #696969;
    border-width: 4px;
  }

  .caixa{
    padding-top: 75px;
    width: 100%;
    height: 100%;
  }

  .divbotao{
    padding-top: 10px;
    padding-bottom: 10px
  }

  body{
    text-align: center;
    background-image: url(./assets/imagens/back-calen.jpg);
    background-size: auto;
  }

  .btn-default{
    background-color:#191970;
    color:white;
    font-weight: bold;
    font-size: 20px;
    width: 250px;
    height: 50%;
  }
  
  .btn-default:hover{
    background-color:#4169E1;
    color:white;
  }

  .btnsair{
    background-color: #FA8072;
    border-radius: 8px;
    color:white;
    font-weight: bold;
    font-size: 20px;
    width: 100px;
    height: 50%; 
  }

  .btnsair:hover{
    background-color:red;
    color:white;
    font-weight: bold;
    font-size: 20px;
    width: 100px;
    height: 50%; 
}
  .parallax h1{
    text-shadow: 0 0 5px blue, 0 0 8px #3f3f3f;
    margin: auto;
    width: 50%;
    padding-top: 320px;
    text-align: center;
    color: white;
    border:3px;
}
 


</style>
<!DOCTYPE html>
<html lang="pt-br">

  <div id="home" class="parallax" >
      <h1>Calendario de Eventos iHouse</h1>
    
  </div>




<!-- <div class="caixa">
  <h1>CALENDARIO </h1>
<!--     <div class="container">
      <div class="box">
        <div class="divbotao">
        <a href="<?= base_url('Home/login') ?>"  class="btn btn-default">Eventos Abertos</a>
        </div><div class="divbotao">
        <a href="<?= base_url('Home/login') ?>" class="btn btn-default">Criar Evento</a>
        </div><div class="divbotao">
        <a href="<?= base_url('Home/login') ?>" class="btn btn-default">Meus Eventos</a>    
        </div>
      </div>
    </div>
      <div><button class="btnsair">Sair</button></div> -->
</div>
</html>