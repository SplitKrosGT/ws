<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAll() {
        $cards = Card::all();
        return response()->json($cards);
    }

    public function add(Request $request) {
        $card_text = $request->input('card_text');

        $card = new Card();
        $card->card_text = $card_text;
        $card->save();

        return response()->json($card, 200);
    }

    public function edit(Request $request, $card_id) {
        $card_text = $request->input('card_text');

        $card = Card::find($card_id);
        $card->card_text = $card_text;
        $card->save();

        return response()->json($card);
    }

    public function like($card_id) {
        $card = Card::find($card_id);

        $card->card_likes = $card['card_likes'] + 1;
        $card->save();

        return response('Succesfull card liked.', 200)->json($card);
    }

    public function delete($card_id) {

        $card = Card::find($card_id);
        $card->delete();

        return response('Succesfull card deleted.', 200);
    }

}