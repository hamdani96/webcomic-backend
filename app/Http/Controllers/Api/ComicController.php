<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use App\Models\DetailComic;
use App\Models\ListImageComic;
use Exception;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // get daftar komik
    public function getComic()
    {
        try {
            $comics = Comic::orderBy('created_at', 'desc')->get();

            return response()->json([
                'code' => 200,
                'message' => 'success',
                'data'  => $comics,
            ]);
        } catch(Exception $e) {
            return response()->json([
                'code'  => 500,
                'status' => 'Failed',
                'message'   => $e->getMessage(),
            ]);
        }
    }

    // get by id comic
    public function getDetailComic($id) {
        $comic = Comic::where('id', $id)->first();
        $detailComic = DetailComic::where('comic_id', $id)->orderBy('episode', 'desc')->get();

        return response()->json([
            'code' => 200, 
            'message' => 'success',
            'data' => [
                'comic' => $comic,
                'detailComic' => $detailComic
            ],
        ]);
    }

    // read comic
    public function getReadComic($id)
    {
        $comic = ListImageComic::where('detail_comic_id', $id)->orderBy('page_number', 'asc')->get();

        return response()->json([
            'code' => 200,
            'message' => 'success',
            'data' => $comic,
        ]);
    }
}
