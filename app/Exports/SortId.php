<?php

namespace App\Exports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SortId implements 
FromCollection, 
WithHeadings, 
WithMapping, 
WithStyles
{
    public function collection()
    {
        // Execute the query and fetch the data
        return Project::orderBy('id', 'desc')->get();
    }


    public function headings(): array
    {
        return [            
            'Input Date',
            'Nama Project',
            'Detail',
            'Request Name',
            'Category',
            'PIC',
            'Status',
            'Progress',
            'ETA Project',
        ];
    }

    public function map($project): array
    {
        return[
            $project->input_date,
            $project->nama_project,
            $project->detail,
            $project->requestor,
            $project->category_project,
            $project->pic_project,
            $project->status,
            $project->description_project,
            $project->eta_project,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Set column widths
        $sheet->getColumnDimension('A')->setWidth(12);
        $sheet->getColumnDimension('B')->setWidth(26);
        $sheet->getColumnDimension('C')->setWidth(24);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(18);
        $sheet->getColumnDimension('F')->setWidth(13);
        $sheet->getColumnDimension('G')->setWidth(15);
        $sheet->getColumnDimension('H')->setWidth(22);
        $sheet->getColumnDimension('I')->setWidth(13);
    
        // Set alignment for the entire range of columns
        $sheet->getStyle('A:I')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        $sheet->getStyle('A:I')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A:I')->getAlignment()->setWrapText(true);
        $sheet->getStyle('A1:I1')->getFont()->setBold(true);

        $sheet->getStyle('H')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        $sheet->getStyle('H')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);
        $sheet->getStyle('H1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
    }
    
}
