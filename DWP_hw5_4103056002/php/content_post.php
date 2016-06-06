<?php
  $text = $_POST['text'];
  $REG = '/[\n\r]+/';
  $ary = array();
  if(isset($text)) {
    if($text != '') {
      $ary['text'] = $text;
      $text = preg_replace($REG, '<br />', $text);

      echo json_encode($ary);

      $fp = fopen('content.txt', 'w');
      fwrite($fp, ($ary['text']));
      fclose($fp);
    }
  }
?> 