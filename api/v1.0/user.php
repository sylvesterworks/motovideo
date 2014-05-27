<?php
class User extends API {
  public function list() {
    return UserModel->list->toJson();
  }
  public function load() {}
  public function save() {}
  public function put() {}
  public function delete() {}
}