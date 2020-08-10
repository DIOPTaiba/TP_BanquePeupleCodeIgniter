<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Banque du Peuple</title>
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  
</head>
<body>
    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>

    <div class="choix_client">

        <p>Cliquez sur Nouveau client pour enregistrer un compte pour un nouveau client</p>
        <p>Cliquez sur Client existant pour enregistrer un compte pour un client qui existe déjà</p>
        <div id="select_client">
            <button id="nouveau_client" name="nouveau_client" onclick="affiche_nouveau_client()">Nouveau Client</button>
            <button id="client_existant" name="client_existant" onclick="affiche_client_existant()">Client Existant</button>
        </div>
        <form id="saisie_id_client" action="{$url_base}RechercheClientNonSalarie/rechercheClient" method="POST">
            <input type="search" id="identifiant_client" name="identifiant_client" placeholder="identifiant client" />
            <input type="submit" name="search" id="search" value="Search" />
        </form>
    </div>
 <!-- <div class="container">
    <br>
    <? /* = \Config\Services::validation()->listErrors(); */ ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-4"> -->
        <form action="<?php echo base_url('public/Clientmoral/addclientmoral');?>" id="form_compte_non_salarie" method="post" accept-charset="utf-8">
          
        <h2>VEILLEZ SAISIR LES INFORMATIONS DU CLIENT</h2>
        <p><i>Complétez le formulaire. Les champs marqué par <em>*</em> sont <em>obligatoires</em></i></p>

        <fieldset>
            <legend>Informations du Client</legend>
            <div>
                <label for="nom_entreprise">Nom Entreprise <em>*</em></label>
                <input type="text" id="nom_entreprise" name="nom_entreprise" placeholder="saisir le nom de l'entreprise" onblur="verifie_nom_entreprise(this)" />
            </div>
            <div>
                <label for="raison_social">Raison Social <em>*</em></label>
                <input type="text" id="raison_social" name="raison_social" placeholder="saisir le nom de l'entreprise" onblur="verifie_nom_entreprise(this)" />
            </div>
            <div>
                <label for="adresse">Adresse Entreprise <em>*</em></label>
                <input type="text" id="adresse" name="adresse" placeholder="saisir l'adresse de l'entreprise" onblur="verifie_adresse_entreprise(this)" />
            </div>
            <div>
                <label for="telephone">Tel <em>*</em></label>
                <input type="tel" id="telephone" name="telephone" placeholder="ex : +2217xxxxxxxx " onblur="verifie_telephone(this)" />
            </div>
            <div>
                <label for="email">E-mail </label>
                <input type="text" id="email" name="email" placeholder="ex : prenom.nom@simplon.co" onblur="verifie_email(this)" />
            </div>
            <div>
                <label for="identifiant_entreprise">Identifiant Entreprise <em>*</em></label>
                <input type="text" id="identifiant_entreprise" name="identifiant_entreprise" placeholder="saisir l'identifiant de l'entreprise" onblur="verifie_identifiant_entreprise(this)" />
            </div>
            
        </fieldset>

        <fieldset>
            <legend>Informations Compte</legend>
            <label class="selection_type_compte">Sélectionnez le type de compte <em>*</em></label>
            <select id="type_compte" name="type_compte">
				<option>Type de compte</option>
				<option value="compte epargne">Compte Epargne</option>
				<option value="compte courant">Compte Courant</option>
				<option id="compte_bloque" value="compte bloque" onselect="verification_duree_blocage(this)">Compte Bloqué</option>
				</select>
            <span id="erreur_selection"></span>
            <br/><br/>

            <div>
                <label for="numero_agence">N° de l'agence <em>*</em></label>
                <input type="text" id="numero_agence" name="numero_agence" placeholder="saisir le N° de l'agence" />
            </div>
            <div>
                <label for="numero_compte">N° Compte <em>*</em></label>
                <input type="text" id="numero_compte" name="numero_compte" placeholder="saisir le N° de Compte" />
            </div>
            <div>
                <label for="cle_rib">Clé RIB <em>*</em></label>
                <input type="text" id="cle_rib" name="cle_rib" placeholder="saisir la clé RIB" />
            </div>
            <div>
                <label for="solde">Solde (optionnel)<em></em></label>
                <input type="text" id="solde" name="solde" />
            </div>
            <div id="frais_ouverture_compte">
                <label for="frais_ouverture">Frais ouverture <em>*</em></label>
                <input type="text" id="frais_ouverture" name="frais_ouverture" value="20000" />
            </div>
            <div id="montant_remuneration_compte">
                <label for="montant_remuneration">Montant Rémuneration <em></em></label>
                <input type="text" id="montant_remuneration" name="montant_remuneration" />
            </div>
            <div id="agios_compte">
                <label for="agios">Agios <em>*</em></label>
                <input type="text" id="agios" name="agios" placeholder="saisir l'agios" />
            </div>
            <div id="duree_blocage_compte">
                <label for="duree_blocage">Durée Blocage <em>*</em></label>
                <input type="text" name="duree_blocage" id="duree_blocage" /><span id="mois"> mois </span><span id="erreur_duree"></span>
            </div>
        </fieldset>

        <div class="validation">
            <input type="submit" value="Valider" id="valider" />
            <input type="reset" value="Annuler" />
        </div>
          
        </form>
      <!-- </div>
 
    </div> -->
  
</div>
<script type="text/javascript" src="<?php echo base_url('js/script.js'); ?>"></script>

 <!-- <script>
   if ($("#addclientmoral").length > 0) {
      $("#addclientmoral").validate({
      
    rules: {
      name: {
        required: true,
      },
  
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    },
    messages: {
        
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
    },
  })
}
</script> -->
</body>
</html>