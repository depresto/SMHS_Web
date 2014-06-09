<!DOCTYPE html>
<html>
<head>
    <TITLE>海星高級中學</TITLE>
    <META CONTENT="text/html; charset=UTF-8" HTTP-EQUIV="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <META NAME="Keyword" CONTENT="海星,海星高級中學,海星中學,花蓮縣,天主教海星高中,天主教海星中學,花蓮海星中學,花蓮海星高中">

    <meta name="author" content="WayneHuang" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <LINK REL="Shortcut Icon" HREF="smhs_logo.ico"></LINK>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--[if lt IE 9]>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript">
        var _page = '<?php if (!$page = array_keys($_GET))$page[0]='home'; 
                            switch ($page[0]){
                                case 'about': $target='html/about_smhs.html';
                                              break;
                                case 'student_affairs': $target='html/student_affairs.html';
                                                        break;
                                case 'home': $target='html/main.html';
                                             break;
                                default: $target='main.html';
                            }
                            echo $target; ?>';
    </script>

</head>

<body>
    <header class="page_title" id="page_title">
        <div id="top_segment"></div>
        <a id="logo" href="?home" onClick="changeContent()">
            <img id="smhs_logo" src="smhs_logo.png">
            <img id="smhs_name" src="smhs.png">
        </a>

        <nav class="top_bar">
            <ul class="nav">
                <li>
                    <a href="?about" onClick="changeContent()">關於海星</a>
                </li>
                <li>
                    <a>行政單位</a>
                    <ul id="ul_affair">
                        <li>
                            <a href="principal/principal.html" target="_self">校長室</a>
                        </li>
                        <li>
                            <a href="academic_affairs/academic_affairs.html" target="_self">教務處</a>
                        </li>
                        <li>
                            <a href="?student_affairs" onClick="changeContent()">學務處</a>
                        </li>
                        <li>
                            <a href="general_affairs/general_affairs.html" target="_self">總務處</a>
                        </li>
                        <li>
                            <a href="counseling_affairs/counseling_affairs.html" target="_self">輔導室</a>
                        </li>
                        <li>
                            <a href="personnel_matters/personnel_matters.html" target="_self">人事室</a>
                        </li>
                        <li>
                            <a href="accounting_affairs/accounting_affairs.html" target="_self">會計室</a>
                        </li>
                        <li>
                            <a href="library/library.html" target="_self">圖書館</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>教學單位</a>
                    <ul id="ul_teach">
                        <li>
                            <a href="teach_unit/1.html" target="_blank">普通科</a>
                        </li>
                        <li>
                            <a href="teach_unit/2.html" target="_blank">綜合高中</a>
                        </li>
                        <li>
                            <a href="teach_unit/3.html" target="_blank">資訊應用</a>
                        </li>
                        <li>
                            <a href="teach_unit/4.html" target="_blank">應用英語</a>
                        </li>
                        <li>
                            <a href="teach_unit/5.html" target="_blank">幼兒保育</a>
                        </li>
                        <li>
                            <a href="teach_unit/6.html" target="_blank">服裝設計</a>
                        </li>
                        <li>
                            <a href="teach_unit/7.html" target="_blank">廣告設計</a>
                        </li>
                        <li>
                            <a href="teach_unit/8.html" target="_blank">原住民音樂文化專班</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>最新消息</a>
                    <ul id="ul_news">
                        <li>
                            <a href="http://203.71.0.16/ann/index.php">公告欄</a>
                        </li>
                        <li>
                            <a href="http://203.71.0.16/ann2/index.php">榮譽榜</a>
                        </li>
                        <li>
                            <a href="http://203.71.0.4/photostation/" target="_blank">海星相簿</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a>海星家庭</a>
                    <ul id="ul_family">
                        <li>
                            <a href="http://203.71.0.15/junior/welcome.htm" target="_blank">國中部</a>
                        </li>
                        <li>
                            <a href="http://www1rcsmps.hlc.edu.tw/" target="_blank">海星國小</a>
                        </li>
                        <li>
                            <a href="http://web.rcsmps.hlc.edu.tw/b/hskmenu/default2.asp" target="_blank">海星幼兒園</a>
                        </li>
                        <li>
                            <a href="http://www.smhs.hlc.edu.tw/ST.ANGELA%20CENTER/ST.ANGELA%20CENTER%20HOME.HTM" target="_blank">聖安琪中心</a>
                        </li>
                        <li>
                            <a href="http://www.wtuc.edu.tw/" target="_blank">文藻外語大學</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        
    </div>

    <footer>
        <h2 id="system">校務系統</h2>
        <div id="footer_left">
            <div class="left">
                <a href="http://203.71.0.13/online/information.asp" target="_blank">成績輸入系統</a>
                <br/>
                <a href="http://203.71.0.13/online/information.asp" target="_blank">輔導檔案系統</a>
                <br/>
                <a href="http://203.71.0.13/sceval/" target="_blank">平時成績系統</a>
                <br/>
                <a href="http://203.71.0.13/place/" target="_blank">場地借用系統</a>
                <br/>
                <a href="http://cc2.smhs.hlc.edu.tw/schooladmin/" target="_blank">行政管考系統</a>
                <br/>
                <a href="http://203.71.0.4/" target="_blank">雲端檔案系統</a>
                <br/>
                <a href="http://203.71.0.13/online_asso/" target="_blank">社團管理系統</a>
                <br/>
                <a href="http://203.71.0.13/online/information.asp" target="_blank">學生記錄系統</a>
                <br/>
                <a href="http://203.71.0.13/sceval/" target="_blank">學生評量系統</a>
                <br/>
            </div>
            <div class="right">
                <a href="https://www.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23FFFFFF&src=og7l9rpticnga7neo5gj56ec98%40group.calendar.google.com&color=%232F6213&ctz=Asia%2FTaipei" target="_blank">學校行事曆</a>
                <br/>
                <a href="http://cc2.smhs.hlc.edu.tw/guestbook/" target="_blank">校務留言板</a>
                <br/>
                <a href="http://203.71.0.13/online/information.asp" target="_blank">調代課系統</a>
                <br/>
                <a href="http://www.smhs.hlc.edu.tw/smhs/self_design/%E8%BA%AB%E4%BB%BD%E8%A3%9C%E5%8A%A9%E6%B5%81%E7%A8%8B%E8%A1%A8.pdf" target="_blank">助學金辨識</a>
                <br/>
                <a href="http://mail.smhs.hlc.edu.tw/" target="_blank">電子信箱</a>
                <br/>
                <a href="http://203.71.0.13/winch/" target="_blank">選課系統</a>
                <br/>
                <a href="http://203.71.0.13/repair/" target="_blank">公物維修</a>
                <br/>
                <a href="http://cyberhood.smhs.hlc.edu.tw/tw/" target="_blank">電子公文</a>
                <br/>
                <a href="http://203.71.0.4/photostation/" target="_blank">海星相簿</a>
                <br/>
            </div>
        </div>
        <div id="about_strip"></div>
        <div id="about_smhs">
            <div id="footer_logo">
                <img src="smhs_logo_1.png"></img>
            </div>
            <div id="footer_info">
                <p>
                    <img src="images/address.png"></img>
                    <a href="https://maps.google.com.tw/maps?expflags=enable_star_based_justifications:true&ie=UTF8&cid=11794874372395933871&q=%AE%FC%ACP%B0%AA%A4%A4&iwloc=A&gl=TW&hl=zh-TW" target="_blank">971花蓮縣新城嘉新村嘉新路36號</a>
                </p>
                <p>
                    <img src="images/phone.png"></img>
                    <a href="tel:+886-03-8223116">03-8223116</a>
                </p>
                <p>
                    <img src="images/fax.png"></img>
                    <a href="tel:+886-03-8242562">03-8242562</a>
                </p>
                <p>
                    <a href="http://www.smhs.hlc.edu.tw/smhs/index_data/school_map.png" target="_blank">校園平面圖</a>
                </p>
                <p>
                    <a href="http://www.smhs.hlc.edu.tw/smhs/index_data/10201telphone.pdf" target="_blank">分機查詢</a>
                </p>
            </div>
        </div>
        <h2 id="test">檢定升學</h2>
        <h2 id="digital">數位學園</h2>
        <div id="footer_right">
            <div class="right">
                <a href="http://mod.naer.edu.tw/mod1/" target="_blank">MOD影片教學網</a>
                <br/>
                <a href="http://www4.inservice.edu.tw/" target="_blank">教師在職進修網</a>
                <br/>
                <a href="http://www.smhs.hlc.edu.tw/smhs/advance_plan/index.html" target="_blank">海星優質進修網</a>
                <br/>
                <a href="http://www.smhs.hlc.edu.tw/quality2/" target="_blank">海星優質化網站</a>
                <br/>
                <a href="http://cc2.smhs.hlc.edu.tw/nano/index.htm" target="_blank">海星奈米種子網</a>
                <br/>
                <a href="http://www.smhs.hlc.edu.tw/%E6%80%A7%E5%88%A5%E5%B9%B3%E7%AD%89%E6%95%99%E8%82%B2%E7%B6%B2/Gender.htm" target="_blank">海星性平教育網</a>
                <br/>
                <a href="http://www.smhs.hlc.edu.tw/smhs/history_student_hw/history_student_hw.html" target="_blank">網界博覽會作品</a>
                <br/>
                <a href="http://www.cc123.idv.tw/main.php" target="_blank">CC123平台</a>
                <br/>
                <a href="http://203.71.0.6:7070/" target="_blank">大家說英語</a>
                <br/>
            </div>
            <div class="left">
                <a href="http://www.ceec.edu.tw/" target="_blank">大學入學考試中心</a>
                <br/>
                <a href="http://enable.ncu.edu.tw/" target="_blank">身障學生升學甄選</a>
                <br/>
                <a href="self_design/身份補助流程表.pdf" target="_blank">學生助學金辨識</a>
                <br/>
                <a href="http://www.techadmi.edu.tw/" target="_blank">技專校院招生</a>
                <br/>
                <a href="http://www.air.ttct.edu.tw/" target="_blank">原住民資訊網</a>
                <br/>
                <a href="https://caac.jctv.ntut.edu.tw/" target="_blank">四技申請入學</a>
                <br/>
                <a href="https://union42.jctv.ntut.edu.tw/" target="_blank">四技登記分發</a>
                <br/>
                <a href="http://www.labor.gov.tw/" target="_blank">勞委會中辦事</a>
                <br/>
                <a href="http://major.ceec.edu.tw/search/" target="_blank">漫步在大學</a>
                <br/>
                <a href="https://www.gept.org.tw/" target="_blank">全民英檢</a>
                <br/>
                <a href="http://www.techadmi.edu.tw/search/" target="_blank">技訓網</a>
                <br/>
            </div>
        </div>
        <div id="DesignBy">
            Design by
            <a href="https://www.facebook.com/Wayne.Huang.g">Wayne Huang</a>&nbsp;&
            <a href="https://www.facebook.com/chonstsai">CHONS</a>
        </div>
    </footer>

    <div id="toTop">^</div>
    <div id="process">Process</div>
    <script type="text/javascript">
    </script>

</body>

</html>