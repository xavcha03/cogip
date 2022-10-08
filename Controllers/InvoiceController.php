<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;
use App\Model\InvoiceModel;

class InvoiceController extends Controller
{
    public function displayForm()
    {
        $model = new CompanyModel();
        $companies = $model->getAllCompanies();
        $this->view('dashboard/invoices/addForm', ["companies" => $companies]);
    }

    public function addInvoice()
    {
        $invoiceData = [];
        $invoiceData["reference"] = $_POST["reference"];
        $invoiceData["company_id"] = $_POST["company_id"];


        $model = new InvoiceModel();
        $model->addInvoice($invoiceData);

        header("Location:/dashboard/invoice");
    }

    public function list()
    {
        $model = new InvoiceModel();
        $invoices = $model->listInvoice();

        $this->view('dashboard/invoices/listInvoices', ["invoices" => $invoices]);
    }

    public function delete($invoiceId)
    {
        $model = new InvoiceModel();
        $model->deleteInvoice($invoiceId);
    }
}
