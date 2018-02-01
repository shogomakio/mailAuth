<style type="text/css">
#direccionIzquierda{
    width:50%;
    float:left;
}

#direccionDerecha{
    width:35%;
    float: right;
}

#direccionDerechaFull{
    width:23%;
    float: right;
    /* position:absolute;
    right: 10px; */
}

#columnaTercia{
    width:33%;
}
#columnaCuarta{
    width:25%;
}

#columnaOctal{
    width:12.5%;
}

#columnaSegunda{
    width:50%;
}

#columnaCompleta{
    width:100%;
}

#columnaOchenta{
    width:80%;
}

#columnaSesenta{
    width:60%;
}

#columnaVeinte{
    width:20%;
    text-align: center;
}


#tabla{
    width: 800px;
    margin-left: auto; 
    margin-right: auto;
    border-color: black;
    border-collapse: collapse;
    
}


#tablaBorde{
    border-color: black; 
    margin-left: auto; 
    margin-right: auto;
    border:1; 
    width:800px;
}

.tamanDiv{
    width: 100%;
}

#divBody{
    color: #20262B;
    margin-left: auto; 
    margin-right: auto;
    height: 80%;
}

#fontStyle{
    font-weight: bolder;
    font-size: 18pt;
    margin-top:50px;
    margin-bottom:18px;
}

#fontStyle2{
    font-weight: bold;
    font-size: 10pt;
}

#fontStyle3{
    font-weight: lighter;
    font-size: 10pt;
}

#square {
	width: 35px;
	height: 35px;
    border-radius: 5px;
	/* background: red; */
    border: 1px solid  #20262B;
    padding: 20px; 
    position: fixed;  
    /* float:right; */
    margin-left: 70%;
    margin-top: 20px;
}

</style>


<div id="divBody">
    <table id="tabla">
    <tbody>
        <tr>
            <td id="direccionIzquierda">&nbsp;</td>
            <td id="direccionDerechaFull">発行日2018年〇月〇日</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">〒〇〇〇‐〇〇〇〇</td>
            <td id="direccionDerecha">株式会社　ICOBIT</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">東京都</td>
            <td id="direccionDerecha">〒103-0027</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">株式会社〇〇          御中</td>
            <!-- <div id="square"></div> -->
            <td id="direccionDerecha">東京都中央区日本橋1-2-10東洋ビル3F</td>
        </tr>
    </tbody>
    </table>
        <h1 style="text-align: center;" id="fontStyle">請求書</h1>
        <p style="margin-left:5%;">いつもお世話になっております。下記の通りご請求申し上げます。</p>
        <table id="tabla" border="1">
        <tbody>
        <tr id="fontStyle2">
            <td id="columnaCuarta">ご請求日</td>
            <td id="columnaCuarta">対象期間</td>
            <td id="columnaSesenta">御請求額</td>
        </tr>
        <td id="columnaCuarta" style="height:40px">&nbsp;</td>
            <td id="columnaCuarta" >&nbsp;</td>
            <td id="columnaSesenta">&nbsp;</td>
        </tr>
        <tr id="fontStyle2">
        <td id="columnaCuarta">お支払い期限</td>
            <td colspan="2">お支払い口座</td>
        </tr>
        <tr id="fontStyle3">
        <td id="columnaCuarta" style="height:50px">&nbsp;</td>
            <td style="width: 196px;" colspan="2" style="height:50px">&nbsp;</td>
        </tr>
    </tbody>
    </table>
    &nbsp;
    
    <table id="tabla" border="1">
    <tbody id="fontStyle3">
        <tr>
            <td id="columnaSesenta">対象</td>
            <td id="columnaVeinte">内訳</td>
            <td id="columnaVeinte">金額</td>
        </tr>
        <tr>
            <td id="columnaSesenta"style="vertical-align:top" rowspan="4">株式会社〇〇</td>
            <td>基本金額</td>
            <td style="text-align: right;">0</td>
        </tr>
        <tr>
            <td >その他請求</td>
            <td style="text-align: right;">0</td>
        </tr>
        <tr>
            <td>その他控除</td>
            <td style="text-align: right;">0</td>
        </tr>
        <tr>
        <td>消費税</td>
        <td style="text-align: right;">0</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>ご請求金額</td>
            <td id="columnaVeinte" style="text-align: right;">0</td>
        </tr>
    </tbody>
    </table
    <p>&nbsp;</p>
    
    <table id="tabla" border="1">
    <tbody>
        <tr id="fontStyle2">
        <td id="columnaTercia" colspan="6">内訳明細</td>
        </tr>
        <tr id="fontStyle2">
        <td id="columnaTercia" colspan="6">基本代金</td>
        </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal">日付</td>
            <td id="columnaTercia">
            <p>求人ID</p>
            <p>募集タイトル</p>
            </td>
            <td id="columnaOctal">承諾</td>
            <td id="columnaOctal">単価</td>
            <td id="columnaOctal">消費税</td>
            <td id="columnaOctal">合計</td>
        </tr>
        <tr id="fontStyle3" style="height:60px">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3" style="height:60px">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3" style="height:60px">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3" style="height:60px">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3" style="height:60px">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
    </tbody>
    </table>
    &nbsp;
    
    <table id="tabla" border="1">
    <tbody>
        <tr id="fontStyle2">
            <td  id="columnaOctal" colspan="7">その他請求</td>
        </tr>
        <tr id="fontStyle3">
            <td  id="columnaOctal">日付</td>
            <td  id="columnaCuarta">課税区分</td>
            <td  id="columnaOctal">摘要</td>
            <td  id="columnaOctal">単価</td>
            <td  id="columnaOctal">数量</td>
            <td id="columnaOctal">小計</td>
            <td id="columnaOctal">消費税</td>
        </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">課税or非課税</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td id="columnaOctal">合計</td>
            <td id="columnaOctal" colspan="2">&nbsp;</td>
        </tr>
    </tbody>
    </table>
    <!-- <table id="tabla" border="1">
    <tbody>
        <tr id="fontStyle2">
            <td id="columnaOctal" colspan="7">その他控除</td>
       </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal">日付</td>
            <td id="columnaCuarta">課税区分</td>
            <td id="columnaOctal">摘要</td>
            <td id="columnaOctal">単価</td>
            <td id="columnaOctal">数量</td>
            <td id="columnaOctal">小計</td>
            <td id="columnaOctal">消費税</td>
        </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr id="fontStyle3">
            <td id="columnaOctal" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td id="columnaOctal">合計</td>
            <td id="columnaOctal" colspan="2">&nbsp;</td>
        </tr>
    </tbody>
    </table> -->

