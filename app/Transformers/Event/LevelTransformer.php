<?php
/**
 * @author       Lemberg Solution LAMP Team
 */

namespace App\Transformers\Event;


use League\Fractal\TransformerAbstract;

class LevelTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var  array
     */
    protected $availableIncludes = [];

    /**
     * List of resources to automatically include
     *
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * Transform object into a generic array
     *
     * @var  object
     * @return array
     */
    public function transform($type)
    {
        $speakers = [
            'levelId'   => $type->id,
            'levelName' => $type->name,
            'order'     => $type->order,
            'deleted'   => $type->deleted_at ? 1 : 0,
        ];

        return $speakers;
    }
}