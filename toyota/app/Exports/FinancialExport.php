<?php

namespace App\Exports;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Session;

class FinancialExport implements FromView, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     
    // }

    public function view(): View
    {
        return view('export.financial');
    }


    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:H90';
                $event->sheet->getDelegate()->getStyle('A1')->getAlignment()->setWrapText(true); 
                $event->sheet->getDelegate()->getStyle('A1')->getAlignment()->applyFromArray(
                    array('vertical' => 'center') //left,right,center & vertical
                );
                $event->sheet->mergeCells('E2:H2');
                $event->sheet->getDelegate()->getStyle('A2')->getAlignment()->setWrapText(true); 
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->applyFromArray(array('vertical' => 'center'));
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setName('Arial');
                $cellRange = 'D3:H90';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(10);
                
                $event->sheet->setCellValue('B4', session('totalPrice'));
                $event->sheet->setCellValue('B6', session('credit'));
                $event->sheet->setCellValue('B7', session('tenor'));
                $event->sheet->setCellValue('B5', '=100%-(B6/B4)');
                $event->sheet->getDelegate()->getStyle('B5')->getNumberFormat()->setFormatCode('0%');
                $event->sheet->getDelegate()->getStyle('B8')->getNumberFormat()->setFormatCode('0%');
                $event->sheet->getDelegate()->getStyle('E4:H90')->getNumberFormat()->setFormatCode('#,##0');

                $event->sheet->setCellValue('F5', '=IF($D5<=$B$7,H4*$B$8/12,IF($D5="TOTAL",SUM(F$4:F4),""))');
                // $event->sheet->setCellValue('G5', '=B16');
                $event->sheet->setCellValue('G12', '=IF($D12<$B$7,$G$5,IF($D12=$B$7,$H$4-SUM($G$5:G11),IF($D12="TOTAL",SUM(G$5:G11),"")))');
                $event->sheet->setCellValue('H12', '=H10-G11');
                $cellRange = 'D4:D90';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('99ccff');
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->applyFromArray(array('horizontal' => 'center'));
                $cellRange = 'E4:H90';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('ffff00');
                
                for ($i=6; $i < 65; $i++) { 
                    $t = $i - 1;
                    $event->sheet->setCellValue('D'.$i, '=IF(D'.$t.'<$B$7,D'.$t.'+1,IF(D'.$t.'=$B$7,"TOTAL",""))');
                    $event->sheet->setCellValue('H'.$i, '=IF($D'.$i.'<=$B$7,H'.$t.'-G'.$i.',"")');
                    $event->sheet->setCellValue('G'.$i, '=IF($D'.$i.'<$B$7,$G$5,IF($D'.$i.'=$B$7,$H$4-SUM($G$5:G'.$t.'),IF($D'.$i.'="TOTAL",SUM(G$5:G'.$t.'),"")))');
                    $event->sheet->setCellValue('F'.$i, '=IF($D'.$i.'<=$B$7,H'.$t.'*$B$8/12,IF($D'.$i.'="TOTAL",SUM(F$4:F'.$t.'),""))');
                    $event->sheet->setCellValue('E'.$i, '=IF($D'.$i.'<=$B$7,F'.$i.'+G'.$i.',IF($D'.$i.'="TOTAL",SUM(E$5:E'.$t.'),""))');
                }
            },
        ];
    }

    public function columnFormats(): array
    {
        return [
            // 'B' => NumberFormat::FORMAT_DATE_DDMMYYYY,
            // 'B' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
            // 'B' => NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
            'B' => '#,##0',
        ];
    }
}
