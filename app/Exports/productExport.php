<?php

namespace App\Exports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class productExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return product::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'Name',
            'Image',
            'ProductSku',
            'Price',
            'manuPrice',
            'GiftPrice',
            'limits',
            'InputPrice',
            'id_group_product',
            'Link',
            'LinkRedirect',
            'Detail',
            'Salient_Features',
            'Specifications',
            'Quantily',
            'promotion',
            'Maker',
            'Meta_id',
            'views',
            'Group_id',
            'orders_hot',
            'active',
            'user_id',
            'created_at',
            'updated_at'

        ];
    }
}
