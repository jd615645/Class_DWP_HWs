<?php
  $title = $_POST['title'];
  $text = $_POST['text'];
  $date = $_POST['date'];
  $REG = '/[\n\r]+/';
  $ary = array();
  if(isset($title) && isset($text)) {
    if($title != '' && $date != '' && $text != '') {
      $ary['title'] = $title;
      $ary['text'] = $text;
      $ary['date'] = $date;
      $text = preg_replace($REG, '<br />', $text);
      $ary['html'] = "<div class='ui blue message'>".$title." ".$date."</div><p>".$text."</p>";

      echo json_encode($ary);

      $fp = fopen('bulletin.txt', 'a');
      fwrite($fp, ($ary['html']));
      fclose($fp);
    }
  }
?> 