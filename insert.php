<?php 
  include('header.php');

  if (isset($_POST['submit']) and !empty($_POST['submit'])) {
    $ret_val = $obj->createNews();

    if($ret_val==1){
      echo '<script type="text/javascript">'; 
      echo 'alert("Notícia cadastrada com sucesso.");'; 
      echo 'window.location.href = "index.php";';
      echo '</script>';
    }
  }
?>
  <div class="container-fluid bg-3 text-center">    
    <h3>MESSIAS SOARES PAIVA PINHO - CRUD</h3>
    
    <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'>
      <span class="glyphicon glyphicon-plus-sign"></span> 
      
      Lista
    </a>

    </br>
    
    <div class="panel panel-primary">
      <div class="panel-heading">Notícias Atuais</div>
        <form class="form-horizontal" method="post">
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-sm-2">Título:<span style='color:red'>*</span></label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" name="title" required>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2">Descrição:<span style='color:red'>*</span></label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" name="desc" required>
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2">Autor:<span style='color:red'>*</span></label>
              <div class="col-sm-5">
                  <input class="form-control" type="text" name="author" required>
              </div>
            </div>
          </div>      
      </form>
    </div>
  </div>  
<?php 
  include('footer.php');
?>