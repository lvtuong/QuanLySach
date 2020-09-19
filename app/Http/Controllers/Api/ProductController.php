<?php

namespace App\Http\Controllers\Api;

use App\Article;
use App\Http\Resources\ArticleResource;
use App\Repositories\Article\ArticleRepositoryEloquent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $productModel;
    public function __construct(ArticleRepositoryEloquent $productModel)
    {
        $this->productModel = $productModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \App\Article[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = $this->productModel->getAll();

        return ArticleResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Article[]|ArticleResource|\Illuminate\Database\Eloquent\Collection
     */
    public function store(Request $request)
    {

        $title = $request->title;
        $body = $request->body;
//        return Article::create([‘title’ => $title, ‘body’ => $body]);
        return $this->productModel->createArticle($title, $body);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return $this->productModel->getOne($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $body = $request->body;
        
            $this->productModel->updateArticle($id, $title, $body);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return int
     */
    public function destroy($id)
    {
        return $this->productModel->delete($id);
    }
}
