<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Patient */
class PatientResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'patronymic' => $this->patronymic,
            'contact_information_id' => $this->contact_information_id,
            'snils' => $this->snils,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
