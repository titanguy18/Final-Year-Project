<?php 
namespace App\Exports;
 
use App\Models\Car;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
 
class CarExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'Id',
            'Car',
            'Description',
            'Price',
            'Quantity',
            'Brand',
            'Created_at',
            'Updated_at' 
        ];
    } 
    public function collection()
    {
        return Car::all();
    }
}