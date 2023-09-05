<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductImport implements  ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {

        dd($row[2]);
        product::create([
            'Name' => $row[0],
            'Image' => $row[1]??'/wp-content/uploads/2019/11/IMG_2556-800x800.jpg',
            'ProductSku' => $row[2],
            'Price'=>$row[3],
            'manuPrice'=>$row[4],
            'GiftPrice'=>$row[5],
            'limits'=>$row[6],
            'InputPrice'=>$row[7],
            'id_group_product'=>$row[8],
            'Link'=>$row[9],
            'LinkRedirect'=>$row[10],
            'Detail'=>$row[11],
            'Quantily'=>$row[12],
            'promotion'=>$row[13],
            'Maker'=>$row[14],
            'Meta_id'=>$row[15],
            'view'=>$row[16],
            'group_id'=>$row[17],
            'orders_hot'=>$row[18],
            'active'=>$row[19],
            'user_id'=>$row[20],
        ]);
    }

    

    public function rules(): array
    {
        return [
            '0' => 'required|unique:products|max:1000',
            '1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            '2' => 'required|unique:products',
            '3' => 'required',
        ];
    }

   
}
