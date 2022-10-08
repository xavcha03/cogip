<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;
use App\Model\ContactModel;
use App\Model\InvoiceModel;

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $datas = [];
        $invoiceModel = new InvoiceModel;
        $datas['invoices'] = $invoiceModel->listInvoice(10, null, 'created_at', 'DESC');

        $ContactModel = new ContactModel();
        $datas['contacts'] = $ContactModel->listContact(10, null, 'created_at', 'DESC');

        $CompanyModel = new CompanyModel();
        $datas['companies'] = $CompanyModel->getAllCompanies(10, null, 'created_at', 'DESC');

        return $this->view('front-end/body', ["datas" => $datas]);
    }

    public function listInvoices($page = 1)
    {
        $datas = [];
        $invoiceModel = new InvoiceModel;
        $datas['invoices'] = $invoiceModel->listInvoice(10, $page, 'created_at', 'DESC');
        return $this->view('front-end/invoices', ["datas" => $datas]);
    }

    public function listCompanies($page = 1)
    {
        $datas = [];
        $CompanyModel = new CompanyModel();
        $datas['companies'] = $CompanyModel->getAllCompanies(10, $page, 'created_at', 'DESC');
        return $this->view('front-end/companies', ["datas" => $datas]);
    }
}
