<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tryst</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <script src="js/jquery-2.0.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/usuario.js"></script>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <style>
      .container-fluid {
        margin-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
       body {
        background-color: #eee;
      }
      .container-fluid > .content {
        background-color: #fff;
        padding: 20px;
   
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

  
    legend {
    font-weight: bold;
      color: #404040;
    }
    </style>
  </head>
  <body>

<!-- NAVBAR -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.php">Tryst</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="./index.php">Home</a></li>
              <li><a href="./index.php">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


<!-- LOGIN -->
    <div class="container-fluid" align = center>
    <div class="content" style="width:300px;">
      <div class="row" style="margin-left: 4px;">
        <div>
          <h2>Tryst</h2>
          <form method="post" id="login">
            <fieldset>
              <div class="controls">
                 Nome de usu&aacute;rio ou e-mail: <input type="text" id="username" name="username" placeholder="Nome de usu&aacute;rio ou e-mail" class="input-xlarge">
              </div>
              <div class="controls">
                 Senha: <input type="password" id="password" name="password" placeholder="Senha" class="input-xlarge">
              </div>
              <button class="btn btn-warning" type="submit" id="login">Entrar</button>
            </fieldset>
                    <!-- Button to trigger modal -->
          </form>
        </div>
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Cadastro</a>
      </div>
    </div>


    
       
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h3 id="myModalLabel">Register</h3>
      </div>
      <div class="modal-body">


        <form class="form-horizontal" id="register" method='post' action='?' align="left"  >
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">Nome Completo</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="user_name" name="user_name" placeholder = "Nome completo">
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="input01">Data de Nascimento</label>
            <div class="controls">
              <input type="date" class="input-large" id="data_nascimento" name="data_nascimento" placeholder="">             
            </div>
          </div>
                    

          <div class="control-group">
          <label class="control-label" for="input01">Sexo</label>
            <div class="controls">
              <select name="gender" id="gender" value="gender" required>
                  <option value="male">Masculino</option>
                  <option value="female">Feminino</option>
                  <option value="female">Outro</option>
                           
              </select>
               
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="input01">Nome de usu&aacute;rio</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="user_user_name" name="user_username" placeholder="Nome de usu&aacute;rio">             
            </div>
          </div>


         
          <div class="control-group">
            <label class="control-label" for="input01">E-mail</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="user_email" name="user_email" placeholder="E-mail">
             
            </div>
          </div>

      
      <div class="control-group">
        <label class="control-label" for="input01">Senha</label>
        <div class="controls">
          <input type="password" class="input-xlarge" id="pwd" name="pwd" placeholder="Senha">
             
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="input01">Confirme a senha</label>
          <div class="controls">
            <input type="password" class="input-xlarge" id="cpwd" name="cpwd" placeholder="Confirma&ccedil;&atilde;o de Senha">
             
          </div>
      </div>
      
      
      <div class="control-group">
        <label class="control-label" for="input01"></label>
            <div class="controls">
             <button type="submit" class="btn btn-warning" rel="tooltip" title="first tooltip"
             id="register">Criar a conta</button>
             
            </div>
      
      </div>
      </fieldset>
    </form>
    </div>
    </div>
    </div><!--/row-->
    </div><!--/span-->
    </div><!--/row-->
      </div>
    </div>

  </body>
</html>
   