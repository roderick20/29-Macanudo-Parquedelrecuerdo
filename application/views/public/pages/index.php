<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function searchForId($id, $array1) {
    foreach ($array1 as &$array) {
        foreach ($array as $key => $val) {
            if ($key == 'Category' && $val == $id) {
                return $array;
            }
        }
    }
    return null;
}
?>
<link rel='stylesheet' id='ultimate-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/style.min.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-slick-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/slick.min.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-icons-css'  href='/assets/Ultimate_VC_Addons/assets/css/icons.css?ver=3.16.22' type='text/css' media='all' /> 
<link rel='stylesheet' id='ultimate-animate-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/animate.min.css?ver=3.16.22' type='text/css' media='all' /> 

<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/ultimate-params.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/slick.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/jquery-appear.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='/assets/Ultimate_VC_Addons/assets/min-js/slick-custom.min.js?ver=3.16.22'></script> 

<!--<link rel='stylesheet' id='animate-css-css'  href='http://www.parquedelaesperanza.com/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=5.7' type='text/css' media='all' />--> 
<link rel='stylesheet' id='ult-background-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/background-style.min.css?ver=3.16.22' type='text/css' media='all' /> 

<style>
    @font-face {
        font-family: 'ult-silk';
        src:url(/assets/Ultimate_VC_Addons/assets/css/fonts/ult-silk.eot);
        src:url(/assets/Ultimate_VC_Addons/assets/css/fonts/ult-silk.eot) format('embedded-opentype'),
            url(/assets/Ultimate_VC_Addons/assets/css/fonts/ult-silk.woff) format('woff'),
            url(/assets/Ultimate_VC_Addons/assets/css/fonts/ult-silk.ttf) format('truetype'),
            url(/assets/Ultimate_VC_Addons/assets/css/fonts/ult-silk.svg) format('svg');
        font-weight: normal;
        font-style: normal;
    }
    [class^="ultsl-"], [class*=" ultsl-"] {
        font-family: 'ult-silk';
        speak: none;
        font-style: normal;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        outline: none; -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .ultsl-arrow-right:before {
        content: "\e600";
    }
    .ultsl-arrow-left:before {
        content: "\e601";
    }
    .ultsl-arrow-right2:before {
        content: "\e602";
    }
    .ultsl-arrow-left2:before {
        content: "\e603";
    }
    .ultsl-arrow-right3:before {
        content: "\e604";
    }
    .ultsl-arrow-left3:before {
        content: "\e605";
    }
    .ultsl-checkbox-unchecked:before {
        content: "\e606";
    }
    .ultsl-checkbox-partial:before {
        content: "\e607";
    }
    .ultsl-radio-checked:before {
        content: "\e608";
    }
    .ultsl-radio-unchecked:before {
        content: "\e609";
    }
    .ultsl-record:before {
        content: "\e60a";
    }
    .ultsl-stop:before {
        content: "\e60b";
    }
    .ultsl-arrow-left4:before {
        content: "\e60c";
    }
    .ultsl-arrow-right4:before {
        content: "\e60d";
    }
    .ultsl-arrow-left5:before {
        content: "\e60e";
    }
    .ultsl-arrow-right5:before {
        content: "\e60f";
    }
    .ultsl-arrow-left6:before {
        content: "\e610";
    }
    .ultsl-arrow-right6:before {
        content: "\e611";
    }

</style>

<!--<link rel='stylesheet' id='ult-background-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/background-style.min.css' type='text/css' media='all' /> 
<link rel='stylesheet' id='ultimate-style-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/style.min.css' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-slick-css'  href='/assets/Ultimate_VC_Addons/assets/min-css/slick.min.css' type='text/css' media='all' /> 
<link rel='stylesheet' id='ult-icons-css'  href='/assets/Ultimate_VC_Addons/assets/css/icons.css' type='text/css' media='all' /> -->


<style>

    #contenido-servicios{
        display:none;
    }
    #contenido-servicios ul.ult_tabmenu.style1.Style_4 a.ult_a {
        border: 1px solid #d2b16e;
        border-radius: 0 !important;
        padding: 5px;
    }
    #contenido-servicios .aio-icon.none.ult_tab_iconright {
        display:none;
    }
    #contenido-servicios .ult_tabmenu.style1 li.ult_tab_li {
        border-radius: 0 !important;
        margin: 0 20px;
    }
    /*Contacto*/
    .caja-contacto{
        background: #d2b16e;
        padding: 10px 5px;
        color: white !important;
    }
    #almitas_backgorund{
        position: relative;
        overflow-x: hidden;
        -webkit-transition: -webkit-transform 0.4s;
        transition: -webkit-transform 0.4s;
        transition: transform 0.4s;
        transition: transform 0.4s, -webkit-transform 0.4s;
        background-image: url("/assets/uploads/ejemplo_parque_background.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    #almitas_backgorund .vc_column-inner{
        padding-top: 18%;
        padding-bottom: 16%; 
    }
    #almitas_backgorund h1{
        color: #ffffff;
        font-size: 50px;
    }
    #almitas_backgorund p{
        color: #dbb66d;
        font-size: 26px;
    }
    .bg-animation {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }#stars {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 117px 1613px #FFF , 1488px 635px #FFF , 944px 914px #FFF , 647px 277px #FFF , 1792px 1205px #FFF , 656px 1517px #FFF , 820px 1839px #FFF , 1153px 1400px #FFF , 870px 13px #FFF , 550px 702px #FFF , 1155px 1056px #FFF , 88px 1709px #FFF , 1450px 1090px #FFF , 1929px 457px #FFF , 1390px 905px #FFF , 1771px 269px #FFF , 1741px 669px #FFF , 432px 64px #FFF , 563px 996px #FFF , 1918px 1873px #FFF , 1845px 1211px #FFF , 231px 1503px #FFF , 37px 220px #FFF , 1970px 495px #FFF , 1812px 925px #FFF , 67px 1398px #FFF , 535px 279px #FFF , 1837px 829px #FFF , 1945px 685px #FFF , 1677px 1817px #FFF , 1317px 1415px #FFF , 1785px 905px #FFF , 1787px 1554px #FFF , 802px 1296px #FFF , 512px 1101px #FFF , 583px 1364px #FFF , 336px 558px #FFF , 979px 334px #FFF , 106px 792px #FFF , 204px 34px #FFF , 1845px 1763px #FFF , 445px 1599px #FFF , 386px 453px #FFF , 471px 952px #FFF , 1466px 1676px #FFF , 1885px 303px #FFF , 51px 1717px #FFF , 1211px 299px #FFF , 1546px 1887px #FFF , 1067px 33px #FFF , 1088px 1326px #FFF , 1938px 760px #FFF , 470px 648px #FFF , 1213px 269px #FFF , 1767px 78px #FFF , 977px 976px #FFF , 1926px 175px #FFF , 722px 1512px #FFF , 945px 227px #FFF , 1811px 99px #FFF , 1912px 1406px #FFF , 1602px 1243px #FFF , 610px 449px #FFF , 654px 1393px #FFF , 1930px 1193px #FFF , 258px 1184px #FFF , 89px 265px #FFF , 824px 1494px #FFF , 1506px 1435px #FFF , 1027px 753px #FFF , 1px 1197px #FFF , 530px 1161px #FFF , 864px 1555px #FFF , 1610px 1604px #FFF , 1035px 1114px #FFF , 1456px 133px #FFF , 1196px 1253px #FFF , 361px 1037px #FFF , 834px 351px #FFF , 436px 1676px #FFF , 1194px 1007px #FFF , 1141px 647px #FFF , 319px 454px #FFF , 937px 1769px #FFF , 1872px 1013px #FFF , 733px 643px #FFF , 1250px 511px #FFF , 189px 296px #FFF , 1639px 163px #FFF , 1584px 336px #FFF , 1912px 1343px #FFF , 1298px 1307px #FFF , 1750px 902px #FFF , 1129px 845px #FFF , 1899px 1470px #FFF , 1427px 232px #FFF , 1391px 838px #FFF , 1225px 1819px #FFF , 190px 1366px #FFF , 1865px 518px #FFF , 203px 1383px #FFF , 1455px 614px #FFF , 423px 354px #FFF , 1678px 1790px #FFF , 241px 608px #FFF , 1089px 730px #FFF , 1342px 38px #FFF , 1848px 249px #FFF , 1874px 1785px #FFF , 1040px 1837px #FFF , 751px 261px #FFF , 510px 1975px #FFF , 52px 795px #FFF , 1786px 1310px #FFF , 498px 712px #FFF , 190px 375px #FFF , 1341px 722px #FFF , 43px 1394px #FFF , 1821px 1687px #FFF , 106px 130px #FFF , 1717px 1978px #FFF , 168px 151px #FFF , 183px 740px #FFF , 945px 1381px #FFF , 669px 1170px #FFF , 1285px 1816px #FFF , 110px 1217px #FFF , 1623px 813px #FFF , 869px 647px #FFF , 867px 582px #FFF , 735px 1240px #FFF , 519px 1896px #FFF , 132px 156px #FFF , 1649px 193px #FFF , 241px 1109px #FFF , 643px 484px #FFF , 574px 1282px #FFF , 1952px 564px #FFF , 1978px 145px #FFF , 329px 903px #FFF , 1674px 617px #FFF , 1978px 558px #FFF , 1808px 1715px #FFF , 1526px 1238px #FFF , 475px 1330px #FFF , 810px 425px #FFF , 1709px 634px #FFF , 1658px 336px #FFF , 425px 194px #FFF , 352px 96px #FFF , 148px 180px #FFF , 1139px 1046px #FFF , 1809px 1233px #FFF , 1669px 171px #FFF , 263px 1394px #FFF , 534px 715px #FFF , 396px 1008px #FFF , 589px 1445px #FFF , 1190px 381px #FFF , 1709px 279px #FFF , 520px 891px #FFF , 1136px 1867px #FFF , 1280px 1233px #FFF , 836px 296px #FFF , 1348px 646px #FFF , 1539px 913px #FFF , 423px 781px #FFF , 1271px 1805px #FFF , 696px 564px #FFF , 1549px 804px #FFF , 303px 1555px #FFF , 1449px 1903px #FFF , 66px 687px #FFF , 1164px 856px #FFF , 1958px 1326px #FFF , 125px 157px #FFF , 508px 1669px #FFF , 465px 725px #FFF , 1925px 1440px #FFF , 405px 793px #FFF , 278px 110px #FFF , 1084px 1065px #FFF , 1077px 705px #FFF , 663px 1844px #FFF , 734px 263px #FFF , 870px 1761px #FFF , 103px 1169px #FFF , 1506px 1295px #FFF , 1883px 926px #FFF , 335px 1361px #FFF , 1126px 1284px #FFF , 257px 1165px #FFF , 837px 580px #FFF , 1211px 1362px #FFF , 1137px 1380px #FFF , 135px 632px #FFF , 1491px 1965px #FFF , 1098px 195px #FFF , 506px 417px #FFF , 693px 1243px #FFF , 622px 1862px #FFF , 1412px 1343px #FFF , 948px 1894px #FFF , 1315px 1363px #FFF , 754px 1098px #FFF , 1931px 930px #FFF , 1831px 342px #FFF , 1751px 1839px #FFF , 84px 775px #FFF , 1662px 1488px #FFF , 617px 1769px #FFF , 1869px 1292px #FFF , 963px 432px #FFF , 371px 1114px #FFF , 37px 642px #FFF , 21px 1184px #FFF , 602px 366px #FFF , 414px 524px #FFF , 282px 244px #FFF , 1689px 868px #FFF , 943px 681px #FFF , 898px 679px #FFF , 449px 1774px #FFF , 1678px 1313px #FFF , 475px 1811px #FFF , 1146px 1509px #FFF , 1151px 1863px #FFF , 1617px 846px #FFF , 82px 1077px #FFF , 324px 1317px #FFF , 1516px 885px #FFF , 1706px 1526px #FFF , 1925px 1180px #FFF , 553px 967px #FFF , 1072px 536px #FFF , 1715px 1816px #FFF , 185px 286px #FFF , 1362px 1600px #FFF , 628px 1938px #FFF , 1187px 412px #FFF , 569px 211px #FFF , 1959px 1356px #FFF , 1571px 105px #FFF , 319px 1111px #FFF , 36px 1364px #FFF , 502px 1788px #FFF , 1051px 1993px #FFF , 1617px 773px #FFF , 424px 1507px #FFF , 1623px 1955px #FFF , 307px 662px #FFF , 183px 1048px #FFF , 1919px 1453px #FFF , 1006px 1817px #FFF , 468px 673px #FFF , 1142px 1375px #FFF , 1228px 443px #FFF , 1734px 552px #FFF , 20px 1041px #FFF , 1783px 334px #FFF , 98px 1237px #FFF , 1356px 1940px #FFF , 853px 1779px #FFF , 1910px 560px #FFF , 1174px 1656px #FFF , 110px 1724px #FFF , 542px 1771px #FFF , 1758px 1931px #FFF , 1463px 1401px #FFF , 1155px 84px #FFF , 1504px 835px #FFF , 750px 322px #FFF , 407px 1900px #FFF , 1600px 1141px #FFF , 657px 886px #FFF , 526px 714px #FFF , 18px 836px #FFF , 1546px 1548px #FFF , 22px 469px #FFF , 594px 1466px #FFF , 1160px 1078px #FFF , 627px 1055px #FFF , 195px 699px #FFF , 1099px 684px #FFF , 530px 551px #FFF , 1160px 1325px #FFF , 894px 727px #FFF , 1157px 98px #FFF , 136px 1483px #FFF , 1875px 1975px #FFF , 1803px 566px #FFF , 318px 1073px #FFF , 1866px 1656px #FFF , 543px 414px #FFF , 719px 474px #FFF , 1115px 738px #FFF , 353px 875px #FFF , 184px 1938px #FFF , 1854px 1534px #FFF , 420px 1698px #FFF , 1480px 1550px #FFF , 522px 203px #FFF , 1897px 1904px #FFF , 975px 1708px #FFF , 1774px 602px #FFF , 1908px 274px #FFF , 61px 715px #FFF , 983px 1156px #FFF , 326px 1013px #FFF , 641px 290px #FFF , 1522px 120px #FFF , 405px 1637px #FFF , 1021px 1099px #FFF , 631px 1145px #FFF , 982px 1967px #FFF , 200px 651px #FFF , 795px 351px #FFF , 790px 1082px #FFF , 144px 1572px #FFF , 1542px 901px #FFF , 158px 1524px #FFF , 849px 1843px #FFF , 1807px 203px #FFF , 1747px 45px #FFF , 1603px 1738px #FFF , 617px 1966px #FFF , 342px 748px #FFF , 1779px 1173px #FFF , 1428px 152px #FFF , 589px 1998px #FFF , 1940px 1838px #FFF , 115px 272px #FFF , 1217px 1395px #FFF , 1402px 1491px #FFF , 1833px 1814px #FFF , 243px 966px #FFF , 319px 578px #FFF , 813px 364px #FFF , 669px 882px #FFF , 551px 134px #FFF , 1819px 920px #FFF , 740px 1826px #FFF , 1021px 952px #FFF , 1575px 453px #FFF , 324px 419px #FFF , 929px 417px #FFF , 885px 1112px #FFF , 503px 187px #FFF , 1908px 362px #FFF , 1063px 1601px #FFF , 169px 1792px #FFF , 789px 963px #FFF , 1697px 948px #FFF , 1761px 1810px #FFF , 1844px 1591px #FFF , 1709px 949px #FFF , 1402px 1396px #FFF , 1037px 225px #FFF , 1832px 518px #FFF , 1728px 1782px #FFF , 194px 1421px #FFF , 1395px 742px #FFF , 1478px 1325px #FFF , 40px 593px #FFF , 1732px 117px #FFF , 51px 158px #FFF , 1598px 1672px #FFF , 701px 849px #FFF , 1403px 1979px #FFF , 145px 1414px #FFF , 550px 906px #FFF , 1366px 460px #FFF , 142px 1379px #FFF , 34px 1864px #FFF , 1346px 308px #FFF , 293px 998px #FFF , 21px 1868px #FFF , 540px 1033px #FFF , 60px 746px #FFF , 1602px 1476px #FFF , 180px 804px #FFF , 345px 1982px #FFF , 1439px 640px #FFF , 939px 1834px #FFF , 20px 432px #FFF , 492px 1549px #FFF , 109px 1579px #FFF , 1796px 1403px #FFF , 1079px 519px #FFF , 1664px 389px #FFF , 1627px 1061px #FFF , 823px 419px #FFF , 1399px 1882px #FFF , 1906px 344px #FFF , 1189px 848px #FFF , 117px 882px #FFF , 1262px 33px #FFF , 1048px 434px #FFF , 1208px 1309px #FFF , 1616px 408px #FFF , 1833px 853px #FFF , 1433px 1656px #FFF , 811px 1861px #FFF , 439px 1672px #FFF , 1105px 248px #FFF , 328px 1652px #FFF , 13px 1658px #FFF , 685px 987px #FFF , 985px 403px #FFF , 1664px 1206px #FFF , 1993px 1925px #FFF , 440px 917px #FFF , 1835px 319px #FFF , 1404px 1907px #FFF , 624px 1443px #FFF , 843px 954px #FFF , 478px 1567px #FFF , 895px 1602px #FFF , 1231px 871px #FFF , 1267px 1646px #FFF , 475px 334px #FFF , 784px 796px #FFF , 1294px 199px #FFF , 109px 702px #FFF , 1978px 362px #FFF , 291px 940px #FFF , 971px 1343px #FFF , 74px 719px #FFF , 36px 715px #FFF , 1007px 1423px #FFF , 860px 314px #FFF , 631px 177px #FFF , 1900px 1590px #FFF , 1239px 1348px #FFF , 1346px 1270px #FFF , 1934px 1475px #FFF , 1553px 559px #FFF , 588px 1969px #FFF , 670px 1269px #FFF , 1484px 376px #FFF , 20px 1424px #FFF , 1396px 8px #FFF , 969px 244px #FFF , 1807px 538px #FFF , 1873px 891px #FFF , 636px 1142px #FFF , 1474px 1562px #FFF , 763px 350px #FFF , 663px 700px #FFF , 500px 1469px #FFF , 1302px 722px #FFF , 181px 291px #FFF , 266px 893px #FFF , 1403px 654px #FFF , 492px 460px #FFF , 1503px 1369px #FFF , 23px 1662px #FFF , 349px 333px #FFF , 1435px 1017px #FFF , 1441px 705px #FFF , 1708px 1446px #FFF , 1041px 911px #FFF , 1063px 780px #FFF , 1158px 1356px #FFF , 767px 1454px #FFF , 1912px 797px #FFF , 1731px 1759px #FFF , 1378px 1390px #FFF , 1815px 1364px #FFF , 960px 270px #FFF , 1343px 427px #FFF , 275px 203px #FFF , 1319px 1092px #FFF , 1455px 770px #FFF , 283px 1503px #FFF , 1505px 901px #FFF , 1738px 1561px #FFF , 1526px 1935px #FFF , 1757px 669px #FFF , 1640px 620px #FFF , 1750px 722px #FFF , 748px 66px #FFF , 1149px 540px #FFF , 159px 953px #FFF , 200px 1426px #FFF , 515px 1110px #FFF , 1552px 737px #FFF , 1094px 1459px #FFF , 778px 799px #FFF , 1031px 523px #FFF , 743px 1825px #FFF , 1100px 882px #FFF , 1088px 1836px #FFF , 255px 599px #FFF , 67px 1361px #FFF , 247px 1721px #FFF , 1722px 346px #FFF , 1822px 155px #FFF , 452px 1973px #FFF , 415px 1960px #FFF , 1109px 57px #FFF , 273px 1392px #FFF , ;
        -webkit-animation: animStar 50s linear infinite;
        -moz-animation: animStar 50s linear infinite;
        -ms-animation: animStar 50s linear infinite;
        animation: animStar 50s linear infinite;
    }
    #stars:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 117px 1613px #FFF , 1488px 635px #FFF , 944px 914px #FFF , 647px 277px #FFF , 1792px 1205px #FFF , 656px 1517px #FFF , 820px 1839px #FFF , 1153px 1400px #FFF , 870px 13px #FFF , 550px 702px #FFF , 1155px 1056px #FFF , 88px 1709px #FFF , 1450px 1090px #FFF , 1929px 457px #FFF , 1390px 905px #FFF , 1771px 269px #FFF , 1741px 669px #FFF , 432px 64px #FFF , 563px 996px #FFF , 1918px 1873px #FFF , 1845px 1211px #FFF , 231px 1503px #FFF , 37px 220px #FFF , 1970px 495px #FFF , 1812px 925px #FFF , 67px 1398px #FFF , 535px 279px #FFF , 1837px 829px #FFF , 1945px 685px #FFF , 1677px 1817px #FFF , 1317px 1415px #FFF , 1785px 905px #FFF , 1787px 1554px #FFF , 802px 1296px #FFF , 512px 1101px #FFF , 583px 1364px #FFF , 336px 558px #FFF , 979px 334px #FFF , 106px 792px #FFF , 204px 34px #FFF , 1845px 1763px #FFF , 445px 1599px #FFF , 386px 453px #FFF , 471px 952px #FFF , 1466px 1676px #FFF , 1885px 303px #FFF , 51px 1717px #FFF , 1211px 299px #FFF , 1546px 1887px #FFF , 1067px 33px #FFF , 1088px 1326px #FFF , 1938px 760px #FFF , 470px 648px #FFF , 1213px 269px #FFF , 1767px 78px #FFF , 977px 976px #FFF , 1926px 175px #FFF , 722px 1512px #FFF , 945px 227px #FFF , 1811px 99px #FFF , 1912px 1406px #FFF , 1602px 1243px #FFF , 610px 449px #FFF , 654px 1393px #FFF , 1930px 1193px #FFF , 258px 1184px #FFF , 89px 265px #FFF , 824px 1494px #FFF , 1506px 1435px #FFF , 1027px 753px #FFF , 1px 1197px #FFF , 530px 1161px #FFF , 864px 1555px #FFF , 1610px 1604px #FFF , 1035px 1114px #FFF , 1456px 133px #FFF , 1196px 1253px #FFF , 361px 1037px #FFF , 834px 351px #FFF , 436px 1676px #FFF , 1194px 1007px #FFF , 1141px 647px #FFF , 319px 454px #FFF , 937px 1769px #FFF , 1872px 1013px #FFF , 733px 643px #FFF , 1250px 511px #FFF , 189px 296px #FFF , 1639px 163px #FFF , 1584px 336px #FFF , 1912px 1343px #FFF , 1298px 1307px #FFF , 1750px 902px #FFF , 1129px 845px #FFF , 1899px 1470px #FFF , 1427px 232px #FFF , 1391px 838px #FFF , 1225px 1819px #FFF , 190px 1366px #FFF , 1865px 518px #FFF , 203px 1383px #FFF , 1455px 614px #FFF , 423px 354px #FFF , 1678px 1790px #FFF , 241px 608px #FFF , 1089px 730px #FFF , 1342px 38px #FFF , 1848px 249px #FFF , 1874px 1785px #FFF , 1040px 1837px #FFF , 751px 261px #FFF , 510px 1975px #FFF , 52px 795px #FFF , 1786px 1310px #FFF , 498px 712px #FFF , 190px 375px #FFF , 1341px 722px #FFF , 43px 1394px #FFF , 1821px 1687px #FFF , 106px 130px #FFF , 1717px 1978px #FFF , 168px 151px #FFF , 183px 740px #FFF , 945px 1381px #FFF , 669px 1170px #FFF , 1285px 1816px #FFF , 110px 1217px #FFF , 1623px 813px #FFF , 869px 647px #FFF , 867px 582px #FFF , 735px 1240px #FFF , 519px 1896px #FFF , 132px 156px #FFF , 1649px 193px #FFF , 241px 1109px #FFF , 643px 484px #FFF , 574px 1282px #FFF , 1952px 564px #FFF , 1978px 145px #FFF , 329px 903px #FFF , 1674px 617px #FFF , 1978px 558px #FFF , 1808px 1715px #FFF , 1526px 1238px #FFF , 475px 1330px #FFF , 810px 425px #FFF , 1709px 634px #FFF , 1658px 336px #FFF , 425px 194px #FFF , 352px 96px #FFF , 148px 180px #FFF , 1139px 1046px #FFF , 1809px 1233px #FFF , 1669px 171px #FFF , 263px 1394px #FFF , 534px 715px #FFF , 396px 1008px #FFF , 589px 1445px #FFF , 1190px 381px #FFF , 1709px 279px #FFF , 520px 891px #FFF , 1136px 1867px #FFF , 1280px 1233px #FFF , 836px 296px #FFF , 1348px 646px #FFF , 1539px 913px #FFF , 423px 781px #FFF , 1271px 1805px #FFF , 696px 564px #FFF , 1549px 804px #FFF , 303px 1555px #FFF , 1449px 1903px #FFF , 66px 687px #FFF , 1164px 856px #FFF , 1958px 1326px #FFF , 125px 157px #FFF , 508px 1669px #FFF , 465px 725px #FFF , 1925px 1440px #FFF , 405px 793px #FFF , 278px 110px #FFF , 1084px 1065px #FFF , 1077px 705px #FFF , 663px 1844px #FFF , 734px 263px #FFF , 870px 1761px #FFF , 103px 1169px #FFF , 1506px 1295px #FFF , 1883px 926px #FFF , 335px 1361px #FFF , 1126px 1284px #FFF , 257px 1165px #FFF , 837px 580px #FFF , 1211px 1362px #FFF , 1137px 1380px #FFF , 135px 632px #FFF , 1491px 1965px #FFF , 1098px 195px #FFF , 506px 417px #FFF , 693px 1243px #FFF , 622px 1862px #FFF , 1412px 1343px #FFF , 948px 1894px #FFF , 1315px 1363px #FFF , 754px 1098px #FFF , 1931px 930px #FFF , 1831px 342px #FFF , 1751px 1839px #FFF , 84px 775px #FFF , 1662px 1488px #FFF , 617px 1769px #FFF , 1869px 1292px #FFF , 963px 432px #FFF , 371px 1114px #FFF , 37px 642px #FFF , 21px 1184px #FFF , 602px 366px #FFF , 414px 524px #FFF , 282px 244px #FFF , 1689px 868px #FFF , 943px 681px #FFF , 898px 679px #FFF , 449px 1774px #FFF , 1678px 1313px #FFF , 475px 1811px #FFF , 1146px 1509px #FFF , 1151px 1863px #FFF , 1617px 846px #FFF , 82px 1077px #FFF , 324px 1317px #FFF , 1516px 885px #FFF , 1706px 1526px #FFF , 1925px 1180px #FFF , 553px 967px #FFF , 1072px 536px #FFF , 1715px 1816px #FFF , 185px 286px #FFF , 1362px 1600px #FFF , 628px 1938px #FFF , 1187px 412px #FFF , 569px 211px #FFF , 1959px 1356px #FFF , 1571px 105px #FFF , 319px 1111px #FFF , 36px 1364px #FFF , 502px 1788px #FFF , 1051px 1993px #FFF , 1617px 773px #FFF , 424px 1507px #FFF , 1623px 1955px #FFF , 307px 662px #FFF , 183px 1048px #FFF , 1919px 1453px #FFF , 1006px 1817px #FFF , 468px 673px #FFF , 1142px 1375px #FFF , 1228px 443px #FFF , 1734px 552px #FFF , 20px 1041px #FFF , 1783px 334px #FFF , 98px 1237px #FFF , 1356px 1940px #FFF , 853px 1779px #FFF , 1910px 560px #FFF , 1174px 1656px #FFF , 110px 1724px #FFF , 542px 1771px #FFF , 1758px 1931px #FFF , 1463px 1401px #FFF , 1155px 84px #FFF , 1504px 835px #FFF , 750px 322px #FFF , 407px 1900px #FFF , 1600px 1141px #FFF , 657px 886px #FFF , 526px 714px #FFF , 18px 836px #FFF , 1546px 1548px #FFF , 22px 469px #FFF , 594px 1466px #FFF , 1160px 1078px #FFF , 627px 1055px #FFF , 195px 699px #FFF , 1099px 684px #FFF , 530px 551px #FFF , 1160px 1325px #FFF , 894px 727px #FFF , 1157px 98px #FFF , 136px 1483px #FFF , 1875px 1975px #FFF , 1803px 566px #FFF , 318px 1073px #FFF , 1866px 1656px #FFF , 543px 414px #FFF , 719px 474px #FFF , 1115px 738px #FFF , 353px 875px #FFF , 184px 1938px #FFF , 1854px 1534px #FFF , 420px 1698px #FFF , 1480px 1550px #FFF , 522px 203px #FFF , 1897px 1904px #FFF , 975px 1708px #FFF , 1774px 602px #FFF , 1908px 274px #FFF , 61px 715px #FFF , 983px 1156px #FFF , 326px 1013px #FFF , 641px 290px #FFF , 1522px 120px #FFF , 405px 1637px #FFF , 1021px 1099px #FFF , 631px 1145px #FFF , 982px 1967px #FFF , 200px 651px #FFF , 795px 351px #FFF , 790px 1082px #FFF , 144px 1572px #FFF , 1542px 901px #FFF , 158px 1524px #FFF , 849px 1843px #FFF , 1807px 203px #FFF , 1747px 45px #FFF , 1603px 1738px #FFF , 617px 1966px #FFF , 342px 748px #FFF , 1779px 1173px #FFF , 1428px 152px #FFF , 589px 1998px #FFF , 1940px 1838px #FFF , 115px 272px #FFF , 1217px 1395px #FFF , 1402px 1491px #FFF , 1833px 1814px #FFF , 243px 966px #FFF , 319px 578px #FFF , 813px 364px #FFF , 669px 882px #FFF , 551px 134px #FFF , 1819px 920px #FFF , 740px 1826px #FFF , 1021px 952px #FFF , 1575px 453px #FFF , 324px 419px #FFF , 929px 417px #FFF , 885px 1112px #FFF , 503px 187px #FFF , 1908px 362px #FFF , 1063px 1601px #FFF , 169px 1792px #FFF , 789px 963px #FFF , 1697px 948px #FFF , 1761px 1810px #FFF , 1844px 1591px #FFF , 1709px 949px #FFF , 1402px 1396px #FFF , 1037px 225px #FFF , 1832px 518px #FFF , 1728px 1782px #FFF , 194px 1421px #FFF , 1395px 742px #FFF , 1478px 1325px #FFF , 40px 593px #FFF , 1732px 117px #FFF , 51px 158px #FFF , 1598px 1672px #FFF , 701px 849px #FFF , 1403px 1979px #FFF , 145px 1414px #FFF , 550px 906px #FFF , 1366px 460px #FFF , 142px 1379px #FFF , 34px 1864px #FFF , 1346px 308px #FFF , 293px 998px #FFF , 21px 1868px #FFF , 540px 1033px #FFF , 60px 746px #FFF , 1602px 1476px #FFF , 180px 804px #FFF , 345px 1982px #FFF , 1439px 640px #FFF , 939px 1834px #FFF , 20px 432px #FFF , 492px 1549px #FFF , 109px 1579px #FFF , 1796px 1403px #FFF , 1079px 519px #FFF , 1664px 389px #FFF , 1627px 1061px #FFF , 823px 419px #FFF , 1399px 1882px #FFF , 1906px 344px #FFF , 1189px 848px #FFF , 117px 882px #FFF , 1262px 33px #FFF , 1048px 434px #FFF , 1208px 1309px #FFF , 1616px 408px #FFF , 1833px 853px #FFF , 1433px 1656px #FFF , 811px 1861px #FFF , 439px 1672px #FFF , 1105px 248px #FFF , 328px 1652px #FFF , 13px 1658px #FFF , 685px 987px #FFF , 985px 403px #FFF , 1664px 1206px #FFF , 1993px 1925px #FFF , 440px 917px #FFF , 1835px 319px #FFF , 1404px 1907px #FFF , 624px 1443px #FFF , 843px 954px #FFF , 478px 1567px #FFF , 895px 1602px #FFF , 1231px 871px #FFF , 1267px 1646px #FFF , 475px 334px #FFF , 784px 796px #FFF , 1294px 199px #FFF , 109px 702px #FFF , 1978px 362px #FFF , 291px 940px #FFF , 971px 1343px #FFF , 74px 719px #FFF , 36px 715px #FFF , 1007px 1423px #FFF , 860px 314px #FFF , 631px 177px #FFF , 1900px 1590px #FFF , 1239px 1348px #FFF , 1346px 1270px #FFF , 1934px 1475px #FFF , 1553px 559px #FFF , 588px 1969px #FFF , 670px 1269px #FFF , 1484px 376px #FFF , 20px 1424px #FFF , 1396px 8px #FFF , 969px 244px #FFF , 1807px 538px #FFF , 1873px 891px #FFF , 636px 1142px #FFF , 1474px 1562px #FFF , 763px 350px #FFF , 663px 700px #FFF , 500px 1469px #FFF , 1302px 722px #FFF , 181px 291px #FFF , 266px 893px #FFF , 1403px 654px #FFF , 492px 460px #FFF , 1503px 1369px #FFF , 23px 1662px #FFF , 349px 333px #FFF , 1435px 1017px #FFF , 1441px 705px #FFF , 1708px 1446px #FFF , 1041px 911px #FFF , 1063px 780px #FFF , 1158px 1356px #FFF , 767px 1454px #FFF , 1912px 797px #FFF , 1731px 1759px #FFF , 1378px 1390px #FFF , 1815px 1364px #FFF , 960px 270px #FFF , 1343px 427px #FFF , 275px 203px #FFF , 1319px 1092px #FFF , 1455px 770px #FFF , 283px 1503px #FFF , 1505px 901px #FFF , 1738px 1561px #FFF , 1526px 1935px #FFF , 1757px 669px #FFF , 1640px 620px #FFF , 1750px 722px #FFF , 748px 66px #FFF , 1149px 540px #FFF , 159px 953px #FFF , 200px 1426px #FFF , 515px 1110px #FFF , 1552px 737px #FFF , 1094px 1459px #FFF , 778px 799px #FFF , 1031px 523px #FFF , 743px 1825px #FFF , 1100px 882px #FFF , 1088px 1836px #FFF , 255px 599px #FFF , 67px 1361px #FFF , 247px 1721px #FFF , 1722px 346px #FFF , 1822px 155px #FFF , 452px 1973px #FFF , 415px 1960px #FFF , 1109px 57px #FFF , 273px 1392px #FFF;
    }
    #stars2 {
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1117px 1306px #FFF , 1078px 1783px #FFF , 1179px 1085px #FFF , 
            1145px 920px #FFF , 422px 1233px #FFF , 387px 98px #FFF , 1153px 637px #FFF , 
            F , 476px 453px #FFF , 926px 1306px #FFF , 60px 1086px #FFF ,
            753px 1575px #FFF , 272px 1684px #FFF , 1285px 750px #FFF , 
            1416px 1327px #FFF , 1931px 473px #FFF , 736px 1395px #FFF , 
            1816px 763px #FFF , 438px 879px #FFF , 665px 1902px #FFF , 
            1341px 677px #FFF , 1404px 1073px #FFF , 100px 597px #FFF , 
            357px 1689px #FFF , 1044px 1342px #FFF , 1954px 502px #FFF , 
            1192px 1308px #FFF , 540px 1239px #FFF , 1360px 552px #FFF ,
            89px 752px #FFF , 659px 1253px #FFF , 62px 517px #FFF , 
            1375px 1705px #FFF , 1343px 1511px #FFF , 1659px 1922px #FFF ,
            1560px 289px #FFF , 1362px 1799px #FFF , 1886px 1480px #FFF , 
            1718px 1885px #FFF , 824px 738px #FFF , 1060px 1370px #FFF , 
            1781px 1171px #FFF , 255px 273px #FFF , 1197px 120px #FFF , 
            213px 7px #FFF , 1226px 1920px #FFF , 1844px 207px #FFF , 
            1675px 970px #FFF , 1435px 1283px #FFF , 37px 353px #FFF , 
            59px 417px #FFF , 921px 1602px #FFF , 1549px 1490px #FFF , 
            638px 1845px #FFF , 1328px 198px #FFF , 1050px 1149px #FFF , 
            1884px 711px #FFF , 333px 263px #FFF , 342px 1508px #FFF , 
            1388px 1810px #FFF , 1377px 1558px #FFF , 890px 487px #FFF , 
            1081px 759px #FFF , 890px 1515px #FFF , 911px 1284px #FFF , 
            335px 735px #FFF , 1140px 549px #FFF , 1239px 1064px #FFF , 
            226px 71px #FFF , 1100px 1278px #FFF , 1851px 1805px #FFF , 
            1370px 1999px #FFF , 1008px 1122px #FFF , 785px 813px #FFF ,
            1358px 601px #FFF , 1833px 1305px #FFF , 1768px 1304px #FFF , 
            1303px 532px #FFF , 860px 598px #FFF , 1329px 593px #FFF , 
            1997px 1382px #FFF , 112px 1690px #FFF , 687px 1309px #FFF , 
            63px 539px #FFF , 185px 1897px #FFF , 1055px 1691px #FFF , 
            435px 1517px #FFF , 1175px 1119px #FFF , 1721px 133px #FFF , 
            1212px 47px #FFF , 166px 18px #FFF , 1416px 1652px #FFF , 
            1409px 1745px #FFF , 1357px 1232px #FFF , 1677px 1998px #FFF ,
            448px 1415px #FFF , 705px 1736px #FFF , 1031px 1466px #FFF , 
            824px 380px #FFF , 942px 955px #FFF , 723px 732px #FFF , 
            113px 1369px #FFF , 203px 1739px #FFF , 868px 733px #FFF , 
            713px 971px #FFF , 341px 833px #FFF , 762px 824px #FFF , 
            1359px 310px #FFF , 1858px 1349px #FFF , 1531px 692px #FFF , 
            1075px 1512px #FFF , 1677px 142px #FFF , 1912px 1478px #FFF , 
            1810px 1078px #FFF , 426px 844px #FFF , 1426px 588px #FFF , 
            1909px 654px #FFF , 1107px 295px #FFF , 1351px 527px #FFF ,
            1393px 599px #FFF , 1379px 1068px #FFF , 228px 1846px #FFF , 
            1271px 374px #FFF , 1348px 612px #FFF , 7px 1301px #FFF , 
            1501px 1782px #FFF , 1795px 423px #FFF , 1475px 1918px #FFF , 
            1328px 1861px #FFF , 1624px 51px #FFF , 1791px 672px #FFF , 
            1594px 1467px #FFF , 1655px 1603px #FFF , 919px 850px #FFF , 
            523px 609px #FFF , 1196px 207px #FFF , 753px 410px #FFF ,  
            361px 116px #FFF , 1015px 462px #FFF , 76px 1143px #FFF , 
            491px 1818px #FFF , 1563px 795px #FFF , 982px 1721px #FFF , 
            831px 1204px #FFF , 1737px 589px #FFF , 861px 1579px #FFF ,
            1666px 130px #FFF , 698px 1799px #FFF , 726px 1519px #FFF , 
            109px 1208px #FFF , 1184px 1057px #FFF , 835px 451px #FFF , 
            896px 594px #FFF , 35px 893px #FFF , 895px 542px #FFF , 
            706px 225px #FFF , 56px 1040px #FFF , 1954px 108px #FFF , 
            1439px 1423px #FFF , 26px 1881px #FFF , 802px 1564px #FFF , 
            273px 708px #FFF , 40px 31px #FFF , 859px 108px #FFF;
        -webkit-animation: animStar 100s linear infinite;
        -moz-animation: animStar 100s linear infinite;
        -ms-animation: animStar 100s linear infinite;
        animation: animStar 100s linear infinite;
    }
    #stars3 {
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 940px 1360px #FFF , 1071px 539px #FFF , 1710px 1414px #FFF 
            , 836px 299px #FFF , 1944px 1420px #FFF , 253px 1449px #FFF , 
            1257px 1250px #FFF , 1588px 1830px #FFF , 1077px 1204px #FFF , 
            273px 1081px #FFF , 1993px 766px #FFF , 1808px 479px #FFF , 
            917px 263px #FFF , 663px 1820px #FFF , 342px 1988px #FFF , 
            727px 1250px #FFF , 248px 1211px #FFF , 1422px 1121px #FFF , 
            881px 46px #FFF , 1531px 1977px #FFF , 1643px 1023px #FFF , 
            684px 1071px #FFF , 1142px 1873px #FFF , 292px 1313px #FFF , 
            256px 1237px #FFF , 89px 912px #FFF , 964px 1783px #FFF , 
            877px 760px #FFF , 1641px 1474px #FFF , 1492px 24px #FFF , 
            1776px 1642px #FFF , 183px 602px #FFF , 1998px 62px #FFF , 
            1560px 367px #FFF , 1333px 995px #FFF , 704px 1815px #FFF , 
            1809px 712px #FFF , 1503px 288px #FFF , 630px 556px #FFF , 
            1657px 648px #FFF , 1249px 933px #FFF , 1552px 1555px #FFF ,
            147px 62px #FFF , 292px 1157px #FFF , 1816px 423px #FFF , 
            1714px 757px #FFF , 1036px 961px #FFF , 1955px 710px #FFF
            , 1225px 1309px #FFF , 1965px 566px #FFF , 1575px 1072px #FFF , 923px 329px #FFF , 651px 1514px #FFF , 865px 1100px #FFF , 782px 1873px #FFF , 115px 299px #FFF , 14px 1668px #FFF , 1666px 1817px #FFF , 1096px 1068px #FFF , 1462px 742px #FFF , 1384px 1750px #FFF;
        -webkit-animation: animStar 150s linear infinite;
        -moz-animation: animStar 150s linear infinite;
        -ms-animation: animStar 150s linear infinite;
        animation: animStar 150s linear infinite;
    }
    #stars4 {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 233px 1976px #FFF , 1196px 1119px #FFF , 646px 740px #FFF , 
            335px 645px #FFF , 1119px 1452px #FFF , 176px 1870px #FFF , 
            639px 1711px #FFF , 647px 1388px #FFF , 1516px 1108px #FFF , 
            464px 66px #FFF , 331px 344px #FFF , 772px 1189px #FFF , 
            1516px 1850px #FFF , 1500px 1463px #FFF , 1275px 876px #FFF , 
            1107px 645px #FFF , 977px 478px #FFF , 583px 1179px #FFF , 
            284px 395px #FFF , 1220px 461px #FFF , 1160px 249px #FFF , 
            196px 865px #FFF , 670px 1915px #FFF , 1449px 382px #FFF , 
            1191px 546px #FFF , 1329px 605px #FFF , 1945px 458px #FFF , 
            995px 749px #FFF , 1495px 861px #FFF , 708px 1731px #FFF , 
            348px 653px #FFF , 548px 1298px #FFF , 1606px 990px #FFF , 
            1049px 1204px #FFF , 253px 1501px #FFF , 1154px 166px #FFF , 
            577px 1897px #FFF , 193px 1901px #FFF , 1701px 1755px #FFF , 
            864px 1297px #FFF , 800px 1289px #FFF , 676px 28px #FFF , 
            185px 1341px #FFF , 379px 1151px #FFF , 1224px 1725px #FFF , 
            280px 541px #FFF , 473px 1196px #FFF , 921px 1628px #FFF , 
            969px 432px #FFF , 1475px 758px #FFF , 1195px 993px #FFF , 
            837px 527px #FFF , 1785px 1610px #FFF , 1650px 1843px #FFF , 
            1127px 1508px #FFF , 401px 1050px #FFF , 51px 1105px #FFF , 
            545px 880px #FFF , 1786px 1672px #FFF , 318px 260px #FFF , 
            568px 254px #FFF , 1026px 1527px #FFF , 1242px 852px #FFF , 
            1785px 982px #FFF , 1318px 1071px , 841px 403px #FFF , 1400px 354px #FFF
            , 197px 499px #FFF , 1188px 681px #FFF , 158px 391px #FFF ,
            1908px 195px #FFF , 271px 891px #FFF , 469px 1693px #FFF , 
            212px 293px #FFF , 569px 323px #FFF , 1404px 1394px #FFF , 
            252px 1386px #FFF , 1668px 1857px #FFF , 123px 1684px #FFF , 
            105px 490px #FFF , 1083px 1769px #FFF , 1071px 1953px #FFF ,
            1271px 1159px #FFF , 699px 1491px #FFF , 1744px 1997px #FFF , 
            1868px 1973px #FFF , 1438px 1449px #FFF , 1222px 1921px #FFF ,
            1328px 1210px #FFF , 438px 873px #FFF , 809px 780px #FFF , 
            491px 1524px #FFF , 447px 1830px #FFF , 927px 1936px #FFF , 
            564px 691px #FFF , 1784px 1747px #FFF , 1978px 1722px #FFF , 
            1599px 1480px #FFF , 1276px 729px #FFF , 731px 1174px #FFF ,
            1586px 1711px #FFF , 451px 1340px #FFF , 1075px 1899px #FFF ,
            13px 575px #FFF , 309px 1340px #FFF , 849px 80px #FFF , 
            1754px 1540px #FFF , 73px 1432px #FFF , 1208px 1828px #FFF , 
            65px 575px #FFF , 1098px 730px #FFF , 127px 1358px #FFF , 
            185px 19px #FFF , 1222px 1679px #FFF , 1122px 315px #FFF , 
            1906px 452px #FFF , 761px 284px #FFF , 813px 492px #FFF , 
            1344px 843px #FFF , 118px 1834px #FFF , 1620px 359px #FFF , 
            1755px 1246px #FFF , 299px 1076px #FFF , 1746px 158px #FFF , 
            6px 1635px #FFF , 143px 190px #FFF , 101px 468px #FFF , 
            137px 971px #FFF , 1221px 1929px #FFF , 1752px 650px #FFF , 
            1635px 1761px #FFF , 1522px 833px #FFF , 908px 153px #FFF , 
            1044px 350px #FFF , 1151px 1940px #FFF , 822px 210px #FFF , 
            1774px 310px #FFF , 796px 1447px #FFF , 1069px 1903px #FFF , 
            217px 565px #FFF , 662px 1370px #FFF , 1876px 1570px #FFF , 
            847px 46px #FFF , 1042px 1689px #FFF , 1584px 1434px #FFF , 
            1791px 908px #FFF , 973px 908px #FFF , 793px 747px #FFF , 
            122px 483px #FFF , 1137px 1374px #FFF , 1757px 1791px #FFF , 
            513px 225px #FFF , 63px 731px #FFF , 1179px 1926px #FFF , 
            346px 18px #FFF , 589px 175px #FFF , 87px 302px #FFF , 
            380px 1295px #FFF , 450px 921px #FFF , 1667px 1973px #FFF , 
            1495px 1373px #FFF , 1462px 1850px #FFF , 540px 288px #FFF , 
            1208px 1051px #FFF , 1554px 1095px #FFF , 1009px 1516px #FFF , 
            181px 572px #FFF , 165px 387px #FFF , 549px 1835px #FFF , 
            960px 16px #FFF , 1360px 403px #FFF , 1251px 43px #FFF , 
            1905px 1813px #FFF , 1106px 866px #FFF , 1809px 277px #FFF , 
            1828px 1720px #FFF , 295px 1610px #FFF , 523px 166px #FFF , 
            1069px 692px #FFF , 1292px 217px #FFF , 11px 1721px #FFF , 
            99px 1045px #FFF, 599px 795px #FFF , 762px 1926px #FFF , 
            1202px 1424px #FFF , 135px 1316px #FFF , 1442px 1692px #FFF , 
            977px 652px #FFF , 564px 1648px #FFF , 997px 1474px #FFF , 
            67px 1366px #FFF , 1860px 1451px #FFF , 1105px 772px #FFF , 
            1288px 1749px #FFF , 273px 984px #FFF , 1197px 1991px #FFF , 
            242px 789px #FFF , 903px 1035px #FFF , 480px 1492px #FFF , 
            102px 1331px #FFF , 738px 1343px #FFF , 560px 1475px #FFF , 
            367px 846px #FFF , 1420px 962px #FFF , 1976px 892px #FFF , 
            1906px 1025px #FFF , 730px 1364px #FFF , 1127px 521px #FFF , 
            883px 476px #FFF , 214px 890px #FFF , 1028px 892px #FFF , 
            1107px 1832px #FFF , 944px 361px #FFF , 480px 1453px #FFF , 
            1466px 683px #FFF , 981px 745px #FFF , 1968px 828px #FFF , 
            657px 1830px #FFF , 11px 1338px #FFF , 179px 730px #FFF , 
            1713px 197px #FFF , 51px 955px #FFF , 1243px 319px #FFF , 
            1175px 624px #FFF , 446px 46px #FFF , 5px 1158px #FFF , 
            82px 1352px #FFF , 1877px 402px #FFF , 708px 1778px #FFF , 
            903px 1625px #FFF , 1824px 352px #FFF , 1229px 140px #FFF , 
            1518px 24px #FFF , 1017px 512px #FFF , 515px 699px #FFF , 
            295px 265px #FFF , 69px 1773px #FFF , 1640px 1163px #FFF , 
            536px 342px #FFF;
        -webkit-animation: animStar 600s linear infinite;
        -moz-animation: animStar 600s linear infinite;
        -ms-animation: animStar 600s linear infinite;
        animation: animStar 600s linear infinite;
    }
    #stars4:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 233px 1976px #FFF , 1196px 1119px #FFF , 646px 740px #FFF , 335px 645px #FFF , 1119px 1452px #FFF , 176px 1870px #FFF , 639px 1711px #FFF , 647px 1388px #FFF , 1516px 1108px #FFF , 464px 66px #FFF , 331px 344px #FFF , 772px 1189px #FFF , 1516px 1850px #FFF , 1500px 1463px #FFF , 1275px 876px #FFF , 1107px 645px #FFF , 977px 478px #FFF , 583px 1179px #FFF , 284px 395px #FFF , 1220px 461px #FFF , 1160px 249px #FFF , 196px 865px #FFF , 670px 1915px #FFF , 1449px 382px #FFF , 1191px 546px #FFF , 1329px 605px #FFF , 1945px 458px #FFF , 995px 749px #FFF , 1495px 861px #FFF , 708px 1731px #FFF , 348px 653px #FFF , 548px 1298px #FFF , 1606px 990px #FFF , 1049px 1204px #FFF , 253px 1501px #FFF , 1154px 166px #FFF , 1087px 104px #FFF , 1034px 1161px #FFF , 1681px 462px #FFF , 577px 1897px #FFF , 193px 1901px #FFF , 1701px 1755px #FFF , 864px 1297px #FFF , 800px 1289px #FFF , 676px 28px #FFF , 185px 1341px #FFF , 379px 1151px #FFF , 1224px 1725px #FFF , 280px 541px #FFF , 473px 1196px #FFF , 921px 1628px #FFF , 969px 432px #FFF , 1475px 758px #FFF , 1195px 993px #FFF , 876px 1840px #FFF , 1274px 1689px #FFF , 1977px 1101px #FFF , 837px 527px #FFF , 1785px 1610px #FFF , 1650px 1843px #FFF , 1127px 1508px #FFF , 401px 1050px #FFF , 51px 1105px #FFF , 545px 880px #FFF , 1786px 1672px #FFF , 318px 260px #FFF , 568px 254px #FFF , 1026px 1527px #FFF , 1242px 852px #FFF , 1785px 982px #FFF , 1318px 1071px #FFF , 398px 1061px #FFF , 1509px 257px #FFF , 599px 928px #FFF , 1195px 1800px #FFF , 1254px 906px #FFF , 141px 26px #FFF , 1384px 1502px #FFF , 476px 767px #FFF , 1973px 722px #FFF , 1339px 1031px #FFF , 778px 818px #FFF , 213px 1320px #FFF , 184px 221px #FFF , 983px 1911px #FFF , 923px 1439px #FFF , 1936px 581px #FFF , 1105px 625px #FFF , 325px 729px #FFF , 1475px 204px #FFF , 1483px 1564px #FFF , 1327px 1272px #FFF , 1187px 1944px #FFF , 1945px 1471px #FFF , 116px 960px #FFF , 1660px 1610px #FFF , 412px 1022px #FFF , 1552px 1516px #FFF , 1517px 1892px #FFF , 306px 829px #FFF , 1416px 462px #FFF , 1575px 1460px #FFF , 424px 1500px #FFF , 1530px 1169px #FFF , 1388px 1608px #FFF , 185px 416px #FFF , 634px 1446px #FFF , 767px 479px #FFF , 71px 426px #FFF , 1937px 145px #FFF , 1955px 1312px #FFF , 1811px 611px #FFF , 1145px 569px #FFF , 1460px 676px #FFF , 131px 1858px #FFF , 1557px 473px #FFF , 735px 130px #FFF , 112px 1531px #FFF , 1312px 305px #FFF , 409px 1032px #FFF , 149px 1964px #FFF , 535px 1215px #FFF , 1382px 630px #FFF , 1437px 1368px #FFF , 362px 1181px #FFF , 388px 181px #FFF , 274px 1287px #FFF , 1858px 1414px #FFF , 661px 1935px #FFF , 675px 1205px #FFF , 1829px 1725px #FFF , 1937px 1145px #FFF , 237px 908px #FFF , 1059px 1185px #FFF , 824px 1248px #FFF , 1167px 1730px #FFF , 180px 1961px #FFF , 1663px 203px #FFF , 374px 221px #FFF , 724px 1883px #FFF , 970px 1362px #FFF , 832px 505px #FFF , 313px 233px #FFF , 1909px 597px #FFF , 434px 201px #FFF , 587px 995px #FFF , 1833px 623px #FFF , 1464px 561px #FFF , 231px 593px #FFF , 1558px 1433px #FFF , 1986px 1767px #FFF , 1753px 1728px #FFF , 1153px 1623px #FFF , 249px 229px #FFF , 1503px 1186px #FFF , 1784px 137px #FFF , 841px 403px #FFF , 1400px 354px #FFF , 197px 499px #FFF , 1188px 681px #FFF , 158px 391px #FFF , 443px 1099px #FFF , 723px 1445px #FFF , 1408px 1235px #FFF , 1908px 195px #FFF , 271px 891px #FFF , 469px 1693px #FFF , 580px 11px #FFF , 1533px 70px #FFF , 859px 761px #FFF , 1510px 1844px #FFF , 421px 558px #FFF , 1132px 1453px #FFF , 757px 1987px #FFF , 212px 293px #FFF , 569px 323px #FFF , 1404px 1394px #FFF , 252px 1386px #FFF , 1668px 1857px #FFF , 123px 1684px #FFF , 105px 490px #FFF , 1083px 1769px #FFF , 1071px 1953px #FFF , 1271px 1159px #FFF , 699px 1491px #FFF , 1744px 1997px #FFF , 1868px 1973px #FFF , 1438px 1449px #FFF , 1222px 1921px #FFF , 1328px 1210px #FFF , 438px 873px #FFF , 809px 780px #FFF , 491px 1524px #FFF , 447px 1830px #FFF , 927px 1936px #FFF , 564px 691px #FFF , 1784px 1747px #FFF , 1978px 1722px #FFF , 1599px 1480px #FFF , 1276px 729px #FFF , 731px 1174px #FFF , 1586px 1711px #FFF , 451px 1340px #FFF , 1075px 1899px #FFF , 13px 575px #FFF , 309px 1340px #FFF , 981px 183px #FFF , 248px 1315px #FFF , 849px 80px #FFF , 1754px 1540px #FFF , 73px 1432px #FFF , 1208px 1828px #FFF , 65px 575px #FFF , 1098px 730px #FFF , 127px 1358px #FFF , 185px 19px #FFF , 1222px 1679px #FFF , 1122px 315px #FFF , 1906px 452px #FFF , 761px 284px #FFF , 813px 492px #FFF , 1344px 843px #FFF , 118px 1834px #FFF , 1620px 359px #FFF , 1755px 1246px #FFF , 299px 1076px #FFF , 1746px 158px #FFF , 6px 1635px #FFF , 143px 190px #FFF , 101px 468px #FFF , 137px 971px #FFF , 1221px 1929px #FFF , 1752px 650px #FFF , 1635px 1761px #FFF , 1522px 833px #FFF , 908px 153px #FFF , 1044px 350px #FFF , 1151px 1940px #FFF , 822px 210px #FFF , 1774px 310px #FFF , 796px 1447px #FFF , 1069px 1903px #FFF , 217px 565px #FFF , 662px 1370px #FFF , 1876px 1570px #FFF , 847px 46px #FFF , 1042px 1689px #FFF , 1584px 1434px #FFF , 1791px 908px #FFF , 973px 908px #FFF , 793px 747px #FFF , 122px 483px #FFF , 1137px 1374px #FFF , 1757px 1791px #FFF , 513px 225px #FFF , 63px 731px #FFF , 1179px 1926px #FFF , 346px 18px #FFF , 589px 175px #FFF , 87px 302px #FFF , 380px 1295px #FFF , 450px 921px #FFF , 1667px 1973px #FFF , 1495px 1373px #FFF , 1462px 1850px #FFF , 540px 288px #FFF , 1208px 1051px #FFF , 1554px 1095px #FFF , 1009px 1516px #FFF , 181px 572px #FFF , 165px 387px #FFF , 549px 1835px #FFF , 960px 16px #FFF , 1360px 403px #FFF , 1251px 43px #FFF , 1905px 1813px #FFF , 1106px 866px #FFF , 1809px 277px #FFF , 1828px 1720px #FFF , 295px 1610px #FFF , 523px 166px #FFF , 1069px 692px #FFF , 1292px 217px #FFF , 11px 1721px #FFF , 99px 1045px #FFF , 51px 1584px #FFF , 1053px 266px #FFF , 1287px 1235px #FFF , 747px 1722px #FFF , 1542px 736px #FFF , 1256px 18px #FFF , 102px 609px #FFF , 586px 1339px #FFF , 1843px 1697px #FFF , 824px 1687px #FFF , 1124px 882px #FFF , 395px 501px #FFF , 1456px 672px #FFF , 1472px 1648px #FFF , 1326px 1164px #FFF , 777px 1672px #FFF , 81px 345px #FFF , 91px 386px #FFF , 243px 411px #FFF , 1560px 90px #FFF , 6px 1771px #FFF , 1601px 616px #FFF , 1220px 1808px #FFF , 1160px 836px #FFF , 246px 1777px #FFF , 456px 863px #FFF , 97px 1138px #FFF , 1811px 942px #FFF , 213px 414px #FFF , 891px 392px #FFF , 1044px 927px #FFF , 1856px 216px #FFF , 957px 347px #FFF , 1486px 406px #FFF , 838px 912px #FFF , 803px 361px #FFF , 564px 826px #FFF , 1597px 949px #FFF , 1206px 289px #FFF , 33px 1035px #FFF , 1762px 1377px #FFF , 789px 1815px #FFF , 1594px 1342px #FFF , 1668px 880px #FFF , 1539px 1581px #FFF , 1547px 53px #FFF , 861px 1433px #FFF , 693px 1618px #FFF , 1762px 782px #FFF , 1568px 682px #FFF , 1126px 1762px #FFF , 1242px 134px #FFF , 495px 959px #FFF , 1606px 219px #FFF , 1878px 1415px #FFF , 1652px 797px #FFF , 782px 1903px #FFF , 1774px 1133px #FFF , 1430px 408px #FFF , 265px 394px #FFF , 890px 336px #FFF , 1051px 311px #FFF , 461px 1559px #FFF , 1931px 91px #FFF , 1160px 380px #FFF , 1442px 1058px #FFF , 1157px 364px #FFF , 586px 227px #FFF , 1365px 715px #FFF , 1658px 1655px #FFF , 1923px 1664px #FFF , 1023px 1844px #FFF , 1939px 1367px #FFF , 1203px 1305px #FFF , 359px 642px #FFF , 1056px 425px #FFF , 787px 202px #FFF , 1609px 1850px #FFF , 1964px 200px #FFF , 1537px 586px #FFF , 1589px 903px #FFF , 1063px 1694px #FFF , 760px 1185px #FFF , 597px 1396px #FFF , 294px 452px #FFF , 433px 818px #FFF , 199px 840px #FFF , 1332px 1937px #FFF , 169px 1907px #FFF , 591px 834px #FFF , 1716px 1032px #FFF , 45px 1879px #FFF , 686px 1469px #FFF , 1520px 475px #FFF , 1122px 859px #FFF , 973px 1541px #FFF , 269px 477px #FFF , 1390px 716px #FFF , 1791px 783px #FFF , 824px 2000px #FFF , 1211px 1717px #FFF , 1008px 1587px #FFF , 1422px 204px #FFF , 234px 556px #FFF , 506px 550px #FFF , 942px 1670px #FFF , 397px 853px #FFF , 599px 795px #FFF , 762px 1926px #FFF , 1202px 1424px #FFF , 135px 1316px #FFF , 1442px 1692px #FFF , 977px 652px #FFF , 564px 1648px #FFF , 997px 1474px #FFF , 67px 1366px #FFF , 1860px 1451px #FFF , 1105px 772px #FFF , 1886px 1396px #FFF , 1510px 658px #FFF , 976px 1544px #FFF , 894px 543px #FFF , 1098px 1189px #FFF , 690px 77px #FFF , 770px 733px #FFF , 557px 1403px #FFF , 1758px 1623px #FFF , 1341px 812px #FFF , 699px 967px #FFF , 277px 866px #FFF , 1526px 1828px #FFF , 8px 977px #FFF , 1707px 952px #FFF , 12px 1900px #FFF , 72px 921px #FFF , 496px 1067px #FFF , 1288px 1749px #FFF , 273px 984px #FFF , 1197px 1991px #FFF , 242px 789px #FFF , 903px 1035px #FFF , 480px 1492px #FFF , 102px 1331px #FFF , 738px 1343px #FFF , 560px 1475px #FFF , 367px 846px #FFF , 1420px 962px #FFF , 1976px 892px #FFF , 1911px 1763px #FFF , 1639px 1002px #FFF , 437px 1522px #FFF , 1906px 1025px #FFF , 730px 1364px #FFF , 1127px 521px #FFF , 1401px 1792px #FFF , 1954px 1066px #FFF , 232px 250px #FFF , 1685px 660px #FFF , 1011px 999px #FFF , 1970px 790px #FFF , 750px 499px #FFF , 1738px 660px #FFF , 1621px 1849px #FFF , 446px 52px #FFF , 1055px 1396px #FFF , 1165px 1497px #FFF , 1740px 1425px #FFF , 1012px 1920px #FFF , 1258px 1560px #FFF , 1020px 1152px #FFF , 362px 673px #FFF , 1065px 975px #FFF , 582px 755px #FFF , 1271px 1479px #FFF , 719px 548px #FFF , 1602px 879px #FFF , 590px 499px #FFF , 721px 1412px #FFF , 1180px 113px #FFF , 1801px 1961px #FFF , 589px 941px #FFF , 883px 476px #FFF , 214px 890px #FFF , 1028px 892px #FFF , 1107px 1832px #FFF , 944px 361px #FFF , 480px 1453px #FFF , 1466px 683px #FFF , 981px 745px #FFF , 1968px 828px #FFF , 657px 1830px #FFF , 11px 1338px #FFF , 179px 730px #FFF , 1713px 197px #FFF , 51px 955px #FFF , 1243px 319px #FFF , 1175px 624px #FFF , 446px 46px #FFF , 5px 1158px #FFF , 82px 1352px #FFF , 1877px 402px #FFF ;
    }
    @-webkit-keyframes animStar {
        from {
            -webkit-transform: translateY(0px);
        }
        to {
            -webkit-transform: translateY(-2000px);
        }
    }
    @-moz-keyframes animStar {
        from {
            -moz-transform: translateY(0px);
        }
        to {
            -moz-transform: translateY(-2000px);
        }
    }
    @-ms-keyframes animStar {
        from {
            -ms-transform: translateY(0px);
        }
        to {
            -ms-transform: translateY(-2000px);
        }
    }
    @keyframes animStar {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-2000px);
        }
    }
    .contenedor_servicios{
        padding: 0 20px 10px;
    }
    .contenedor_servicios h2{
        font-size: 24px;
        font-weight: 600;
        line-height: 1.3;
        margin-bottom: 20px;
        color: #dbb66d;
    }
    .contenedor_servicios p{
        text-align: center;
        font-weight: 300;
        font-size: 18px;
        line-height: 1.4;
        min-height: 108px;
    }
    .servicios_image{
        position: relative;
    }
    .servicios_image:after{
        content: '';
        position: absolute;
        bottom: 0;
        width: 84%;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        transform: translateX(-50%);
        height: 1.2em;
        border: 2px solid;
        border-bottom: none;
        z-index: 1;
        background-color: #ffffff;
        border-color: #dbb66d;
    }
    .container--redes{
        width:400px;
    }
    .icon{
        top:50%;
        position:relative;
        margin-bottom:16px;
    }
    .icon-primary{
        display:inline-block;
        text-decoration:none;
        color:#40444a;
        background-color:#f6f3ea;
        border-radius:100%;
        position:relative;
        z-index:1;
        box-shadow:1px 0 1px rgba(0,0,0,.5);
        height:50px;
        width:50px;
        text-align:center;
        line-height: 61px;
        font-size: 25px;
    }
    .container-description{
        overflow:hidden;
        position:absolute;
        top:0;
        left:24px;
    }
    .icon-description{
        width:240px;
        display:inline-block;
        text-decoration:none;
        color:#fff;
        background-color:rgba(219, 182, 109, 0.73);
        height:49px;
        line-height:54px;
        padding-left:40px;
        border-radius:0 35px 35px 0;
        transform: translate3d(-110%, 0, 0);
        transition:transform 175ms ease;
        font-size: 18px;
    }
    .icon-primary:hover  ~ .container-description .icon-description{
        transform: translate(0, 0);
    }
    .mini_menu{
        position: absolute !important;
        top: 9.5%;
        z-index: 199;
        left: 3%;
    }
    #main-slideshow {
        z-index: 100 !important;
    }
    .slick-next {
        right: -35px;
    }
    .slick-prev {
        left: -35px;
    }
    .info_inicio{
        margin-top: 8px;
    }
    .info_inicio a{
        border-radius: 35px !important;
        padding-top: 9px !important;
        padding-bottom: 9px !important;
    }
    .content input[type="text"], .content input[type="search"], .content input[type="tel"], .content input[type="url"], .content input[type="email"], .content input[type="number"], .content select, .content textarea {
        box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.12);
    }
    @media (max-width: 690px) {
        .mini_menu {
            top: 7%;
        }
        .icon-primary {
            height: 44px;
            width: 44px;
            line-height: 52px;
            font-size: 22px;
        }
    }</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1582862045702{margin-bottom: 15px !important;}.vc_custom_1582756798609{margin-bottom: 0px !important;}.vc_custom_1590449465590{margin-bottom: 25px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $count = 0;
        foreach ($list as $item) {
            if ($count == 0) {
                echo '<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>';
            } else {
                echo '<li data-target="#carouselExampleCaptions" data-slide-to="' . $count . '"></li>';
            }
            $count++;
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        $count = 0;
        foreach ($list as $item) {
            if ($count == 0) {
                echo '<div class="carousel-item active">
      <img src="/uploads/banner/' . $item['Imagen_g'] . '" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 57px;line-height: 66px;font-weight: 400;color: rgb(255, 255, 255);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . utf8_decode($item['Title']) . '</h5>
                    <p style="white-space: nowrap;font-size: 28px;line-height: 36px;font-weight: 400;color: rgb(228, 183, 96);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . $item['Sumary'] . '</p>
                </div>
    </div>';
            } else {
                echo '<div class="carousel-item">
      <img src="/uploads/banner/' . $item['Imagen_g'] . '" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 57px;line-height: 66px;font-weight: 400;color: rgb(255, 255, 255);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . utf8_decode($item['Title']) . '</h5>
                    <p style="white-space: nowrap;font-size: 28px;line-height: 36px;font-weight: 400;color: rgb(228, 183, 96);letter-spacing: 0px;font-family: Sorts Mill Goudy;">' . $item['Sumary'] . '</p>
                </div>
    </div>';
            }
            $count++;
        }
        ?>


    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="main" class="sidebar-none sidebar-divider-vertical" style="padding-top:0px; padding-bottom:0px;">
    <div class="main-gradient"></div>
    <div class="wf-wrap">
        <div class="wf-container-main">
            <div id="content" class="content" role="main">
                <div class="vc_row wpb_row vc_row-fluid mini_menu dt-default" style="margin-top: 0px;margin-bottom: 0px">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                    <div class="wpb_wrapper">
                                        <div class="container--redes">
                                            <div class="icon">
                                                <a class="icon-primary" href="/buscador"><i class="Defaults-map-marker"></i></a>	
                                                <div class="container-description">
                                                    <a class="icon-description" href="/buscador" style="width: 300px;" >Encuentra a tu ser querido</a>	
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <a class="icon-primary" href="/blog"><i class="Defaults-star"></i></a>	
                                                <div class="container-description ">
                                                    <a class="icon-description" href="/blog">Blog</a>	
                                                </div>
                                            </div>
                                            <!--                                            <div class="icon">
                                                                                            <a class="icon-primary" href="#"><i class="Defaults-calendar"></i></a>	
                                                                                            <div class="container-description ">
                                                                                                <a class="icon-description" href="#">Sepelios del día</a>	
                                                                                            </div>
                                                                                        </div>-->
                                            <div class="icon">
                                                <a class="icon-primary" href="/contacto/" target="_blank"><i class="Defaults-edit pencil-square-o"></i></a>
                                                <div class="container-description">
                                                    <a class="icon-description" href="/contacto/" target="_blank">Cotización</a>
                                                </div>
                                            </div>
                                            <div class="icon">
                                                <a class="icon-primary" href="https://www.facebook.com/ParquedelaesperanzaPERU/" target="_blank"><i class="Defaults-facebook facebook-f"></i></a>
                                                <div class="container-description">
                                                    <a class="icon-description" href="https://www.facebook.com/ParquedelaesperanzaPERU/">Síguenos en facebook</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex ult-vc-hide-row vc_row-has-fill" style="left: -337px; position: relative; box-sizing: border-box; width: 1903px; padding-left: 337px; padding-right: 336px;" data-rtl="false" data-row-effect-mobile-disable="true">
                    <div class="upb_row_bg" data-upb_br_animation="" 
                         style="background: rgba(0, 0, 0, 0) -webkit-linear-gradient(rgb(246, 245, 235) 0%, rgb(255, 255, 255) 100%) repeat scroll 0% 0%; 
                         min-width: 1903px; left: 0px; width: 1903px;" data-bg-override="0"></div>
                         
                         <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-2/5"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp amor-familia wpb_start_animation animated">
                                                    <div class="wpb_wrapper">
                                                        <h2>Porque te quiero, te cuido</h2>
                                                        <?php
                                                        echo searchForId('Inicio.parrafo1', $texts)['Description'];
                                                        ?>
                                                    </div>
                                                </div>
                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-3/5"><div class="vc_column-inner"><div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_slideInUp slideInUp vc_custom_1582862045702 wpb_start_animation animated">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <img 
                                                                src="/assets/uploads/amor-de-familia.png" 
                                                                class="vc_single_image-img attachment-full" alt="" 
                                                                srcset="/assets/uploads/amor-de-familia.png 1178w, 
                                                                /assets/uploads/amor-de-familia-300x142.png 300w, 
                                                                /assets/uploads/amor-de-familia-768x362.png 768w, 
                                                                /assets/uploads/amor-de-familia-1024x483.png 1024w" 
                                                                sizes="(max-width: 1178px) 100vw, 1178px" 
                                                                width="1178" height="556"></div>
                                                    </figure>
                                                </div>
                                            </div></div></div></div><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
                            </div></div></div></div>


                <div class="vc_row-full-width vc_clearfix"></div>
                <!-- Row Backgrounds -->
                <div class="upb_grad" data-grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #F6F5EB), color-stop(100%, #FFFFFF));background: -moz-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -webkit-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -o-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: -ms-linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);background: linear-gradient(top,#F6F5EB 0%,#FFFFFF 100%);" data-bg-override="0" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.7" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
                <div id="almitas_backgorund" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center;">Sonrío cuando miro al cielo</h1>
                                        <p style="text-align: center;">porque sé que me cuidas desde ahí</p>
                                    </div>
                                </div>
                                <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                    <div class="wpb_wrapper">
                                        <div class="bg-animation">
                                            <div id='stars'></div>
                                            <div id='stars2'></div>
                                            <div id='stars3'></div>
                                            <div id='stars4'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid dt-default" style="margin-top: 0px;margin-bottom: 0px">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="vc_empty_space" style="height: 70px"><span class="vc_empty_space_inner"></span></div>
                                <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1582756798609">
                                    <figure class="wpb_wrapper vc_figure">
                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                            <img width="109" height="39" 
                                                 src="/assets/uploads/pe_icons_titles.png" 
                                                 class="vc_single_image-img attachment-full" alt="" 
                                                 /></div>
                                    </figure>
                                </div>
                                <div class="wpb_text_column wpb_content_element  vc_custom_1590449465590">
                                    <div class="wpb_wrapper">
                                        <h1 style="text-align: center; color: #dbb66d;">Nuestros Servicios</h1>
                                        <div style="text-align: center; color: #40454a; font-weight: 200;"><?php
                                                        echo searchForId('Inicio.NuestrosServicios', $texts)['Description'];
                                                        ?></div>
                                    </div>
                                </div>
                                <div id="ult-carousel-4566550565ee3dd0ab0868" class="ult-carousel-wrapper   ult_horizontal" data-gutter="18" data-rtl="false">
                                    <div class="ult-carousel-3749864475ee3dd0ab0840 ">
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">


                                                                                <img width="630" height="420" src="/assets/uploads/home/necesidad_futura.jpg" class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/necesidad_futura.jpg 630w, 
                                                                                     /assets/uploads/home/necesidad_futura-300x200.jpg 300w" sizes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Necesidad Futura</h2>
                                                                            <?php
                                                        echo searchForId('Inicio.NecesidadFutura', $texts)['Description'];
                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/necesidad-futura/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="600" height="400" src="/assets/uploads/home/necesidad-inmediata-pe-tres.jpeg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/necesidad-inmediata-pe-tres.jpeg 600w, 
                                                                                     /assets/uploads/home/necesidad-inmediata-pe-tres-300x200.jpeg 300w" sizes="(max-width: 600px) 100vw, 600px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Necesidad Inmediata</h2>
                                                                            <?php
                                                        echo searchForId('Inicio.NecesidadInmediata', $texts)['Description'];
                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/necesidad-inmediata/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="630" height="420" 
                                                                                     src="/assets/uploads/home/crematorio-parque-esperanza-general.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/crematorio-parque-esperanza-general.jpg 630w, 
                                                                                     /assets/uploads/home/crematorio-parque-esperanza-general-300x200.jpg 300w" 
                                                                                     sizes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Cremación</h2>
                                                                            <?php
                                                        echo searchForId('Inicio.Cremacion', $texts)['Description'];
                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/cremacion/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="900" height="600" 
                                                                                     src="/assets/uploads/home/pe-toldoblanco-11.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/pe-toldoblanco-11.jpg 900w, 
                                                                                     /assets/uploads/home/pe-toldoblanco-11-300x200.jpg 300w, 
                                                                                     /assets/uploads/home/pe-toldoblanco-11-768x512.jpg 768w" 
                                                                                     sizes="(max-width: 900px) 100vw, 900px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Sepelio</h2>
                                                                            <?php
                                                        echo searchForId('Inicio.Sepelio', $texts)['Description'];
                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" 
                                                                           class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/sepelio/" title="Necesidad futura">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="630" height="420" 
                                                                                     src="/assets/uploads/home/servicio_velatorios_parque.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/servicio_velatorios_parque.jpg 630w, 
                                                                                     /assets/uploads/home/servicio_velatorios_parque-300x200.jpg 300w" s
                                                                                     izes="(max-width: 630px) 100vw, 630px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Velatorios</h2>
                                                                            <?php
                                                        echo searchForId('Inicio.Velatorios', $texts)['Description'];
                                                        ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/velatorios/" title="Velatorios">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                        <div class="vc_column-inner">
                                                            <div class="wpb_wrapper">
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_single_image wpb_content_element vc_align_center   servicios_image">
                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="650" height="433" 
                                                                                     src="/assets/uploads/home/otros_servicios_parque_esperanza.jpg" 
                                                                                     class="vc_single_image-img attachment-full" alt="" 
                                                                                     srcset="/assets/uploads/home/otros_servicios_parque_esperanza.jpg 650w, 
                                                                                     /assets/uploads/home/otros_servicios_parque_esperanza-300x200.jpg 300w" 
                                                                                     sizes="(max-width: 650px) 100vw, 650px" 
                                                                                     /></div>
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="wpb_text_column wpb_content_element  contenedor_servicios">
                                                                        <div class="wpb_wrapper">
                                                                            <h2 style="text-align: center;">Otros servicios</h2>
                                                                            <p>Usted podrá rendirle un tributo de reconocimiento a su querido y para ello contamos con exclusivas lapidas de granito negro.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                    <div class="vc_btn3-container  info_inicio vc_btn3-center">
                                                                        <a onmouseleave="this.style.borderColor='#dbb66d'; this.style.backgroundColor='transparent'; this.style.color='#dbb66d'" 
                                                                           onmouseenter="this.style.borderColor='#dbb66d'; this.style.backgroundColor='#dbb66d'; this.style.color='#ffffff';" 
                                                                           style="border-color:#dbb66d; color:#dbb66d;" class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline-custom" 
                                                                           href="/servicios/otros-servicios/" title="Otros servicios">Más información</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function ($) {
                                        if (typeof jQuery('.ult-carousel-3749864475ee3dd0ab0840').slick == "function") {
                                            $('.ult-carousel-3749864475ee3dd0ab0840').slick({
                                                dots: false,
                                                autoplay: true,
                                                autoplaySpeed: 5000,
                                                speed: 300,
                                                infinite: true,
                                                arrows: true,
                                                nextArrow: '<button type="button" role="button" aria-label="Next" style="color:#dbb66d; font-size:55px;" class="slick-next default"><i class="ultsl-arrow-right4"></i></button>',
                                                prevArrow: '<button type="button" role="button" aria-label="Previous" style="color:#dbb66d; font-size:55px;" class="slick-prev default"><i class="ultsl-arrow-left4"></i></button>',
                                                slidesToScroll: 1,
                                                slidesToShow: 3,
                                                swipe: true,
                                                draggable: true,
                                                touchMove: true,
                                                pauseOnHover: true,
                                                responsive: [{
                                                        breakpoint: 1025,
                                                        settings: {
                                                            slidesToShow: 3,
                                                            slidesToScroll: 1,
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 769,
                                                        settings: {
                                                            slidesToShow: 2,
                                                            slidesToScroll: 2
                                                        }
                                                    },
                                                    {
                                                        breakpoint: 481,
                                                        settings: {
                                                            slidesToShow: 1,
                                                            slidesToScroll: 1
                                                        }
                                                    }
                                                ],
                                                pauseOnDotsHover: true,
                                                customPaging: function (slider, i) {
                                                    return '<i type="button" style= "color:#333333;" class="ultsl-record" data-role="none"></i>';
                                                },
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>

<?php
//$this->load->view('public/pages/form_contacto');
//$this->template->load('', '', 'public/pages/form_contacto');
//echo $form_contacto;
?>
                
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid ult-vc-hide-row vc_row-has-fill" style="left: -145px; position: relative; box-sizing: border-box; width: 1519px; padding-left: 145px; padding-right: 144px;" data-rtl="false" data-row-effect-mobile-disable="true"><div class="upb_row_bg" data-upb_br_animation="" style="background: rgba(0, 0, 0, 0) -webkit-linear-gradient(rgb(255, 255, 255) 0%, rgb(246, 245, 235) 100%) repeat scroll 0% 0%; min-width: 1519px; left: 0px; width: 1519px;" data-bg-override="0"></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
<div class="vc_row wpb_row vc_inner vc_row-fluid contacto-footer"><div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-1"><div class="vc_column-inner"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h2 style="text-align: center; line-height: 1.5; font-size: 30px;">Si deseas obtener más información acerca de nuestros servicios, completa el siguiente formulario y te contactaremos</h2>
</div>
</div>
<div role="form" class="wpcf7" id="wpcf7-f193-p131-o1" dir="ltr" lang="es-ES">
<div class="screen-reader-response" aria-live="polite"></div>
<form action="/#wpcf7-f193-p131-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="193">
<input type="hidden" name="_wpcf7_version" value="5.1.9">
<input type="hidden" name="_wpcf7_locale" value="es_ES">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f193-p131-o1">
<input type="hidden" name="_wpcf7_container_post" value="131">
<input type="hidden" name="g-recaptcha-response" value="03AGdBq24A0f2K9cG7z-7dnEfz0wFWvKjC3iQVDsmn2-yQo4YzqCoYzz3oVCgykd_QIweUcRw_yQzZbaYKj6I1gbdTPhpPOQMWEnFRvX8RvJX3VOMV-9WSM-3sTGNiIWapXXsjP3t27JuRNvtYSRYhlFhjmh1H8-K6ohLclyRQv4a3t7fC5cUjvSpx-t4CPROhKkyJl4BTNjul4bfX3JKeZa-NIOgE3CPy2Ia-ltBI5sWDlNK4oa4xXEAJFJj1hdRwwLSpn3eQyHr7Yrz64s1oWJ7TWXLW3_FlgPtHJLGoq_8JbMrzctNNBNc9YjhxHRzfASS_6XxXZrsSwsPhMJ3xKuhHm7ZJF7o8WmWnNjNo-DP7syveEY1IuPcXee6RYCXCgGqSwVJn1rHn_XDhLlwPU4aCQnfc2Rb51Q">
</div>
<div class="formulario-contacto">
<div class="form-50">
<span class="wpcf7-form-control-wrap nombre"><input type="text" name="nombre" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Nombres"></span>
</div>
<div class="form-50">
<span class="wpcf7-form-control-wrap apellido"><input type="text" name="apellido" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Apellidos"></span></div>
</div>
<div class="formulario-contacto">
<div class="form-50">
<p><span class="wpcf7-form-control-wrap tel-993"><input type="tel" name="tel-993" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="*Celular"></span>
</p></div>
<div class="form-50">
<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="*Correo electrónico"></span></div>
</div>
<div class="formulario-contacto">
<div class="form-100">
<span class="wpcf7-form-control-wrap mensaje"><textarea name="mensaje" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="*Mensaje"></textarea></span></div>
</div>
<div class="form-100 terminos"><span class="wpcf7-form-control-wrap terminos-condiciones"><span class="wpcf7-form-control wpcf7-checkbox wpcf7-validates-as-required"><span class="wpcf7-list-item first last"><label><input type="checkbox" name="terminos-condiciones[]" value="He leído y estoy de acuerdo"><span class="wpcf7-list-item-label">He leído y estoy de acuerdo</span></label></span></span></span> <span><a href="http://www.parquedelaesperanza.com/politica-privacidad/" target="_blank"> con los términos y condiciones</a>.</span>
</div>
<div class="form-100 btn_enviar_of"><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></div>
<div class="wpcf7-response-output wpcf7-display-none" aria-hidden="true"></div></form></div></div></div></div></div><div class="vc_empty_space" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
</div></div></div></div>


                <div class="vc_row-full-width vc_clearfix"></div>
                <!-- Row Backgrounds -->
                <div class="upb_grad" data-grad="background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FFFFFF), color-stop(100%, #F6F5EB));background: -moz-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -webkit-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -o-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: -ms-linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);background: linear-gradient(top,#FFFFFF 0%,#F6F5EB 100%);" data-bg-override="0" data-upb-overlay-color="" data-upb-bg-animation="" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" data-rtl="false" data-custom-vc-row="" data-vc="5.7" data-is_old_vc="" data-theme-support="" data-overlay="false" data-overlay-color="" data-overlay-pattern="" data-overlay-pattern-opacity="" data-overlay-pattern-size=""></div>
            </div>
            <!-- #content -->

        </div>
        <!-- .wf-container -->
    </div>
    <!-- .wf-wrap -->
</div>
<!-- #main -->
<script src="/assets/theme/js/ultimate-params.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/slick.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/jquery-appear.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/slick-custom.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/ultimate_bg.min.js" type="text/javascript"></script>
<script src="/assets/theme/js/custom.min.js" type="text/javascript"></script>


<!--<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate-params.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/slick.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/jquery-appear.min.js?ver=3.16.22'></script> 
<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/slick-custom.min.js?ver=3.16.22'></script> 


<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate_bg.min.js?ver=5.2.7'></script>
<script type='text/javascript' src='http://www.parquedelaesperanza.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/custom.min.js?ver=3.16.22'></script>-->