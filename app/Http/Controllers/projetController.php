<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Citrix;
use App\Models\Citrix_information;
use App\Models\Equipement;
use App\Models\Serveur;
use App\Models\switche;
use App\Models\Sys_information;
use Illuminate\Http\Request;


class projetController extends Controller
{
    public function Déconnection()
    {
        return view('interface.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string|max:255',
            'password' => 'required|string|max:255'
        ]);
        $login = $request->login;
        $password = $request->password;
        $admin = Admin::where('login', $login)->first();

        // Vérification de l'utilisateur et de son mot de passe
        if ($admin && $admin->password === $password) {
            return view('interface.acceuil');
            $request->session()->regenerate();
        } else {
            return back()->withErrors([
                'login' => 'Les identifiants fournis sont incorrects.',
                'password' => 'Le mot de passe est incorrect.',
            ])->withInput($request->except('password'));
        }

        /*  $values=collect($request->all())->except('_token')->toArray();
        dd(auth::attempt($values)); */
    }
    public function citrix()
    {
        $citrix = Citrix::where('nom', 'Ancien citrix')->first();
        $citrixes = Citrix_information::where('id_citrix', $citrix->id)->get();
        return view('interface.citrix', compact('citrixes'));
    }
    public function citrix2()
    {
        $citrix = Citrix::where('nom', 'citrix BEC')->first();
        $citrixes = Citrix_information::where('id_citrix', $citrix->id)->get();
        return view('interface.citrixBEC', compact('citrixes'));
    }
    public function citrix3()
    {
        $citrix = Citrix::where('nom', 'citrix RSUS')->first();
        $citrixes = Citrix_information::where('id_citrix', $citrix->id)->get();
        return view('interface.citrixRSUS', compact('citrixes'));
    }
    public function ajoute2()
    {
        return view('crud.ajoute2');
    }
    public function ajouteAncien(Request $request)
    {

        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $citrix = Citrix_information::create($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrix');
    }
    public function ajoute3()
    {
        return view('crud.ajoute3');
    }
    public function ajouteBEC(Request $request)
    {

        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $citrix = Citrix_information::create($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrixBEC');
    }
    public function ajoute4()
    {
        return view('crud.ajoute4');
    }
    public function ajouteRSUS(Request $request)
    {

        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $citrix = Citrix_information::create($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrixRSUS');
    }
    public function ancienDelete(string $id)
    {
        $entree = Citrix_information::find($id);
        $entree->delete();
        return redirect()->route('citrix');
    }
    public function BECDelete(string $id)
    {
        $entree = Citrix_information::find($id);
        $entree->delete();
        return redirect()->route('citrixBEC');
    }
    public function RSUSDelete(string $id)
    {
        $entree = Citrix_information::find($id);
        $entree->delete();
        return redirect()->route('citrixRSUS');
    }
    public function modifie2(string $id)
    {
        $citrix = Citrix_information::find($id);
        return view('crud.modifie2', compact("citrix"));
    }
    public function ancienupdate(Request $request, string $id)
    {
        // Récupere les informations de formulaire
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $citrix = Citrix_information::find($id);
        $citrix->update($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrix');
    }
    public function modifie3(string $id)
    {
        $citrix = Citrix_information::find($id);
        return view('crud.modifie3', compact('citrix'));
    }
    public function BECupdate(Request $request, string $id)
    {
        // Récupere les informations de formulaire
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $citrix = Citrix_information::find($id);
        $citrix->update($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrixBEC');
    }
    public function modifie4(string $id)
    {
        $citrix = Citrix_information::find($id);
        return view('crud.modifie4', compact('citrix'));
    }
    public function RSUSupdate(Request $request, string $id)
    {
        // Récupere les informations de formulaire
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $citrix = Citrix_information::find($id);
        $citrix->update($dataWithoutToken);


        $citrix->save();

        return redirect()->route('citrixRSUS');
    }
    public function sys()
    {
        return view('interface.Systèmesinfo');
    }
    public function sysinfo(Request $request)
    {

        $choix = $request->input('choix');
        $envoye = $request->input('envoye');
        if (isset($choix)) {
            switch ($choix) {
                case 'SPS':
                    $equipe = Equipement::where('nom', 'SPS')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                case 'SSICTD':
                    $equipe = Equipement::where('nom', 'SSICTD')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                case 'DAI':
                    $equipe = Equipement::where('nom', 'DAI')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                case 'DAEC':
                    $equipe = Equipement::where('nom', 'DAEC')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                case 'DAS':
                    $equipe = Equipement::where('nom', 'DAS')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                case 'DCT':
                    $equipe = Equipement::where('nom', 'DCT')->where('Statut', 'info')->first();
                    $infos = Sys_information::where('id_equipement', $equipe->id)->get();
                    return view("interface.Systèmesinfo", compact("infos"));
                    break;
                default:
                    return redirect()->route('Systemesinfo');
            }
        } else {
            return redirect()->route('Systèmesinfo');
        }
    }
    public function deletesysinfo(string $id)
    {
        $entree = Sys_information::find($id);
        $entree->delete();
        return redirect()->route('Systemesinfo');
    }
    public function modifie6(string $id)
    {
        $info = Sys_information::find($id);
        return view('crud.modifie6', compact('info'));
    }
    public function infoUpdate(Request $request, string $id)
    {
        // Récupere les informations de formulaire
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $info = Sys_information::find($id);
        $info->update($dataWithoutToken);


        $info->save();

        return redirect()->route('Systemesinfo');
    }
    public function ajoute6()
    {
        return view('crud.ajoute6');
    }
    public function ajouteinfo(Request $request)
    {

        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $citrix = Sys_information::create($dataWithoutToken);


        $citrix->save();

        return redirect()->route('Systemesinfo');
    }
    public function serveurs()
    {
        return view('interface.serveurs');
    }
    public function serveursshow(Request $request)
    {
        $choix = $request->input('choix');
        $envoye = $request->input('envoye');
        if (isset($choix)) {
            switch ($choix) {
                case 'Serveur Active Directory1':
                    $equipe = Equipement::where('nom', 'Serveur Active Directory1')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur Active Directory2':
                    $equipe = Equipement::where('nom', 'Serveur Active Directory2')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur Messagerie Exchange':
                    $equipe = Equipement::where('nom', 'Serveur Messagerie Exchange')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur Administration Kaspersky':
                    $equipe = Equipement::where('nom', 'Serveur Administration Kaspersky')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur WSUS':
                    $equipe = Equipement::where('nom', 'Serveur WSUS')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur RSUS':
                    $equipe = Equipement::where('nom', 'Serveur RSUS')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                case 'Serveur Proxy':
                    $equipe = Equipement::where('nom', 'Serveur Proxy')->where('Statut', 'serveur')->first();
                    $serveurs = Serveur::where('id_equipement', $equipe->id)->get();
                    return view("interface.serveurs", compact("serveurs"));
                    break;
                default:
                    return redirect()->route('serveurs');
            }
        } else {
            return redirect()->route('serveurs');
        }
    }
    public function serveurdelete(string $id)
    {
        $entree = Serveur::find($id);
        $entree->delete();
        return view('interface.serveurs');
    }
    public function modifie5(string $id)
    {
        $serveur = Serveur::find($id);
        return view('crud.modifie5', compact('serveur'));
    }
    public function serveurupdate(string $id, Request $request)
    {
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $serveur = Serveur::find($id);
        $serveur->update($dataWithoutToken);


        $serveur->save();

        return redirect()->route('serveurs');
    }
    public function ajoute5()
    {
        return view('crud.ajoute5');
    }
    public function ajouteserveur(Request $request)
    {
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $serveur = Serveur::create($dataWithoutToken);


        $serveur->save();

        return redirect()->route('serveurs');
    }
    public function switch()
    {
        return view('interface.switch');
    }
    public function switchshow(Request $request)
    {
        $choix = $request->input('choix');
        $envoye = $request->input('envoye');
        if (isset($choix)) {
            switch ($choix) {
                case 'Fédérateur':
                    $equipe = Equipement::where('nom', 'Fédérateur')->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case 'Salle de saisie':
                    $equipe = Equipement::where('nom', 'Salle de saisie')->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case 'Passeport':
                    $equipe = Equipement::where('nom', 'Passeport')->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case 'DBM-Bureau chef de division':
                    $equipe = Equipement::where('nom', 'DBM-Bureau chef de division')->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case 'DBM-bureau CP':
                    $equipe = Equipement::where('nom', 'DBM-bureau CP')->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case "Bureau d'ordre 1":
                    $equipe = Equipement::where('nom', "Bureau d'ordre 1")->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case "Bureau d'ordre 2":
                    $equipe = Equipement::where('nom', "Bureau d'ordre 2")->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case "Promotion nationale":
                    $equipe = Equipement::where('nom', "Promotion nationale")->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case "DAEC":
                    $equipe = Equipement::where('nom', "DAEC")->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                case "INDH":
                    $equipe = Equipement::where('nom', "INDH")->where('Statut', 'switch')->first();
                    $switches = switche::where('id_equipement', $equipe->id)->get();
                    return view("interface.switch", compact("switches"));
                    break;
                default:
                    return redirect()->route('go');
            }
        } else {
            return redirect()->route('go');
        }
    }
    public function switchdelete(string $id)
    {
        $entree = switche::find($id);
        $entree->delete();
        return view('interface.switch');
    }
    public function modifie1(string $id)
    {
        $switch = switche::find($id) ;
        return view('crud.modifie1',compact('switch'));
    }
    public function switchupdate(string $id, Request $request)
    {
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();

        // find by id and update 
        $switch = switche::find($id);
        $switch->update($dataWithoutToken);


        $switch->save();

        return redirect()->route('go');
    }
    public function ajoute1()
    {
        return view('crud.ajoute1');
    }
    public function switchajoute(Request $request)
    {
        $dataWithoutToken = collect($request->all())->except('_token')->toArray();


        $switch = switche::create($dataWithoutToken);


        $switch->save();

        return redirect()->route('go');
    }
    //views:

    public function archi()
    {
        return view('interface.archi');
    }
    public function guide()
    {
        return view('interface.guide');
    }
}
