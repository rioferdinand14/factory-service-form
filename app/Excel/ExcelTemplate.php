<?php

namespace App\Excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelTemplateGenerator
{
    protected $spreadsheet;
    protected $sheet;

    public function __construct()
    {
        // Create new Spreadsheet object
        $this->spreadsheet = new Spreadsheet();
    }

    public function setupSpreadsheet()
    {
        // Set active sheet
        $this->sheet = $this->spreadsheet->getActiveSheet();
    }

    public function addColumnTitles()
    {
        // Define column titles
        $titles = [
            'id',
            'input_date',
            'eta_project',
            'nama_project',
            'detail',
            'requestor',
            'category_project',
            'status',
            'pic_project',
            'description_project',
            'photos_img'
        ];

        // Set column titles in first row
        foreach ($titles as $key => $title) {
            $this->sheet->setCellValueByColumnAndRow($key + 1, 1, $title);
        }
    }
}
