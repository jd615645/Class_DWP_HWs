<?php
  $title = $_POST['title'];
  $text = $_POST['text'];
  $date = $_POST['date'];
  $ary = array();
  if(isset($title)) {
    if($title != '') {
      $ary['title'] = $title;
      $ary['text'] = $text;
      $ary['date'] = $date;
      $ary['html'] = "<div class='ui blue message'>".$title." ".$date."</div><p>".$text."</p>";
      echo json_encode($ary);

      $fp = fopen('bulletin.json', 'a');
      fwrite($fp, json_encode($ary));
      fclose($fp);
    }
  }
?> 