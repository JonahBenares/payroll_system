<?php

namespace App\Imports;

use App\Models\UploadAllowance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AllowanceImport implements ToModel,WithMappedCells
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    
    // public function __construct($highestrow)
    // {
    //     $this->highestrow = $highestrow;
     
    // }

    public function mapping(): array
    {
        return [
            'D1' => 'D1',
            'D2' => 'F1',
            'D3' => 'H1',
            'D4' => 'J1',
            'D5' => 'L1',
            'D6' => 'N1',
            'D7' => 'P1',
        ];

       
    }


    public function model(array $row)
    {
       //print_r($row);
      
       // echo date("Y-m-d",strtotime($row['D1'])) . " - " .$row['D2'] . " - " .$row['D3'] . " - " .$row['fname']  . "<br>";
        // return new UploadAllowance([
           
        // ]);
    }

   
}
