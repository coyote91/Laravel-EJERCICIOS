<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>


    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


<!--<link rel="stylesheet" href="<?=URL::asset('css/style.css') ?>"> -->


  </head>
  <body>

<!---  INSTALAR LIBRERIA FORM DE LARAVEL COLLECTIVE--->

 <h1>Hola soy el index</h1>

    {!! Form::open(array('url' => 'foo/bar')) !!}
    {!!   Form::text('username', 'Username') !!}
     //
    {!!  Form::close() !!}

  <!-- FORMA 2 sin BLADE -->

    <?php echo  Form::open(array('url' => '/resultados'))   ?>
    <?php echo  Form::text('clave', 'Clave') ?>
    <?php echo  Form::password('password') ?>
    <?php echo Form::checkbox('name', 'value') ?>
    <?php echo Form::radio('name','value') ?>
     <?php echo Form::select('gender',['p'=>'hombre', 'z' =>'mujer']) ?>
     <?php echo Form::selectRange('number', 10, 100) ?>
     <?php echo Form::selectMonth('month') ?>
     <?php echo Form::number('name', 'value') ?>
     <?php echo Form::date('name', \Carbon\Carbon::now()) ?>
     <?php echo Form::select('size', array('L' => 'Large', 'S' => 'Small'), null, ['placeholder' => 'Pick a size...']) ?>
     <?php echo Form::select('animal', array(
                                                'Cats' => array('leopard' => 'Leopard'),
                                                'Dogs' => array('spaniel' => 'Spaniel'),
                                            )) ?>
     <?php echo Form::submit('Enviar') ?>
    <?php Form::close() ?>






  </body>
</html>
