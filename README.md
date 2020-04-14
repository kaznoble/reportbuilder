Add package to your composer:<br />

composer require samuelterra22/laravel-report-generator<br />
Then, add the ServiceProvider to the providers array in config/app.php<br />

SamuelTerra22\ReportGenerator\ServiceProvider::class,<br />
Optionally, you can add this to your aliases array in config/app.php<br />

'PdfReport'     => SamuelTerra22\ReportGenerator\Facades\PdfReportFacade::class,<br />
'ExcelReport'   => SamuelTerra22\ReportGenerator\Facades\ExcelReportFacade::class,<br />
'CSVReport'     => SamuelTerra22\ReportGenerator\Facades\CSVReportFacade::class,
