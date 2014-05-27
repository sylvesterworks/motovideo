<?php
class Channel extends API {
  public function list() {
    return ChannelModel->list()->toJson();
  }
  public function load() {}
  public function save() {}
  public function put() {}
  public function delete() {}
}