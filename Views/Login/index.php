
<div class="container">


<div class="container ">
    <div class=" row center-form justify-content-center ">
        <div class="login col-sm-4">
            <h4 class="row justify-content-center ">Inicia Sesion </h4><span class="glyphicon glyphicon-pencil"></span>
          <form class="form-signin" data-toggle="validate" method="post" action="<?php echo URL ?>login/verify" id="form-login">


          <div class="form-group ">
            <center> <label for="exampleInputEmail1">Usuario</label> </center>
            <input type="text" class="form-control" placeholder="Nombre de Usuario" id="usuario" name="usuario">

          </div>
          <div class="form-group">
            <center> <label for="exampleInputPassword1">Contraseña</label> </center>
            <input type="password" class="form-control"  placeholder="Password" id="contraseña" name="contraseña">
          </div>



          <div class="form-group">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">


       <button type="submit" name="login-submit" tabindex="6" class="form-control btn btn-success" id="entrar">Entrar</button>

          </div>
          </div>
          </div>

        </form>
        </div>

    </div>

</div>
<script type="text/javascript">

$("#entrar").click(function()
  {
    $("#form-login").submit();
  });

  //validaciones del formulario
  jQuery.validator.addMethod("texto", function(value)
  {
    return /^[a-záéóóúàèìíòùäëïöüñ.\s]+$/i.test(value);
  });

  $("#form-login").validate({
    errorClass:"invalid",
rules:
{
  usuario:
  {
    required:true,

  },
  contraseña:
  {
    required:true,

  },

},
messages:
{
  usuario:
  {
    required:"Usuario obligatorio",

  },
  contraseña:
  {
    required:"contraseña obligatoria",

  },
},
});

</script>

<br>
<br>
<br>
