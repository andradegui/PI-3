<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request){

       Tag::create($request->all());
       session()->flash('success', 'A Tag foi criado com sucesso');
       return redirect(route('tag.index'));


    }

    public function index(){

        return view('tag.index')->with('tags', Tag::all());
    }

    public function edit(Tag $tag){

        return view('tag.edit')->with(['tag' => $tag, 'tags' => Tag::all()]);

    }

    public function update(Tag $tag, Request $request){

        $tag->update($request->all());
        session()->flash('success', 'A tag foi alterada');
        return redirect(route('product.index', $tag->id));
    }

    public function destroy(Tag $tag){

        $tag->delete();
        session()->flash('success', 'A tag foi apagada');
        return redirect(route('tag.index'));
    }

    public function restore($tag_id){
        $tag = Tag::onlyTrashed()->where('id', $tag_id)->first();
        $tag->restore();
        session()->flash('success', 'Tag restaurada com sucesso');
        return redirect(route('tag.index'));
    }

    public function trash(){

        return view('tag.trash')->with('tags', Tag::onlyTrashed()->get());
}

}
