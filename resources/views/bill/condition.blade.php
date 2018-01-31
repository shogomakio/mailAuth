@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<!-- <link href="http://localhost:8000/css/bill.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="{{ asset('/css/bill.css') }}">
@section('content')
<form action="{{route('bill.terms')}}" method="post">
    {{csrf_field()}}
<div id="divBody">
    <button type="submit" class="btn btn-success" style="margin-left: auto; 
    margin-right: auto; width:100%;">PDF</button>
    <table id="tabla">
        <tbody>
            <tr>
                <td >&nbsp;</td>
                <td style="text-align: right;">(一般労働者用；日雇型)</td>
            </tr>
            <tr>
                <td style="text-align: center;" colspan="2"><h1>労働条件通知書</h1></td>
            </tr>
        </tbody>
    </table>
    <table id="tabla" border="1" style="height:1080px">
        <tbody>
            <tr>
                <td id="columnaCompleta" colspan="4"><p style="text-align: right;">年　月　日</p>
                <p style="text-decoration: underline; vertical-align:bottom;">記名無し・有選択可能　殿</p>
                </td>
            </tr>
            <tr>
                <td id="columnaCompleta" colspan="4">【企業求人作成画面】の募集企業名から生成</td>
            </tr>
            <tr>
                <td id="columnaCompleta" colspan="4">【企業求人作成画面】の事業所責任者から生成</td>
            </tr>
            <tr>
                <td id="columnaVeinte">就労日</td>
                <td id="columnaOchenta" colspan="3">【企業求人作成画面】の日付から生成</td>
            </tr>
        <tr>
        <td id="columnaVeinte">就業の場所</td>
        <td id="columnaOchenta" colspan="3">【企業求人作成画面】のお仕事タイトルから生成</td>
        </tr>
        <tr>
        <td id="columnaVeinte">従事すべき業務の内容</td>
        <td id="columnaOchenta" colspan="3">【企業求人作成画面】のお仕事詳細から生成</td>
        </tr>
        <tr>
        <td id="columnaVeinte">始業、終業の時刻、休暇期間、所定時間外労働の有無に関する事項</td>
        <td id="columnaOchenta" colspan="3">
        <ol>
        <li>【企業求人作成画面】の就業時間から生成</li>
        <li>【企業求人作成画面】の休暇時間から生成</li>
        <li>【企業求人作成画面】の時間外労働から生成</li>
        </ol>
        </td>
        </tr>
        <tr>
        <td id="columnaVeinte">休日</td>
        <td id="columnaOchenta" colspan="3">就業日のみのため休日無し</td>
        </tr>
        <tr>
        <td id="columnaVeinte">契約期間</td>
        <td id="columnaOchenta" colspan="3">2018/1/29～2018/1/29</td>
        </tr>
        <tr>
        <td id="columnaVeinte" rowspan="10">資金</td>
        <td id="columnaOctal">給与形態区分</td>
        <td  colspan="2">【企業求人作成画面】の給与形態区分から生成</td>
        </tr>
        <tr>
        <td >基準単価</td>
        <td colspan="2">【企業求人作成画面】の単価から生成</td>
        </tr>
        <tr>
        <td id="columnaOctal" rowspan="5">割増</td>
        <td id="columnaOctal">法定時間外</td>
        <td >25％</td>
        </tr>
        <tr>
        <td id="columnaOctal">法定休日</td>
        <td >35％</td>
        </tr>
        <tr>
        <td id="columnaOctal">休日</td>
        <td >&nbsp;</td>
        </tr>
        <tr>
        <td id="columnaOctal">深夜</td>
        <td >25％</td>
        </tr>
        <tr>
        <td id="columnaOctal">深夜時間外</td>
        <td >50％</td>
        </tr>
        <tr>
        <td id="columnaOctal">交通費</td>
        <td id="columnaOctal">有・無</td>
        <td >&nbsp;</td>
        </tr>
        <tr>
        <td id="columnaOctal">資金支払の控除</td>
        <td id="columnaOctal">有・無</td>
        <td >【企業求人作成画面】の控除から生成</td>
        </tr>
        <tr>
        <td id="columnaOctal">支払い条件</td>
        <td colspan="2">【企業求人作成画面】の支払い条件から生成</td>
        </tr>
        <tr>
        <td id="columnaVeinte" rowspan="2">契約更新</td>
        <td id="columnaOctal">契約更新の有無</td>
        <td colspan="2">無</td>
        </tr>
        <tr>
        <td id="columnaOctal">契約更新に関する基準</td>
        <td  colspan="2">
        <p>・契約期間満了時の業務量　・労働者の業務成績、態度　・労働者の能力　・会社の経営状況　・従事している業務の進捗状況</p>
        </td>
        </tr>
        <tr>
        <td id="columnaVeinte">その他</td>
        <td colspan="3">&nbsp;</td>
        </tr>
        </tbody>
</table>

    &nbsp;
    </div>
</form>

@endsection