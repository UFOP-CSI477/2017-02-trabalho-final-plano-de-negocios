<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Parser UFOP</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/iCheck/square/blue.css'); ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition layout-boxed login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Parser</b>UFOP
  </div>
  <div class="login-box-body">
    <form action="<?php echo base_url('login/autenticar') ?>" method="post">
      <div class="has-error"><?php echo validation_errors(); ?><br></div>
      <div class="form-group has-feedback">
        <input type="text" name="ipUsuario" class="form-control" placeholder="Usuário">
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="ipSenha" class="form-control" placeholder="Senha">
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
      </div>
    </form>
    <br>
    <a href="<?php echo base_url('login/criarUsuario'); ?>" class="text-center">Criar Usuário</a>

  </div>
</div>
<script src="<?php echo base_url('assets/js/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/iCheck/icheck.min.js'); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
