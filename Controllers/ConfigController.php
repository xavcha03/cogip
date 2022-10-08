<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Model;
use App\Model\CompanyModel;
use App\Model\ConfigModel;
use App\Model\ContactModel;
use App\Model\InvoiceModel;
use Faker\Factory;

class ConfigController extends Controller
{
    /**
     * Demande au Model de réinitialiser les tables dans la base de données
     */
    public function install()
    {
        //Réinitialisation de la base de données
        $model = new ConfigModel();
        $model->installBdd();

        //ajout des types d'entreprises Belges
        $this->createCompanyType();

        //Ajout d'entreprises fictives
        $nbrCompanies = 50;
        $this->createCompanies($nbrCompanies);

        //Ajout de contacts fictifs
        $nbrContact = 100;
        $this->createContacts($nbrContact);

        //Ajout de factures fictives^
        $nbrInvoices = 200;
        $this->createInvoices($nbrInvoices);
    }

    /**
     * Controller de tests
     */
    public function test()
    {
    }

    public function createInvoices($nbrInvoices)
    {
        $faker = Factory::create();
        $invoices = [];
        //echo "FF" . date("Ymd") . "-001";

        $invoiceModel = new InvoiceModel();
        $companyModel = new CompanyModel();
        $companies = $companyModel->getAllCompanies();
        for ($i = 0; $i < $nbrInvoices; $i++) {
            $invoice = [];

            $invoice['reference'] =  "FF" . date("Ymd") . '-' . sprintf("%03d", $i);;
            $invoice['company_id'] = $companies[rand(0, count($companies) - 1)]['id'];

            $invoiceModel->addInvoice($invoice);
            $invoices[] = $invoice;
        }
    }




    public function createContacts($qty)
    {
        $faker = Factory::create();

        $contacts = [];

        $contactmodel = new ContactModel();
        $companyModel = new CompanyModel();
        $companies = $companyModel->getAllCompanies();


        for ($i = 0; $i < $qty; $i++) {
            $contact = [];
            $contact['name'] = $faker->firstName() . " " . $faker->lastName();
            $contact['email'] = $faker->email();
            $contact['phone'] = $faker->e164PhoneNumber();
            $contact['company_id'] = $companies[rand(0, count($companies) - 1)]['id'];

            $contactmodel->addContact($contact);





            $contacts[] = $contact;
        }
        dd($contacts);
    }



    /**
     * 
     */
    public function createCompanies($qty)
    {
        $faker = Factory::create();
        //création de noms d'entreprises

        //get all company types
        $model = new CompanyModel();
        $companyTypes = $model->getAllType();



        for ($i = 0; $i < $qty; $i++) {
            $company = [];
            $company['name'] = $faker->company();
            $rand = rand(0, count($companyTypes) - 1);
            $company['type_id'] = $companyTypes[$rand]['id'];
            $company['country'] = $faker->country();
            $company['tva'] = rand(0, 1000000000000);

            $model->addCompany($company);
        }
    }

    public function createCompanyType()
    {
        $types = [
            "SA",
            "SRL",
            "SC",
            "SNC",
            "SCS",
            "ASBL",
            "AISBL"
        ];

        $model = new CompanyModel();

        foreach ($types as $type) {
            $model->addType($type);
        }
    }
}
