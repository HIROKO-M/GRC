<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Keyword;

class KeywordsController extends Controller
{

    public function index()
    {
        $keywords = Keyword::all();
        
        return view('keywords.index', [
            'keywords' => $keywords,
        ]);
    }


    public function create()
    {
        $keyword = new Keyword;
        
        return view('keywords.create', [
            'keyword' => $keyword,
        ]);
    }


    public function store(Request $request)
    {
        $this-> validate($request, [            // ユーザが意図しない入力した場合の対処
            'keyword' => 'required|max:255',
            'site_name' => 'required|max:255',
            'site_url' => 'required|max:255',
        ]);
        
        $keyword = new Keyword;
        $keyword->keyword = $request->keyword;
        $keyword->site_name = $request->site_name;
        $keyword->site_url = $request->site_url;
        $keyword->save();
        
        return redirect('/');                   // store アクションはキーワードを新規作成したあと、 / へリダイレクトさせているので、View は不要
        
    }


    public function show($id)
    {
        $keyword = Keyword::find($id);
        
        return view('keywords.show', [
            'keyword' => $keyword,
        ]);
    }


    public function edit($id)
    {
        $keyword = Keyword::find($id);
        
        return view('keywords.edit', [
            'keyword' => $keyword,
        ]);
    }


    public function update(Request $request, $id)
    {
        $this-> validate($request, [            // ユーザが意図しない入力した場合の対処
            'keyword' => 'required|max:255',
            'site_name' => 'required|max:255',
            'site_url' => 'required|max:255',
        ]);
        
        $keyword = Keyword::find($id);
        $keyword->keyword = $request->keyword;
        $keyword->site_name = $request->site_name;
        $keyword->site_url = $request->site_url;
        $keyword->save();
        
        return redirect('/');                   // update アクションはキーワードを新規作成したあと、 / へリダイレクトさせているので、View は不要
        
    }


    public function destroy($id)
    {
        $keyword = Keyword::find($id);                                  // $id で検索
        $keyword->delete();
        
        return redirect('/');               // destroy アクションはメッセージを新規作成したあと、 / へリダイレクトさせているので、View は不要
                
    }
}
