
<?php 
namespace application\models;

use application\core\Model;

class News extends Model{

  public $class;

  //модель для страницы новостей
  public function getNews(){
    //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $result
   $result = $this->db->row('SELECT title, date, content FROM news');
   return $result;
    //выполняем запрос в бд и сохраняем даенные из бд в переменную массив $data
    //$data = $this->db->row('SELECT menuitem FROM topmenu WHERE id = :id', $params);
    //debug($data);
  }

}

?>