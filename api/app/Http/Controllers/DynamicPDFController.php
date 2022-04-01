<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }  
    
    
    function LettreMotivation(){
    // $pdf = \App::make('dompdf.wrapper');
    // $pdf->loadHTML('<h1>Test</h1>');
    // return $pdf->stream();

    $data= array(
        
        "nom_prenom" => "", 
        "adresse" => "", 
        "telephone" => "", 
        "email" => "",
        "date" => "" ,
        "ville" => "",
        "destinataire" => "",
        "poste_destinataire" => "",
        "objet" => "",
        "poste_a_occupe" => "",
        "votre_formation" => "",
        "experience_professionnelle" => "",
    );


    $pdf = PDF::loadView('pdf.modele_lettre_motivation', $data);
    $pathToFile = storage_path('app\LettreDeMotivation.pdf');
    $pdf->save($pathToFile);
    return 'Fichier exporté.';

    }


    function Contrat(){
        $data= array(
        
             //détails entreprise     
    $nom_entreprise = "" ,
    "numero_ifu" => "",
    "adresse_entreprise" => "", 
    "nom_representant" => "",
    "poste_representant" => "" , 
    //détails employé
    "nom_prenom_employe" =>"",
    "adresse_employe" =>"",
    "date_naissance_employe" =>"",
    "nationnalite" =>"",
    //détails article1
    "poste_a_occupe" =>"",
    "taches" =>"",
    //détails article2
    "date_debut_contrat" =>"",
    "duree_contrat"=>"",
    "date_fin_contrat" =>"",
    //détails article3
    "temps_essai" =>"",
    //détails du lieu de travail(article4)
    "pays" =>"",
    "departement" =>"",
    "arrondissement" =>"",
    "quartier" =>"",
    //article5
    "horaires_de_travail" =>"",
    "salaire" =>"",
    "date_du_jour" =>"",
        );
    
    
        $pdf = PDF::loadView('pdf.modele_contrat', $data);
    $pathToFile = storage_path('app\Contrat.pdf');
    $pdf->save($pathToFile);
    return 'Fichier exporté.';
    

    }


    function AttestationDeStage() {
        $data= array(
            "nom_representant_entreprise"=>"Arsène LAWANI",
            "poste_representant_entreprise"=>"manager",
            "nom_entreprise"=>"IWAJU TECH",
            "specialites_entreprise"=>"ingénierie logicielle",
            "mme_mr_mlle"=>"Mme",
            "nom_prenom_employe"=>"Dossou Jeanne",
            "poste_occupe"=>"développeur web junior",
            "periode_stage"=>"30 Août 2021  au 24 Septembre 2021",
            "ville"=>"Cotonou",
            "date_du_jour"=>"12/12/2012",
        
       );
     
       $pdf = PDF::loadView('pdf.modele_attestation_de_stage', $data);
    $pathToFile = storage_path('app\AttestationDeStage.pdf');
    $pdf->save($pathToFile);
    return 'Fichier exporté.';
    }


    function FicheDePaie() {
        $data= array(
        
       );
   
       $pdf = PDF::loadView('pdf.modele_fiche_de_paie', $data);
       $pathToFile = storage_path('app\FicheDePaie.pdf');
       $pdf->save($pathToFile);
       return 'Fichier exporté.';
    }

    function CahierDeCharge() {
        $data= array(
        
       );
   
        $pdf = PDF::loadView('pdf.modele_cahier_de_charge', $data);
    $pathToFile = storage_path('app\CahierDeCharge.pdf');
    $pdf->save($pathToFile);
    return 'Fichier exporté.';
    }

}
