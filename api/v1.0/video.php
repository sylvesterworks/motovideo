<?php
class Video extends API {
  public function list() {
    return VideoModel->list()->toJson();
  }
  public function load() {}
  public function save() {}
  public function put() {}
  public function delete() {}
}