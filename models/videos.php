<?php
class VideoModel extends Model {

  public function latest($limit) {
    return $this->find_many()
  }

  public function list($limit) {
    return $this->find_many();
  }

}
