<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use DateTime;
use DatePeriod;
use DateInterval;

class ExportEmployee implements FromCollection, WithHeadings, WithStyles, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $from;
    protected $to;
    public function __construct($from, $to)
    {
        $this->from = $from;
        $this->to = $to; 
    }

    public function collection()
    {
        return Employee::select('id','personal_id','full_name')
<<<<<<< HEAD
                        ->where('emp_location','=','1')
=======
>>>>>>> 2b184794fb6d0d94523550d520ca7221e2309eba
                        ->orderBy('full_name', 'ASC')->get();
    }

    public function headings(): array
    {

        $datetime1 = new DateTime($this->from);
        $datetime2 = new DateTime($this->to);
        $interval = date_diff($datetime1, $datetime2);
        $count = $datetime2->diff($datetime1)->format("%a");
        $ct=$count*2;
        // $interval = DateInterval::createFromDateString('1 day');
        // $period = new DatePeriod($datetime1, $interval, $datetime2);
        $str="";
       
        $array_header = array(
            '#',
            'ID',
            'Full Name',
        );
        for($x=1;$x<=$ct;$x++){
            if($x==1){
                $date=date('M j Y', strtotime($this->from . ' +1 day'));
            }else if($x==3){
                $date=date('M j Y', strtotime($this->from . ' +2 day'));
            } else if($x==5){
                $date=date('M j Y', strtotime($this->from . ' +3 day'));
            } else if($x==7){
                $date=date('M j Y', strtotime($this->from . ' +4 day'));
            }else if($x==9){
                $date=date('M j Y', strtotime($this->from . ' +5 day'));
            }else if($x==11){
                $date=date('M j Y', strtotime($this->from . ' +6 day'));
            }else if($x==13){
                $date=date('M j Y', strtotime($this->from . ' +7 day'));
            }
            array_push($array_header,$date);
         
           
        }
        // foreach ($period as $dt) {
        //     array_push($array_header,$dt->format("M j"));
        // }
        
        return $array_header;
       
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:Q1')->getFont()->setBold(true);
        $sheet->mergeCells('D1:E1');
        $sheet->mergeCells('F1:G1');
        $sheet->mergeCells('H1:I1');
        $sheet->mergeCells('J1:K1');
        $sheet->mergeCells('L1:M1');
        $sheet->mergeCells('N1:O1');
        $sheet->mergeCells('P1:Q1');

        $sheet->getStyle('A1:Q1')
                ->getAlignment()
                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        
    }


}
