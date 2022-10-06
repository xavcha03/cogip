<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Model\CompanyModel;
use App\Model\ContactModel;
use App\Model\InvoiceModel;

class DashBoardController extends Controller
{
    public function statistiques()
    {
        $datas = [];
        //statistiques
        //Count invoices
        $model = new InvoiceModel();
        $datas['invoiceCount'] = $model->countInvoices();
        $datas['lastInvoices'] = $model->listInvoice();
        //Count contacts
        $model = new ContactModel();
        $datas['contactCount'] = $model->countContact();
        $datas['lastContacts'] = $model->listContact();
        //Count companies
        $model = new CompanyModel();
        $datas['companiesCount'] = $model->countCompanies();
        $datas['lastCompanies'] = $model->getAllCompanies();





        //var_dump($datas);
        $this->view('dashboard/home', ["datas" => $datas]);
    }
}
