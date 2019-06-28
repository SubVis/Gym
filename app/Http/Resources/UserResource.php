<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Subscription;
use App\Http\Resources\SubscriptionResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"    => $this->id,
            "name"  => $this->name,
            "email" => $this->email,
            "admin"  => $this->admin,
            "subscription"  => [
                "start" => $this->subscription->start,
                "end" => $this->subscription->end,
            ]
        ];
    }
}
