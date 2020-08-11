<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Liste Clients Salarié</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('public/index.php/Clientsalarie/afficheformulaireclientsalarie') ?>" class="btn btn-success mb-2">Ajouter Client salarié</a>
    <a href="<?php echo base_url('public/index.php/AuthentificationEmployes/accueilResponsable') ?>" class="btn btn-success mb-2">Ajouter un autre type de Client</a>
    <br /><br />
    <h2>Liste Clients Salariés </h2>
    
  <div class="row mt-3">
     <table class="table table-bordered" id="listeClientSalarie">
       <thead>
          <tr>
              <th>Id</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>N° Carte d'identité</th>
              <th>profession</th>
              <th>salaire</th>
              <th>Nom Employeur</th>
              <th>Adresse Entreprise</th>
              <th>Raison Social</th>
              <th>Identifiant Entreprise</th>
              <th>Id client</th>
              <!-- <th>Action</th> -->
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $client): ?>
          <tr>
               <td><?php echo $client['id']; ?></td>
               <td><?php echo $client['nom']; ?></td>
               <td><?php echo $client['prenom']; ?></td>
               <td><?php echo $client['carte_identite']; ?></td>
               <td><?php echo $client['profession']; ?></td>
               <td><?php echo $client['salaire']; ?></td>
               <td><?php echo $client['nom_employeur']; ?></td>
               <td><?php echo $client['adresse_entreprise']; ?></td>
               <td><?php echo $client['raison_social']; ?></td>
               <td><?php echo $client['identifiant_entreprise']; ?></td>
               <td><?php echo $client['id_clients']; ?></td>
             <!-- <td>
              <a href="#<?php /* echo base_url('public/users/edit/'.$client['id']); */?>" class="btn btn-success">Edit</a>
              <a href="#<?php /* echo base_url('public/index.php/users/delete/'.$client['id']); */?>" class="btn btn-danger">Delete</a>
              </td> -->
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>
    $(document).ready( function () {
      $('#listeClientSalarie').DataTable();
  } );
</script>
</body>
</html>