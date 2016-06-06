<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>eCampus</title>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.6/semantic.min.css'>
  <link rel='stylesheet' href='./css/main.css'>
  <link rel='stylesheet' href='./css/navbar.css'>
  <script src='//code.jquery.com/jquery-2.2.0.min.js'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.6/semantic.min.js'></script>
  <script src='./js/main.js'></script>
</head>
<body>
  <div id='top-nav'>
    <ul>
      <li>eCampus</li>
      <li><sub>動態網頁程式設計(10422331)</sub></li>
      <li id='logout'>
        <a class='active' href='logout.php'>Log out</a>
      </li>
    </ul>
  </div>
  <div id='left-nav'>
    <ul>
      <li><a class='active' href='#home' value='0'>公告</a></li>
      <li><a href='#news' value='1'>介紹</a></li>
      <li><a href='#contact' value='2'>內容</a></li>
      <li><a href='#about' value='3'>評量</a></li>
    </ul>
  </div>
  <div id='main-page'>
    <div id='bulletin'>
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
      <h2 class='text_header' style='margin-top: 20px;'>重要公告</h2>
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
      <hr>
      <button class='ui teal button add_post'>新增文章</button>
      <div class='ui modal'>
        <i class='close icon'></i>
        <div class='header'>新增文章</div>
        <div class='content'>
          <div class='ui form'>
            <div class='field'>
              <div class='two fields'>
                <div class='field'>
                  <label>標題</label>
                  <input type='text' name='title'>
                </div>
                <div class='field'>
                  <label>日期</label>
                  <input type='text' name='date'>
                </div>
              </div>
            </div>
            <div class='field'>
              <label>內文</label>
              <textarea type='text' name='text'></textarea>
            </div>
          </div>
        </div>
        <div class='actions'>
          <div class='ui primary button btn_post'>發送</div>
        </div>
      </div>
    </div>
    <script src='./js/bulletin.js'></script>

  </div>
</body>
</html>