<?php
  $title = $_POST['title'];
  $local = $_POST['local'];
  $goal = $_POST['goal'];
  $time = $_POST['time'];
  $outline = $_POST['outline'];
  $standard = $_POST['standard'];
  $book = $_POST['book'];
  $conditional = $_POST['conditional'];
  $data = $_POST['data'];
  $ary = array();
  if(isset($title) && isset($local) && isset($goal) && isset($time) && isset($outline) && isset($standard) && isset($book) && isset($conditional) && isset($data)) {
    $ary['title'] = $title;
    $ary['goal'] = $goal;
    $ary['time'] = $time;
    $ary['outline'] = $outline;
    $ary['standard'] = $standard;
    $ary['book'] = $book;
    $ary['conditional'] = $conditional;
    $ary['data'] = $data;
    $ary['html'] = "
    <tr>
      <td>課程名稱</td>
      <td>".$title."</td>
    </tr>
    <tr>
      <td>面授地點</td>
      <td>".$local."</td>
    </tr>
    <tr>
      <td>課程目標</td>
      <td>".$goal."</td>
    </tr>
    <tr>
      <td>面授時間</td>
      <td>".$time."</td>
    </tr>
    <tr>
      <td>課程綱要</td>
      <td>".$outline."</td>
    </tr>
    <tr>
      <td>評量標準</td>
      <td>".$standard."</td>
    </tr>
    <tr>
      <td>參考書籍</td>
      <td>".$book."</td>
    </tr>
    <tr>
      <td>修課條件</td>
      <td>".$conditional."</td>
    </tr>
    <tr>
      <td>附件</td>
      <td>".$data."</td>
    </tr>";

    echo json_encode($ary);

    $fp = fopen('outline.txt', 'w');
    fwrite($fp, ($ary['html']));
    fclose($fp);
      $ary['local'] = $local;
  }
?> 