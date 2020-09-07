<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource as JsonResourceAlias;

class ArticleResource extends JsonResourceAlias
{
    /**
     * @var mixed
     */
    private $body;
    /**
     * @var mixed
     */
    private $title;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
//        return [
//            'title' => $this->title,
//            'body' => $this->body,

//        ];
    }


}
