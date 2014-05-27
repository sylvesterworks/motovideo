<?php
class Post extends API {
  public function list() {
    return PostModel->list()->toJson();
  }
  public function load() {}
  public function save() {}
  public function put() {}
  public function delete() {}
}