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

class Financial5050Export  implements FromView, WithEvents, WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     //
    // }

    public function view(): View
    {
        return view('export.financial5050');
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
            	$event->sheet->getDelegate()->getStyle('A1')->getAlignment()->setWrapText(true);
            	$cellRange = 'A1:F30';
            	$event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->applyFromArray(
                    array('vertical' => 'center')
                );
                $event->sheet->getDelegate()->getStyle('A2')->getAlignment()->setWrapText(true); 
                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->applyFromArray(array('vertical' => 'center'));
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setName('Arial');
                $cellRange = 'D3:H90';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(10);
                
                $event->sheet->setCellValue('B4', session('totalPrice'));
                $event->sheet->setCellValue('B6', session('credit'));
                $event->sheet->setCellValue('B7', session('tenor'));
                $event->sheet->setCellValue('B5', '=100%-(B6/B4)');
                $event->sheet->setCellValue('D4', '=B6');
                $event->sheet->setCellValue('E4', '=B6*B8');
                $event->sheet->setCellValue('F4', '=D4+E4');
                $event->sheet->getDelegate()->getStyle('B5')->getNumberFormat()->setFormatCode('0%');
                $event->sheet->getDelegate()->getStyle('B8')->getNumberFormat()->setFormatCode('0%');
                $event->sheet->getDelegate()->getStyle('D4:F30')->getNumberFormat()->setFormatCode('#,##0');
                
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
