<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Liste Client Moral</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('public/index.php/Clientmoral/afficheformulaireclientmoral') ?>" class="btn btn-success mb-2">Ajouter Client Moral</a>
    <a href="<?php echo base_url('public/index.php/AuthentificationEmployes/accueilResponsable') ?>" class="btn btn-success mb-2">Ajouter un autre type de Client</a>
    <br /><br />
    <h2>Liste Clients Moraux </h2>
  <div class="row mt-3">
     <table class="table table-bordered" id="listeClientMoral">
       <thead>
          <tr>
          <th>Id</th>
             <th>Nom Entreprise</th>
             <th>Identifiant Entreprise</th>
             <th>Raison Social</th>
             <th>Id Client</th>
             <!-- <th>Action</th> -->
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $client): ?>
          <tr>
               <td><?php echo $client['id']; ?></td>
               <td><?php echo $client['nom_entreprise']; ?></td>
               <td><?php echo $client['identifiant_entreprise']; ?></td>
               <td><?php echo $client['raison_social']; ?></td>
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
      $('#listeClientMoral').DataTable();
  } );
</script>
</body>
</html>