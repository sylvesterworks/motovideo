<?php
// setup the API class for shared methods that get overridden.
class API {
  public function list() {}
  public function load() {}
  public function save() {}
  public function put() {}
  public function delete() {}
}

// include all API subclasses
include_once('v1.0/channel.php');
include_once('v1.0/post.php');
include_once('v1.0/user.php');
include_once('v1.0/video.php');