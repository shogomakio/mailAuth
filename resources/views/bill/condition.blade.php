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
                <td style="text-align: right;"><p class="estiloLight">(一般労働者用；日雇型)</p></td>
            </tr>
            <tr>
                <td style="text-align:center;" colspan="2"><h1 id="fontStyle"><p class="estiloPrincipal">労働条件通知書</p></h1></td>
            </tr>
        </tbody>
    </table>
    <table id="tabla" border="1" style="height:1080px">
        <tbody>
            <tr>
                <td id="columnaCompleta" colspan="4"><p class="estilo"style="text-align: right;">年　月　日</p>
                <p class="estilo"style="text-decoration: underline; vertical-align:bottom;">記名無し・有選択可能　殿</p>
                </td>
            </tr>
            <tr>
                <td id="columnaCompleta" colspan="4"><p class="estilo">【企業求人作成画面】の募集企業名から生成</p></td>
            </tr>
            <tr>
                <td id="columnaCompleta" colspan="4"><p class="estilo">【企業求人作成画面】の事業所責任者から生成</p></td>
            </tr>
            <tr>
                <td id="columnaVeinte"><p class="estiloTitle">就労日</p></td>
                <td id="columnaOchenta" colspan="3"><p>【企業求人作成画面】の日付から生成</p></td>
            </tr>
        <tr>
            <td id="columnaVeinte"><p class="estiloTitle">就業の場所</p></td>
            <td id="columnaOchenta" colspan="3"><p class="estilo">【企業求人作成画面】のお仕事タイトルから生成</p></td>
        </tr>
        <tr>
            <td id="columnaVeinte"><p class="estiloTitle">従事すべき業務の内容</p></td>
            <td id="columnaOchenta" colspan="3"><p class="estilo">【企業求人作成画面】のお仕事詳細から生成</p></td>
        </tr>
        <tr>
            <td id="columnaVeinte"><p class="estiloTitle">始業、終業の時刻、休暇期間、所定時間外労働の有無に関する事項</td></p>
            <td id="columnaOchenta" colspan="3">
            <ol>
                <li><p class="estilo">【企業求人作成画面】の就業時間から生成</p></li>
                <li><p class="estilo">【企業求人作成画面】の休暇時間から生成</p></li>
                <li><p class="estilo">【企業求人作成画面】の時間外労働から生成</p></li>
            </ol>
        </td>
        </tr>
        <tr>
            <td id="columnaVeinte"><p class="estiloTitle">休日</p></td>
            <td id="columnaOchenta" colspan="3"><p class="estilo">就業日のみのため休日無し</p></td>
        </tr>
        <tr>
            <td id="columnaVeinte"><p class="estiloTitle">契約期間</p></td>
            <td id="columnaOchenta" colspan="3"><p class="estilo">2018/1/29～2018/1/29</p></td>
        </tr>
        <tr>
            <td id="columnaVeinte" rowspan="10"><p class="estiloTitle">資金</p></td>
            <td id="columnaOctal"><p class="estiloTitle">給与形態区分</p></td>
            <td  colspan="2"><p class="estilo">【企業求人作成画面】の給与形態区分から生成</p></td>
        </tr>
        <tr>
            <td ><p class="estiloTitle">基準単価</p></td>
            <td colspan="2"><p class="estilo">【企業求人作成画面】の単価から生成</p></td>
        </tr>
        <tr>
            <td id="columnaOctal" rowspan="5"><p class="estiloTitle">割増</p></td>
            <td id="columnaOctal"><p class="estilo">法定時間外</p></td>
            <td ><p class="estilo">25％</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estilo">法定休日</p></td>
            <td ><p class="estilo">35％</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estilo">休日</p></td>
            <td ><p class="estilo">&nbsp;</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estilo">深夜</p></td>
            <td ><p class="estilo">25％</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estilo">深夜時間外</p></td>
            <td ><p class="estilo">50％</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estiloTitle">交通費</p></td>
            <td id="columnaOctal"><p class="estilo">有・無</p></td>
            <td ><p class="estilo">&nbsp;</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estiloTitle">資金支払の控除</p></td>
            <td id="columnaOctal"><p class="estilo">有・無</p></td>
            <td ><p class="estilo">【企業求人作成画面】の控除から生成</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estiloTitle">支払い条件</p></td>
            <td colspan="2"><p class="estilo">【企業求人作成画面】の支払い条件から生成</p></td>
        </tr>
        <tr>
            <td id="columnaVeinte" rowspan="2"><p class="estiloTitle">契約更新</p></td>
            <td id="columnaOctal"><p class="estiloTitle">契約更新の有無</p></td>
            <td colspan="2"><p class="estilo">無</p></td>
        </tr>
        <tr>
            <td id="columnaOctal"><p class="estiloTitle">契約更新に関する基準</p></td>
            <td  colspan="2">
            <p class="estilo">・契約期間満了時の業務量　・労働者の業務成績、態度　・労働者の能力　・会社の経営状況　・従事している業務の進捗状況</p>
            </td>
        </tr>
        <tr>
            <td id="columnaVeinte" style="height:120px"><p class="estiloTitle">その他</p></td>
            <td colspan="3"><p class="estilo">&nbsp;</p></td>
        </tr>
        </tbody>
    </table>
    <div id="notes">
        <p class="estilo">※ 以上のほかは、当社就業規則による。</p>        
        <p class="estilo">※ 労働条件通知書については、労使間の紛争の未然防止のため、保存しておくことをお勧めします。</p>
        <p class="estilo2">※ 赤字の部分は企業情報や募集情報から自動で登録されます。</p>
    </div>
</div＞     
</form>

@endsection