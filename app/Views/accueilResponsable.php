<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ouverture Compte Bancaire</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body>

    <header>
        <h1>BIENVENUE DANS LA BANQUE DU PEUPLE</h1>
    </header>
   <!--  {if isset($insertionOk) }
    <div class="alert alert-danger" style="width: 30%; margin: auto; text-align: center;">
        {$insertionOk}
    </div>
    {/if} -->
    <?php /* if($insertionOk): */ ?>
        <?php /* echo $insertionOk; */ ?>
    <?php /* endif; */?>

    <h2>VEILLEZ CHOISIR LE TYPE DE CLIENT A ENREGISTRER</h2>

    <div class="accueil_responsable">

        <a href="<?php echo base_url('public/Clientnonsalarie/listeClientNonSalarie') ?>">Compte Client non Salarié</a>

        <a href="<?php echo base_url('public/Clientsalarie/listeClientSalarie') ?>">Compte Client Salarié</a>

        <a href="<?php echo base_url('public/Clientmoral/listeClientMoral') ?>">Compte Client Moral</a>

    </div>

    <script type="text/javascript" src="<?php echo base_url('js/script.js'); ?>"></script>

</body>

</html>