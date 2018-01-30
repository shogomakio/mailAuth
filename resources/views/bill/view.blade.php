@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<link href="http://localhost:8000/css/bill.css" rel="stylesheet" type="text/css">
@section('content')
<div id="divBody">
    <table id="tabla">
    <tbody>
        <tr>
            <td id="direccionIzquierda">&nbsp;</td>
            <td id="direccionDerecha">fecha de factura</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">adress</td>
            <td id="direccionDerecha">empresa</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">tokyo</td>
            <td id="direccionDerecha">post</td>
        </tr>
        <tr>
            <td id="direccionIzquierda">emterprise</td>
            <td id="direccionDerecha">adres</td>
        </tr>
    </tbody>
    </table>
        <h1 style="text-align: center;"><strong>請求書</strong></h1>
        <table id="tabla" border="1">
        <tbody>
        <tr>
            <td id="columnaTercia">ご請求日</td>
            <td id="columnaTercia">対象期間</td>
            <td id="columnaTercia">御請求額</td>
        </tr>
        <tr>
            <td id="columnaTercia"><input type="text" id="text" name="text" style="width:100%"></td>
            <td id="columnaTercia">&nbsp;</td>
            <td id="columnaTercia">&nbsp;</td>
        </tr>
        <tr>
            <td id="columnaTercia">お支払い期限</td>
            <td style="width: 196px;" colspan="2">お支払い口座</td>
        </tr>
        <tr>
            <td id="columnaTercia">&nbsp;</td>
            <td style="width: 196px;" colspan="2">&nbsp;</td>
        </tr>
    </tbody>
    </table>
    &nbsp;

    <table id="tabla" border="1">
    <tbody>
        <tr>
            <td id="columnaTercia">対象</td>
            <td id="columnaTercia">内訳</td>
            <td id="columnaTercia">金額</td>
        </tr>
        <tr>
            <td id="columnaTercia" rowspan="4">株式会社〇〇</td>
            <td id="columnaTercia">基本金額</td>
            <td id="columnaTercia" style="text-align: right;">0</td>
        </tr>
        <tr>
            <td id="columnaTercia">その他請求</td>
            <td id="columnaTercia" style="text-align: right;">0</td>
        </tr>
        <tr>
            <td id="columnaTercia">その他控除</td>
            <td id="columnaTercia" style="text-align: right;">0</td>
        </tr>
        <tr>
        <td id  ="columnaTercia">消費税</td>
        <td id="columnaTercia" style="text-align: right;">0</td>
        </tr>
        <tr>
            <td id="columnaTercia">&nbsp;</td>
            <td id="columnaTercia">ご請求金額</td>
            <td id="columnaTercia" style="text-align: right;">0</td>
        </tr>
    </tbody>
    </table>
    <p>&nbsp;</p>

    <table id="tabla" border="1">
    <tbody>
        <tr style="height: 18px;">
        <td id="columnaTercia" colspan="6">内訳明細</td>
        </tr>
        <tr style="height: 18px;">
        <td id="columnaTercia" colspan="6">基本代金</td>
        </tr>
        <tr style="height: 1px;">
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
        <tr>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr>
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
        <tr>
            <td  id="columnaOctal" colspan="7">その他請求</td>
        </tr>
        <tr>
            <td  id="columnaOctal">日付</td>
            <td  id="columnaCuarta">課税区分</td>
            <td  id="columnaOctal">摘要</td>
            <td  id="columnaOctal">単価</td>
            <td  id="columnaOctal">数量</td>
            <td id="columnaOctal">小計</td>
            <td id="columnaOctal">消費税</td>
        </tr>
        <tr>
            <td id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">課税or非課税</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td  id="columnaOctal">&nbsp;</td>
            <td id="columnaOctal">&nbsp;</td>
        </tr>
        <tr>
            <td id="columnaOctal" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td id="columnaOctal">合計</td>
            <td id="columnaOctal" colspan="2">&nbsp;</td>
        </tr>
    </tbody>
    </table>
    &nbsp;

<table id="tabla" border="1">
<tbody>
<tr>
<td id="columnaOctal" colspan="7">その他控除</td>
</tr>
<tr>
<td id="columnaOctal">日付</td>
<td id="columnaCuarta">課税区分</td>
<td id="columnaOctal">摘要</td>
<td id="columnaOctal">単価</td>
<td id="columnaOctal">数量</td>
<td id="columnaOctal">小計</td>
<td id="columnaOctal">消費税</td>
</tr>
<tr>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
<td id="columnaOctal">&nbsp;</td>
</tr>
<tr>
<td id="columnaOctal" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td id="columnaOctal">合計</td>
<td id="columnaOctal" colspan="2">&nbsp;</td>
</tr>
</tbody>
</table>

&nbsp;
</div>


@endsection