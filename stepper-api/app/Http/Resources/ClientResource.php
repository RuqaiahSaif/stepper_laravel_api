<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "name" => $this->name,
            "email" => $this->email,
            'phone_number' => $this->phone_number,
            'gender' => $this->gender,
            'national_id_number' => $this->national_id_number,
            'package' => $this->package,
            'store_type' => $this->store_type,
            'image' => $this->image,
            'bank_name' => $this->bank_name,
            'accountNumber' => $this->accountNumber,
            'iban' => $this->iban,
        ];

    }
}
