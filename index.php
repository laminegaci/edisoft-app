
<?php require_once('includes/initialize.php') ;?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login</title>
   
  <link rel="stylesheet" type="text/css" href='dist/semantic.css'>
    <script src="dist/jquery-3.3.1.min.js"></script> 


  <style type="text/css">
    body {
        background-image:url(<?php echo url_for('images/edisoft-pack.jpg'); ?>);
        background-repeat:no-repeat;
        background-size:cover;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 500px;
    }
    .ui.raised.segment.grid {
    padding: 10px;
}
.field{
  width:100%;
}
  </style>
  
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
  
    <form class="ui large form" method="POST">
    
      <div class="ui raised segment grid">

                <div class="centered row">
                  
            <img src="<?php echo url_for('images/logo.png') ?>" class="">
                
                </div>

            <div class="row">
              
                <h2 class="ui blue image header centered row">
                <div class="content">
                    Se connecter
                </div>
                </h2>
            </div>
               <div class="row">
               <div class="field ">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input type="text" name="username" placeholder="nom d'utilisateur">
                </div>
                </div>
               </div>
                <div class="row">
                
                <div class="field ">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input type="password" name="password" placeholder="mot de passe">
                </div>
                </div>
                </div>

                <div class="row">
                
                  <input type="submit" name="ok" value="Connecter" class="ui blue submit button ">
                                 
                </div>

               
              
      </div>

      <div class="ui error message"></div>

    </form>
 
  
  </div>
  
</div>

<script src="dist/semantic.min.js"></script>

  <script>

$('.ui.form')
  .form({
    on: 'blur',
    fields: {
    
      username: {
        identifier: 'username',
        rules: [
          {
            type   : 'empty',
            prompt : 'merci d\'entrer votre nom'
          },
                   
        ]
      },
      password: {
        identifier: 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'merci d\'entrer votre mot de pass'
          },
          {
            type   : 'minLength[8]',
            prompt : 'votre mot de pass doit avoir au moin {ruleValue} caractère'
          }
        ]
      },
      
    }
  })
;
</script>

  



</body>

</html>
