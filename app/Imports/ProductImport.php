<?php

namespace App\Imports;

use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class ProductImport implements  ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function model(array $row)
    {
        $date = '';
        product::create([
            'Name' => $row[1],
            'Image' => $row[2],
            'ProductSku' => $row[3],
            'Price'=>$row[4],
            'manuPrice'=>$row[5],
            'GiftPrice'=>$row[6],
            'limits'=>$row[7],
            'InputPrice'=>$row[8],
            'id_group_product'=>$row[9],
            'Link'=>$row[10],
            'LinkRedirect'=>$row[11],
            'Detail'=>$row[12],
            'Salient_Features'=>$row[13],
            'Specifications'=>$row[14],
            'Quantily'=>1,
            'promotion'=>$row[16],
            'Maker'=>$row[17],
            'Meta_id'=>1,
            'view'=>$row[19],
            'Group_id'=>$row[20],
            'orders_hot'=>$row[21],
            'active'=>$row[22],
            'user_id'=>$row[23],
            'updated_at'=>$date??'',
            'created_at'=>$row[25]??''
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
