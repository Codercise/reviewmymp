<?php

  $users = array(
    "user1"=>
      array(
        "best_friends"=>
        array(
          0 => "best_friend",
          1 => "best_friend",
          2 => "best_friend",
        ),
        "score" => 0
      ),
    "user2" =>
      array(
        "best_friends" => array(
            0 => "best_friend",
            1 => "best_friend",
            2 => "best_friend"
          ),
        "score" => 0
      )
  );
function getBests($username, $users) {
  $user = $users[$username];
  $best_friends = array();
  foreach ($user["best_friends"] as $key => $value) {
    array_push($best_friends, $value);
  }
  return array_values($best_friends);
}
$bests = getBests('user1', $users);
var_dump($bests);
?>