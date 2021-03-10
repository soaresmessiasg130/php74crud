<?php 
  include('header.php');

  $news = $obj->getAllNews();

  $sn=1;

  if (isset($_POST['update'])) {
    $news = $obj->getNewsById();

    $_SESSION['update'] = pg_fetch_object($news);

    header('location:edit.php');
  }

  if (isset($_POST['delete'])) {
     $ret_val = $obj->deleteNews();

     if($ret_val==1){
      echo "<script language='javascript'>";

      echo "alert('Notícia removida com sucesso.'){
        window.location.reload();
      }";

      echo "</script>";
    }
  }
?>
  <div class="container-fluid bg-3 text-center">
    <h3>MESSIAS SOARES PAIVA PINHO - CRUD</h3>
    
    <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'>
      <span class="glyphicon glyphicon-plus-sign"></span> 
      
      Criar Novo
    </a>

    <br>
    
    <div class="panel panel-primary">
      <div class="panel-heading">
        Notícias Atuais
      </div>
               
      <div class="panel-body">

      <table class="table table-bordered table-striped">
        <thead>
          <tr class="active">
            <th>Id</th>  
            <th>Título</th>       
            <th>Descrição</th>
            <th>Autor</th>
          </tr>
        </thead>

        <tbody>
          <?php while($new = pg_fetch_object($news)): ?>   
            <tr align="left">
              <td ><?=$user->id?></td>

              <td><?=$user->title?></td>

              <td><?=$user->desc?></td>

              <td><?=$user->author?></td>

              <td>
                <form method="post">
                  <input 
                    type="submit" 
                    class="btn btn-success" 
                    name= "update" 
                    value="Update">

                  <input 
                    type="submit" 
                    onClick="return confirm('Please confirm deletion');" 
                    class="btn btn-danger" 
                    name= "delete" 
                    value="Delete">

                  <input 
                    type="hidden" 
                    value="<?=$new->id?>" 
                    name="id">
                </form>
              </td>
            </tr>
          <?php endwhile; ?>   
        </tbody>
      </table>
    </div>
   
  </div>
  </div>  

<?php 
  include('footer.php');
?>