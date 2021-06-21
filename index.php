<!DOCTYPE html>
<html>
    <head>
        <title>Resume</title>
        <meta : charset="utf-8">
        <link rel="stylesheet" href="hello.css">

    </head>
    <body>
        <header>JDC</header>
        <br>

        <section id="Brief" class="Word">

            <br>
            <h2>自我介紹</h2>
            <p>
                現在在國立中央大學資訊管理專業就讀。<br>
                有著管理和計算機知識，能夠完成一般的的Java編程、MYSQL數據庫和網頁編程等內容，能夠利用R/Excel完成數據分析，英語能力優秀。<br>
                擔任學生幹部，有著較強的活動組織和臨場應變能力。同時熱心公益活動，參與社會服務與志願者服務，現在亞太大學志工聯盟中承擔校園大使的角色。<br>
                課餘生活之中熱愛閱讀，覆蓋領域廣泛，包括文學小說、社會學、哲學等。熱愛運動，擅長多項運動項目，保持運動習慣。
            </p>
        </section>

        
        <section id="Experience">
            <br>
            <h2>過往經歷</h2>
            <table border="1">
                <thead>
                    <th>時期</th> <th>經歷</th> 
                </thead>

                <tbody>
                    <tr><td>2018.09-2019.6</td><td>高中學生會會長</td></tr>
                    <tr><td>2019.09-2020.6</td><td>大學學生會幹部</td></tr>
                    <tr><td>2019.09-2020.6</td><td>志工聯盟中央大學代表</td></tr>
                </tbody>
                
            </table>
        </section>

        <section id="Honor" class="Word">
            <br>
            <h2>獲得獎項</h2>
            <ul>
                <li>108xxx獎學金</li>
                <li>109xxx比賽第一名</li>
                <li>113學年優秀畢業生</li>
            </ul>
        </section>

        <section id="Skill">
            <br>
            <h2>技能</h2>
            <img src="skill.png" alt="skill">
        </section>

        <section id="convert">

            <h1>比特幣轉換美金小工具</h1>
            <br>

            <label>匯率日期</label>
            <input id= "date" type="date" value="" placeholder="2020-05-20">
            <input id= "bitcoin" type="text" value="" placeholder=" 10">
            <label >比特幣</label>
            <button id="convert" onclick="convertf()">轉換</button>
            <label id="result"> 為？美金</label>
            <br>

            <table>
                <thead  style="background-color: rgb(53, 156, 156)">
                    <tr>
                        <th><br>當前匯率<br><br></th>
                    </tr>

                </thead>

                <tbody style="background-color:#AEE1CD">
                    <tr><td id="table_content">1比特幣約為？美金</td></tr>    
                </tbody>
            </table>

            <script>
                function convertf(){
                    var date = document.getElementById('date').value;
                    var url ='https://api.coindesk.com/v1/bpi/historical/close.json?start='+date+'&end='+date;

                    fetch(url)
                    .then(function(response) {return response.json();})
                    .then(function(myJson) {

                        var change=myJson['bpi'][date];
                        document.getElementById('table_content').innerHTML = "1比特幣約為"+change+"美金";
                        var numbit=0;
                        numbit = parseFloat(document.getElementById('bitcoin').value);
                        if(isNaN(numbit)){alert("請輸入數字");}
                        document.getElementById('result').innerHTML = "為"+numbit*change+"美金";
                    })
                    .catch(function(err){
                        alert("請輸入正確的日期，輸入格式yyyy-mm-dd，");
                    })

                }            
            </script>      

        </section>

        <?php echo '<p>byebye</p>'; ?>

        <section>
            <br>
            <p><a href ="#Brief">Go Back</a></p>
        </section>

    </body>
</html>