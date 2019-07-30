<?php
/*clase actor con atributos y metodos*/
class Actor
{
  private $id;
  private $first_name;
  private $last_name;
  private $rating;
  private $favorite_movie_id;
  private $favorite_movie_name;

  public function __construct($first_name, $last_name, $rating)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->rating = $rating;
  }

  public function setFirstName($first_name)
  {
    $this->first_name = $first_name;
  }

  public function getFirstName()
  {
    return $this->first_name;
  }


  public function setLastName($last_name)
  {
    $this->last_name = $last_name;
  }

  public function getLastName()
  {
    return $this->last_name;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function getRating()
  {
    return $this->rating;
  }

/*si se elige la película favorita retorna el nombre de la película, sino retorna "no tiene favoritos"*/

  public function setFavoriteMovieName($favorite_movie_name)
  {
    $this->favorite_movie_name = $favorite_movie_name;
  }

  public function getFavoriteMovieName()
  {
    if ($this->favorite_movie_name) {
      return $this->favorite_movie_name;
    }
    return 'No tiene favoritos';
  }


  public function setFavoriteMovieID($favorite_movie_id)
  {
    $this->favorite_movie_id = $favorite_movie_id;
  }

  public function getFavoriteMovieID()
  {
    if ($this->favorite_movie_id) {
      return $this->favorite_movie_id;
    }
    return 'No tiene favoritos';
  }


  public function setID($id){
    $this->id=$id;
  }

  public function getID(){
    return $this->id;
  }
}



 ?>
