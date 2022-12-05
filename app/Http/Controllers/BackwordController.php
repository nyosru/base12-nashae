<?php

namespace App\Http\Controllers;

use App\Models\Osts;
use Illuminate\Http\Request;
use Nyos\Msg;

class BackwordController extends Controller
{

    public static function toNormNum($str)
    {
        return round(str_replace(',', '.', preg_replace("/[^,.0-9]/", '', $str)), 2);
    }

    /**
     * @return Renderable
     */
    public function creatMsg(string $fio, string  $phone, array $kolvo, object $goods)
    {
        $text = '----- Новый заказ -----' . PHP_EOL;
        $text .= 'фио:' . ($fio ?? '--') . PHP_EOL;
        $text .= 'тел:' . ($phone ?? '--') . PHP_EOL . PHP_EOL;

        $summa = 0;

        // dd($kolvo);

        foreach ($goods as $g) {
            if (!empty($kolvo[$g->id]) && $kolvo[$g->id] > 0) {
                // dd($g);
                // $text .= $g->naimenovanie . ' ' . $g->dobavka . ' (' . $g->cena1 . '/' . $g->cena2 . '/' . $g->cena3 . ')' . PHP_EOL;
                $text .= $g->naimenovanie . ' ' . $g->dobavka . PHP_EOL . '( ' . ($kolvo[$g->id] ?? '0') . ' ед * ' . $g->cena3 . ' = ';


                // $g->cena3

                // $summa0 = ( !empty($kolvo[$g->id]) $kolvo[$g->id] > 0 ) ?
                $summa0 = !empty($kolvo[$g->id]) ? round($kolvo[$g->id] * self::toNormNum($g->cena3), 2) : 0;
                $summa += $summa0;
                $text .= $summa0 . 'р )';
                $text .= PHP_EOL . PHP_EOL;
                // $text .= $return['good_db'][$g->id] . ' ед.' . PHP_EOL . PHP_EOL;
            }
        }

        $text .= 'Итого: ' . $summa;

        return $text;
    }

    /**
     * sendOrder
     * @return Renderable
     */
    public function sendOrder(Request $request)
    {
        $in = [];
        // $request->goods = [1, 2, 3];
        foreach ($request->goods as $k => $v) {
            if (!empty($v)) {
                $in[] = $k;
            }
        }

        // $res = ShopOst::find($in);
        $res = Osts::find($in);
        // $i = $res->toArray();
        // select(['id','naimenovanie', 'dobavka','cena1','cena2','cena3'])->

        $text = self::creatMsg($request->fio, $request->phone, $request->goods, $res);

        // вячеслав
        Msg::$admins_id[] = 729843637;

        Msg::sendTelegramm($text, null, 1);

        // dd([
        //     $text
        //     // $msg, 
        //     // $request->fio, $request->phone,
        //     //$i, 
        //     // $res, $request->goods, 789789
        // ]);
        $return = ['result' => true];
        return response()->json($return);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
