<h4><p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p></h4>

<!--mensaje de alerta -->
<!--<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
    button: "Aww yiss!",
  });
})
</script>-->

<!--alerta de no has iniciado sesion -->
<script type="text/javascript">
$(document).ready(function(){
  swal({
    title: "Aun no has iniciado sesion",
    text: "Ingrese ahora",
    type: "warning",
    closeOnConfirm: false,
    closeOnCancel: true,
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
  },
  function(isConfirm){
    if(isConfirm)
    window.location.href = "<?php echo URL ?>login";
  }
);
})
</script>
