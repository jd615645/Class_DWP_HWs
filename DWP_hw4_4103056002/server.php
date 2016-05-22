<?php
  $whichPage = $_POST['text'];
  $ary = array();
  if(isset($whichPage)) {
    $ele = "#main-page";
    $segment = array(
    "<div id='bulletin'>
      <h2 class='text_header'>最新公告</h2>
    </div>",
    "<div id='outline'>
      <h2 class='text_header'>課程綱要</h2>
      <table>
        <tr>
          <td>課程名稱</td>
          <td>動態網頁程式設計</td>
        </tr>
        <tr>
          <td>面授地點</td>
          <td></td>
        </tr>
        <tr>
          <td>課程目標</td>
          <td>Learn about server and client side web programming.</td>
        </tr>
        <tr>
          <td>面授時間</td>
          <td></td>
        </tr>
        <tr>
          <td>課程綱要</td>
          <td></td>
        </tr>
        <tr>
          <td>評量標準</td>
          <td></td>
        </tr>
        <tr>
          <td>參考書籍</td>
          <td></td>
        </tr>
        <tr>
          <td>修課條件</td>
          <td></td>
        </tr>
        <tr>
          <td>附件</td>
          <td></td>
        </tr>
      </table>
    </div>",
    "<div id='materials'></div>",
    "<div id='scores'></div>",
    "<div id='tools'></div>");
    $ary['ele'] = $ele;
    $ary['html'] = $segment[$whichPage];
    $ary['data'] = $whichPage;
    echo json_encode($ary);
  }
?> 