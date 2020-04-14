Add package to your composer:

composer require samuelterra22/laravel-report-generator
Then, add the ServiceProvider to the providers array in config/app.php

SamuelTerra22\ReportGenerator\ServiceProvider::class,
Optionally, you can add this to your aliases array in config/app.php

'PdfReport'     => SamuelTerra22\ReportGenerator\Facades\PdfReportFacade::class,
'ExcelReport'   => SamuelTerra22\ReportGenerator\Facades\ExcelReportFacade::class,
'CSVReport'     => SamuelTerra22\ReportGenerator\Facades\CSVReportFacade::class,
