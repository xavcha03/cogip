<?php

namespace App\Controllers;

use App\Core\Controller;

class InvoicesController extends Controller
{
    //Display add invoice form
    public function callFormCompany()
    {
        //Get all invoices in BDD
        $model = new InvoiceModel();
        $invoice = $model->getAllInvoice();

        //Display view
        $this->view('dashboard/invoice', ["invoice" => $invoice]);
    }
}