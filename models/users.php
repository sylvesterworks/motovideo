<?php
class UserModel extends Model {

  // one to many assiciation to videos
  public function channels() {
    return $this->has_many('Channel');
  }

	public function login($password) {

	}

}
