<?php
  $whichPage = $_POST['text'];
  $ary = array();
  $ele = "#main-page";
  $segment = array(
  "<div id='bulletin'>
      <h2 class='text_header'>最新公告</h2>
      <div class='new_post'>
        <div>
          <div class='ui blue message'>eCampus problem 2016/04/13</div>
          <p>It is known that eCampus crashed around 10:00 p.m. on 4/12.</p>
          <p>To make up the crash issue, the deadline is extended to 4/14.</p>
          <p>Please remember to upload your homework 2 on time. </p>
        </div>
        <div>
          <div class='ui blue message'>Grades 2016/04/20</div>
          <p>選課系所: 資工系</p>
          <p>上課時間: 3567</p>
        </div>
      </div>
      <h2 class='text_header'>重要公告</h2>
      <div class='important_post'>
        <div>
          <div class='ui red message'>【預設公告】請遵守並協助推廣著作權、智慧財產權相關規範</div>
          <p>請遵守著作權、智慧財產權相關規範，勿非法使用、影印教科書。</p>
          <p>本校設有「校園智慧財產權宣導」專頁，連結網址 <a href='http://ipo.nchu.edu.tw/' target='_blank'>http://ipo.nchu.edu.tw</a> ，亦有特約法律顧問(詳細資訊請至本校秘書室網頁查詢)，連結網址<a href='http://140.120.49.185/%E8%A1%8C%E6%94%BF%E8%AD%B0%E4%BA%8B/%E6%B3%95%E5%BE%8B%E9%A1%A7%E5%95%8F/' target='_blank'>按這裡</a></p>
          <p>另外，教育部磨課師辦公室設有「智財權諮詢平臺」，連結網址 <a href='http://ipr.taiwanmooc.org/' target='_blank'>http://ipr.taiwanmooc.org</a> </p>
          <p>還有，免費授權的電子素材及電子書，連結網址 <a href='http://oers.taiwanmooc.org/' target='_blank'>http://oers.taiwanmooc.org</a> </p>
          <p>感謝您的配合</p>
        </div>
      </div>
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
  "<div id='content'>
    <div class='ui secondary menu'>
      <a class='item active'>大綱</a>
      <a class='item'>文件</a>
      <a class='item'>作業</a>
      <a class='item'>討論</a>
      <a class='item'>測驗</a>
      <a class='item'>問卷</a>
      <a class='item'>觀摩</a>
    </div>
    <div class='detail'>
      <div>
        <h2 class='text_header'>課程大綱</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>課程講義</h2>
        <table>
          <tr>
            <th>名稱</th>
            <th>所屬單元</th>
            <th>開放日期</th>
            <th>截止日期</th>
            <th>異動時間</th>
            <th>功能</th>
          </tr>
          <tr>
            <td>Server Side Programming</td>
            <td>不分單元</td>
            <td>沒有限制</td>
            <td>沒有限制</td>
            <td>2016/05/17 下午 01:19:50</td>
            <td><button class='ui purple button'>VIEW</button></td>
          </tr>
          <tr>
            <td>JavaScript</td>
            <td>不分單元</td>
            <td>沒有限制</td>
            <td>沒有限制</td>
            <td>2016/04/27 上午 11:08:41</td>
            <td><button class='ui purple button'>VIEW</button></td>
          </tr>
          <tr>
            <td>Cascading Style Sheets</td>
            <td>不分單元</td>
            <td>沒有限制</td>
            <td>沒有限制</td>
            <td>2016/03/14 上午 11:34:02</td>
            <td><button class='ui purple button'>VIEW</button></td>
          </tr>
          <tr>
            <td>HTML5</td>
            <td>不分單元</td>
            <td>沒有限制</td>
            <td>沒有限制</td>
            <td>2016/03/02 下午 12:44:09</td>
            <td><button class='ui purple button'>VIEW</button></td>
          </tr>
        </table>
        <h2 class='text_header'>參考資料</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>待繳作業</h2>
        <table>
          <tr>
            <th>作業名稱</th>
            <th>作業開始</th>
            <th>作業結束</th>
            <th>繳交型態</th>
            <th>逾期</th>
            <th>繳交情況</th>
            <th>分組狀況</th>
            <th>功能</th>
          </tr>
          <tr>
            <td>Homework 4</td>
            <td>2016/05/02<br>00:00:00</td>
            <td>2016/05/24<br>23:59:59</td>
            <td>個人繳交作業:可繳多次 (批閱以最後一次為主)</td>
            <td>逾期不可繳</td>
            <td>oo 個已繳 xx 個未繳</td>
            <td>未分組</td>
            <td><button class='ui orange button'>繳交</button></td>
          </tr>
        </table>
        <h2 class='text_header'>互評作業</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>逾期未繳作業</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>已繳作業</h2>
        <table>
          <tr>
            <th>作業名稱</th>
            <th>繳交時間</th>
            <th>繳交檔案</th>
            <th>作業開始</th>
            <th>作業結束</th>
            <th>繳交型態</th>
            <th>逾期</th>
            <th>繳交情況</th>
            <th>分組狀況</th>
            <th>功能</th>
          </tr>
          <tr>
            <td>Homework 3</td>
            <td>2016/04/25<br>23:53:47</td>
            <td>動態網頁程式設計第3次作業.zip</td>
            <td>2016/05/02<br>00:00:00</td>
            <td>2016/05/24<br>23:59:59</td>
            <td>個人繳交作業:可繳多次 (批閱以最後一次為主)</td>
            <td>逾期不可繳</td>
            <td>oo 個已繳 xx 個未繳</td>
            <td>未分組</td>
            <td><button class='ui teal button'>RESULT</button></td>
          </tr>
          <tr>
            <td>Homework 2</td>
            <td>2016/04/10<br>22:30:58</td>
            <td>動態網頁程式設計第2次作業.zip</td>
            <td>2016/04/13<br>00:00:00</td>
            <td>2016/04/26<br>23:59:59</td>
            <td>個人繳交作業:可繳多次 (批閱以最後一次為主)</td>
            <td>逾期不可繳</td>
            <td>oo 個已繳 xx 個未繳</td>
            <td>未分組</td>
            <td><button class='ui teal button'>RESULT</button></td>
          </tr>
          <tr>
            <td>Homework 1</td>
            <td>2016/03/22<br>19:56:32</td>
            <td>動態網頁程式設計第1次作業.zip</td>
            <td>2016/03/09<br>00:00:00</td>
            <td>2016/03/22<br>23:59:59</td>
            <td>個人繳交作業:可繳多次 (批閱以最後一次為主)</td>
            <td>逾期不可繳</td>
            <td>oo 個已繳 xx 個未繳</td>
            <td>未分組</td>
            <td><button class='ui teal button'>RESULT</button></td>
          </tr>
        </table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>討論區</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>待繳試卷</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>逾期未繳作業</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>已繳試卷</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>待繳問卷</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>逾期未繳問卷</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>已繳問卷</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
      <div style='display: none'>
        <h2 class='text_header'>討論觀摩區</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
        <h2 class='text_header'>作業觀摩區</h2>
        <table><tr><td>(尚無內容)</td></tr></table>
      </div>
    </div>
  </div>",
  "<div id='scores'>
    <h2 class='text_header'>成績</h2>
      <table>
        <tr>
          <th>主題</th>
          <th>完成狀態</th>
          <th>完成日期</th>
          <th>得分(or 等級)</th>
          <th>全班成績</th>
          <th>評語</th>
        </tr>
        <tr>
          <td>Homework 1</td>
          <td>已交</td>
          <td>2016/03/22</td>
          <td></td>
          <td></td>
          <td>-</td>
        </tr>
        <tr>
          <td>Homework 2</td>
          <td>已交</td>
          <td>2016/04/10</td>
          <td></td>
          <td></td>
          <td>-</td>
        </tr>
        <tr>
          <td>Homework 3</td>
          <td>已交</td>
          <td>2016/04/25</td>
          <td></td>
          <td></td>
          <td>-</td>
        </tr>
        <tr>
          <td>Homework 4</td>
          <td>未交</td>
          <td></td>
          <td></td>
          <td></td>
          <td>-</td>
        </tr>
      </table>
  </div>");
  if(isset($whichPage)) {
    $ary['ele'] = $ele;
    $ary['html'] = $segment[$whichPage];
    $ary['data'] = $whichPage;
    echo json_encode($ary);
  }
?> 