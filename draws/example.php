<?php
$host = "localhost";
$login = "dmitrychopey";
$password = "";
$dbname = "c9";

$connect = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
  
  
function getAllArticles($connect) //Функция для структурирования кода, можно и без нее
{

    $sql = "SELECT * FROM articles";
    $sth = $connect->prepare($sql);

    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
    
}

$all_articles = getAllArticles($connect);


?>

 <?php
  if (count($all_articles) > 0) {
    // output data of each row
  foreach ($all_articles as $article) {
      ?>
      
      <?php echo $article['title']; // Кароче вытягивашь по названию колонки в базе данных, например заголовок статьи в бд будет title?>   
      <?php echo $article['text']; ?>
      
      
      <?php
}
} else {
    echo "0 results";
}

?>