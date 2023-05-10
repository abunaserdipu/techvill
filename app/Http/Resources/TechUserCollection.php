<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TechUserCollection extends ResourceCollection
{
    /**
     * The "data" wrapper that should be applied.
     *
     * @var string|null
     */
    public static $wrap = 'items';
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    private $pagination;

    public function __construct($resource)
    {
        $this->pagination = [
            'current_url' => url()->full(),
            // 'next_url' => $resource->toArray()['first_page_url'],
            'total_page' => $resource->total(),
        ];

        $resource = $resource->getCollection();
        parent::__construct($resource);
    }
    public function toArray($request)
    {
        return [
            'items' => $this->collection,
            'metadata' => $this->pagination,
        ];
    }
}
