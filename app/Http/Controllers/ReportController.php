<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

/* To build PDF report */
use PdfReport;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reportbuilder(request $request)
    {
		$fromDate = $request->input('from_date');
		$toDate = $request->input('to_date');
		$sortBy = $request->input('sort_by');

		$title = 'Registered User Report'; // Report title

		$meta = [ // For displaying filters description on header
			'Registered on' => $fromDate . ' To ' . $toDate,
			'Sort By' => $sortBy
		];
		
		// Get database table from model
		$queryBuilder = Report::select([
				'forename',
				'surname',
				'date_of_birth'
			]);

		$columns = [
			'Forname' => 'forename',
			'Surname' => 'surname',
			'Date of Birth' => 'date_of_birth'
		];

		// Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
		return PdfReport::of($title, $meta, $queryBuilder, $columns)
						->limit(10) // Limit record to be showed
						->stream(); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
    }

}
