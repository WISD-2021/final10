<h1>系統介面</h1>
<hr>
<h2>前端介面</h2>
<h3>首頁</h3>
<img src="https://i.imgur.com/3M6G9yc.jpg" width="400">
<h3>所有商品</h3>
<img src="https://i.imgur.com/cnszhYU.jpg" width="400">
<h3>商品分類</h3>
<img src="https://i.imgur.com/kF5WvEE.jpg" width="400">
<h3>商品詳細資訊</h3>
<img src="https://i.imgur.com/J0HgWRm.jpg" width="400">
<h3>購物車畫面</h3>
<img src="https://i.imgur.com/7dFKSrW.jpg" width="400">
<h3>結帳畫面</h3>
<img src="https://i.imgur.com/VTuUgBw.jpg" width="400">
<h3>會員中心－訂單查詢</h3>
<img src="https://i.imgur.com/L2P2Opq.jpg" width="400">
<h3>會員中心－訂單詳細資訊</h3>
<img src="https://i.imgur.com/LJRiimC.jpg" width="400">
<p>
<ol>
<hr style="border-bottom:0.2px dotted #f8f8f8;">
</ol>
<h2>後端介面</h2>
<h3>管理中心畫面</h3>
<img src="https://i.imgur.com/HIuyHyb.jpg" width="400">
<h3>管理中心－商品管理</h3>
<img src="https://i.imgur.com/HDTKGB4.jpg" width="400">
<h3>商品管理－新增商品</h3>
<img src="https://i.imgur.com/HXIerkK.jpg" width="400">
<img src="https://i.imgur.com/TvyE8aU.jpg" width="400">
<h3>商品管理－修改商品</h3>
<img src="https://i.imgur.com/z6Wr1Qf.jpg" width="400">
<h3>訂單管理－訂單檢視</h3>
<img src="https://i.imgur.com/DjarEdx.jpg" width="400">
<hr style="border-bottom:3px solid;">
<h2>ERD</h2>
<hr>
<img src="https://i.imgur.com/ihhDyOR.jpg" width="400">
<h2>關聯式綱要圖</h2>
<hr>
<img src="https://i.imgur.com/G7BfDLg.jpg" width="400">
<h2>欄位設計</h2>
<hr>
<p><h3>商品</h3>
<img src="https://i.imgur.com/RodKkGp.jpg" width="400"></p>
<p><h3>訂單</h3>
<img src="https://i.imgur.com/vsyxia4.jpg" width="400"></p>
<p><h3>訂單細項</h3>
<img src="https://i.imgur.com/SF3bdej.jpg" width="400"></p>
<p><h3>挑選商品</h3>
<img src="https://i.imgur.com/UPdma97.jpg" width="400"></p>

<hr style="border-bottom:3px solid;">
<h2>系統主要功能</h2>
<hr>
<h3>使用者：</h3>
<ol>
<li> 瀏覽平台首頁</li>
<li> 瀏覽商品型錄</li>
<li> 瀏覽某商品類別</li>
</ol>
<h3>會員：</h3>
<ol>
<li> 新增商品至購物車</li>
<li> 瀏覽購物車</li>
<li> 修改購物車中購買數量</li>
<li> 購物車刪除商品</li>
<li> 結帳</li>
<li> 瀏覽訂單狀況</li>
</ol>
<h3>平台人員：</h3>
<ol>
<li> 顯示所有商品資料</li>
<li> 新增商品資料</li>
<li> 修改商品資料</li>
<li> 刪除商品資料</li>
<li> 檢視訂單</li>
<li> 修改訂單狀態</li>
</ol>
<hr style="border-bottom:3px solid;">
<h2>額外使用模板與套件</h2>
<hr>

<h4>前台</h4>
<ul>
<li>主頁面：<a href="https://startbootstrap.com/template/shop-homepage">Shop Homepage</a></li>
<li>商品詳細資訊：<a href="https://startbootstrap.com/template/shop-item">Shop Item</a></li>
<li>會員中心：<a href="https://startbootstrap.com/template/sb-admin">SB Admin</a></li>
</ul>
<h4>後台</h4>
<ul>
<li>管理中心：<a href="https://startbootstrap.com/template/sb-admin">SB Admin</a></li>
</ul>
<hr style="border-bottom:3px solid;">
<h2>系統還原步驟</h2>
<hr>
<ol>
<li>開啟Cmder，輸入以下指令（以克隆、進入專案資料夾）：
<pre>
git clone https://github.com/WISD-2021/final10.git
cd final10
</pre>
</li>
<li>
復原專案
<pre>
composer install
composer run‐script post‐root‐package‐install
composer run‐script post‐create‐project‐cmd
</pre>
</li>
<li>
打開.env（<code>/final10/.env</code>）檔案，修改以下資料：
<pre>
DB_PORT=33060
DB_DATABASE=wisd01
DB_USERNAME=root
DB_PASSWORD=root
</pre>
</li>
<li>
開啟PHPMyAdmin，建立名稱為wisd01的資料庫
</li>
<li>
於Cmder中，輸入以下指令：
<pre>
php artisan migrate
</pre>
</li>
<li>
選擇wisd01.sql（<code>/final10/sql/wisd01.sql</code>）檔案，將資料匯入資料庫
</li>
<li>
在UwAmp下，點選Apache config，選擇port:8000，並於Document Root 輸入：
<pre>
{DOCUMENTPATH}/final10/public
</pre>
</li>
</ol>
<hr style="border-bottom:3px solid;">
<p>
<h2>初始專案與DB負責的同學</h2>
<hr>
<ul>
<li>初始專案建置：<a href="https://github.com/3A832098">3A832098 郭芷伶</a></li>
<li>資料庫關聯：<a href="https://github.com/3A832061">3A832061 莊怡萱（Product、Order、Admin、Customer）</a>、
<a href="https://github.com/3A832098">3A832098 郭芷伶（Cart、Item）</a></li>
</ul>
<hr style="border-bottom:3px solid;">
<h2>系統使用帳號</h2>
<hr>

<li>會員-帳號：<code>456@456</code>，密碼：<code>12345678</code></li><p>
<li>平台人員-帳號：<code>123@123</code>，密碼：<code>12345678</code></li>

<hr style="border-bottom:3px solid;">
<h2>系統開發人員</h2>
<hr>
<li><a href="https://github.com/3A832061">3A832061 莊怡萱</a></li>
<p><li><a href="https://github.com/3A832098">3A832098 郭芷伶</a></li>

<hr style="border-bottom:3px solid;">
<h2>工作分配</h2>
<hr>
<li><a href="https://github.com/3A832061">3A832061 莊怡萱</a></li>
<ul>
平台人員新增、修改、刪除商品、管理訂單狀態，
<br>轉換為訂單、會員顯示訂單
</ul>
<li><a href="https://github.com/3A832098">3A832098 郭芷伶</a></li>
<ul>首頁、所有商品、商品分類顯示，<br>
會員新增、修改、刪除購物車</ul>
<hr style="border-bottom:3px solid;">
