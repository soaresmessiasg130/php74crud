<?php 
  include('header.php');

  $news = $_SESSION['news'];

  if (isset($_POST['update']) and !empty($_POST['update'])){
    $ret_val = $obj->updateNews();

    if($ret_val==1){
      echo '<script type="text/javascript">'; 
      echo 'alert("Notícia atualizada.");'; 
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

    <br>
    
    <div class="panel panel-primary">
      <div class="panel-heading">Notícias Atuais</div>
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label class="control-label col-sm-2">Título:<span style='color:red'>*</span></label>
            <div class="col-sm-5">
                <input class="form-control" value="<?=$news->title?>" type="text" name="title" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">Descrição:<span style='color:red'>*</span></label>
            <div class="col-sm-5">
                <input class="form-control" value="<?=$news->desc?>" type="text" name="desc" required>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2">Autor:<span style='color:red'>*</span></label>
            <div class="col-sm-5">
                <input class="form-control" value="<?=$news->author?>" type="text" name="desc" required>
            </div>
          </div>    
        </form>
      </div>
    </div>  
  </div>
<?php 
  include('footer.php');
?>