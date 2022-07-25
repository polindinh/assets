<?php

namespace App\Exports;

use App\Models\Asset;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AssetsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $asssets =  Asset::with([
            'hardware',
            'pc_specification',
            'creator',
        ])->get();
        $gets = [];
        foreach ($asssets as $assset){
            $gets[] = [
                'asset_id' => $assset->asset_id,
                'operating_system' => $assset->operating_system,
                'notes' => $assset->notes,
                "type"=> $assset->hardware->type,
                "vendor"=> $assset->hardware->vendor,
                "model"=> $assset->hardware->model,
                "size"=> $assset->hardware->size,
                "cpu"=> $assset->pc_specification->cpu,
                "gpu"=> $assset->pc_specification->gpu,
                "memory"=> $assset->pc_specification->memory,
                "storage"=> $assset->pc_specification->storage,
                "is_ssd"=> $assset->pc_specification->is_ssd,
                "wifi_enabled"=> $assset->pc_specification->wifi_enabled,
                "wwan_enabled"=> $assset->pc_specification->wwan_enabled,
                'created_by' => $assset->creator->name,
            ];
        };

        return collect($gets);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function headings(): array
    {
        return [
                'asset_id' ,
                'operating_system' ,
                'notes',
                "type",
                "vendor",
                "model",
                "size",
                "cpu",
                "gpu",
                "memory",
                "storage",
                "is_ssd",
                "wifi_enabled",
                "wwan_enabled",
                'created_by'
        ];
    }
}
