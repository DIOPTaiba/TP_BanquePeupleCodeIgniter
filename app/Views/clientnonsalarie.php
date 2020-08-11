<!doctype html>
<html lang="fr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Banque </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('public/index.php/Clientnonsalarie/afficheformulaireclientnonsalarie') ?>" class="btn btn-success mb-2">Ajouter Client non salarié</a>
    <a href="<?php echo base_url('public/index.php/AuthentificationEmployes/accueilResponsable') ?>" class="btn btn-success mb-2">Ajouter un autre type de Client</a>
    <br /><br />
    <h2>Liste Clients Non Salariés </h2>
    <?php
     /* if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      } */
     ?>
  <div class="row mt-3 ">
     <table class="table table-bordered " id="listeClientNonSalarie">
       <thead>
          <tr>
          <th>Id</th>
             <th>Nom</th>
             <th>Prénom</th>
             <th>N° Carte d'identité</th>
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
      $('#listeClientNonSalarie').DataTable();
  } );
</script>
</body>
</html>