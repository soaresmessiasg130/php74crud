<?php
  include_once('conn.php');

  class Db {
    private $table_news = 'news';

    function createNews () {
      $sql_create_news = "
        insert into public.".$this->table_news
        ." (title, desc, author) "
        ." values (
          '".$this->cleanData($_POST['title'])."',
          '".$this->cleanData($_POST['desc'])."',
          '".$this->cleanData($_POST['author'])."'
        );
        
      ";

      return pg_affected_rows(pg_query($sql_create_news));
    }

    function getAllNews(){             
      $sql = "
        select * from public.".$this->table_news
          ." order by id desc 
      ";

      return pg_query($sql);
    }

    function getNewsById (){    
      $sql ="
        select * from public.".$this->table_news
          ." where id = ".$this->cleanData($_POST['id'])."
      ";

      return pg_query($sql);
    } 

    function deleteNews () {    
      $sql ="
        delete from public.".$this->table_news
          ." where id = ".$this->cleanData($_POST['id'])."
      ";
        
      return pg_query($sql);
    }

    function updateNews ($data = array()) {       
      $sql = "
        update public.".$this->table_news
        ." set title = '".$this->cleanData($_POST['title'])
        ."', desc = '".$this->cleanData($_POST['email'])
        ."', author = '".$this->cleanData($_POST['mobileno'])
        ."' where id = ".$this->cleanData($_POST['id']).";
      ";
    
      return pg_affected_rows(pg_query($sql));        
    }

    function cleanData ($var) {
      return pg_escape_string($var);
    }
  }
?>