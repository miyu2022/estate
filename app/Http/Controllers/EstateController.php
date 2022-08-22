<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Log;

class EstateController extends Controller
{
                  // web.php の@から後と同じにすること
    public function index()
    {
        return view('estate.index');
    }

    public function search(Request $request)
    {   
        // 物件種別
        $bukken_type = $request->input("bukken_type",[1,2,3]);
        //dd($bukken_type);
        // 物件種別の配列を文字列に変換したもの-＄ｂｔ
        $bt = implode(",", $bukken_type);
        $sql = "select b.bukken_id,r.bukken_seq,b.bukken_name,b.bukken_address,r.room_cost,m.madori_name from bukken_info b "
                ."inner join room_info r on b.bukken_id = r.bukken_id "
                ."inner join madori_master m on r.madori_id = m.madori_id "
                ."where b.bukken_type in ($bt) "
                ."order by b.bukken_name,r.room_cost";
        Log::debug($sql);
        $list = DB::select($sql);
        //dd($list);
        $output = [];
        $output["list"] = $list;
        return view('estate.search_result', $output);
    }

    public function detail(Request $request)
    {
        $bukken_id = $request->input("bukken_id");
        $bukken_seq = $request->input("bukken_seq");
        $sql = "select b.bukken_name,r.*,b.bukken_address,m.madori_name from bukken_info b  "
        ."inner join room_info r on b.bukken_id = r.bukken_id "
        ."inner join madori_master m on r.madori_id = m.madori_id "
        ."where r.bukken_id = $bukken_id and r.bukken_seq = $bukken_seq";
        $detail = DB::select($sql);
        //dd($detail);
        $output = [];
        $output["detail"] = $detail[0];
        return view('estate.detail', $output);
    }
}

