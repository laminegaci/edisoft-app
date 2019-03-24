<?php 

function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }

function u($string="") {
  return urlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}




////////////////////////Validation functions (check admin class)
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  function is_blank($value) {
    return !isset($value) || trim($value) === '';
  }

  function has_length_greater_than($value, $min) {
    $length = strlen($value);
    return $length > $min;
  }
  function has_length_less_than($value, $max) {
    $length = strlen($value);
    return $length < $max;
  }
  function has_length_exactly($value, $exact) {
    $length = strlen($value);
    return $length == $exact;
  }

  function has_length($value, $options) {
    if(isset($options['min']) && !has_length_greater_than($value, $options['min'] - 1)) {
      return false;
    } elseif(isset($options['max']) && !has_length_less_than($value, $options['max'] + 1)) {
      return false;
    } elseif(isset($options['exact']) && !has_length_exactly($value, $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  function has_unique_username($username, $current_id="0") {
    // Need to re-write for OOP
    $admin = Admin::find_by_username($username);
    if($admin === false ){
      // rah unique 
      return true;
    }else{
      return false;
    }
  }
?>