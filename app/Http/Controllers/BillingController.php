<?php

namespace App\Http\Controllers;

use App\Models\BillingInfo;
use App\Models\Invoice;
use App\Models\Transaction;

class BillingController extends Controller
{
    /**
     * Halaman Billing.
     */
    public function index()
    {
        $invoices = Invoice::orderBy('invoice_date', 'desc')->limit(5)->get();
        $billingInfos = BillingInfo::orderBy('created_at', 'desc')->get();
        $transactions = Transaction::orderBy('transaction_date', 'desc')->get();

        // Group transactions by category
        $groupedTransactions = $transactions->groupBy('category');

        return view('billing.index', compact('invoices', 'billingInfos', 'groupedTransactions'));
    }
}

