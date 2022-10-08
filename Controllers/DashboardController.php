<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;
use App\Model\ContactModel;
use App\Model\InvoiceModel;

class DashboardController extends Controller
{
    public function statistiques()
    {
        $datas = [];
        //statistiques
        //Count invoices
        $model = new InvoiceModel();
        $datas['invoiceCount'] = $model->countInvoices();
        $datas['lastInvoices'] = $model->listInvoice(10, null, "created_at", "DESC");
        //Count contacts
        $model = new ContactModel();
        $datas['contactCount'] = $model->countContact();
        $datas['lastContacts'] = $model->listContact(10, null, "created_at", "DESC");
        //Count companies
        $model = new CompanyModel();
        $datas['companiesCount'] = $model->countCompanies();
        $datas['lastCompanies'] = $model->getAllCompanies(10, null, "created_at", "DESC");





        //var_dump($datas);
        $this->view('dashboard/home', ["datas" => $datas]);
    }
}
