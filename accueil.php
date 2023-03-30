    <!-- Debut section Task -->

    <section class="vh-100" style="background-color: #e2d5de;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">

            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">

                <h6 class="mb-3">Taches à réaliser </h6>

                <form action="edit.php?mod=add" method="post" class="d-flex justify-content-center align-items-center mb-4">
                  <div class="form-outline flex-fill">
                    <input type="text" name="tache" class="form-control form-control-lg" />
                    <label class="form-label" for="form3">Saisir une tache !</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg ms-2">Ajouter</button>
                </form>

                <?php
                // Récupérer les données dans la table Taches
                $result = $mysqli->query("SELECT * FROM taches LIMIT 10") ;
                ?>
                <ul class="list-group mb-0">
                  <?php

                  // Affichage des taches dans la liste avec une boucle while
                  
                  while($obj = $result->fetch_object()){
                  ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                    <div class="d-flex align-items-center">
                    <a href="edit.php?mod=upd&id=<?php echo $obj->id ; ?>" data-mdb-toggle="tooltip" title="Update item">
                      <i class="fas fa-pencil text-primary"></i>
                    </a>
                      <!--<input class="form-check-input me-2" type="checkbox" value="" aria-label="..." /> -->
                      <?php 
                      
                      //affiche les taches
                      echo $obj->tache ; ?>
                    </div>
                    <!-- Création du lien de suppression -->
                    <a href="edit.php?mod=del&id=<?php echo $obj->id ; ?>" data-mdb-toggle="tooltip" title="Remove item">
                      <i class="fas fa-times text-primary"></i>
                    </a>
                  </li>
                  <?php
                  }
                  ?>
                  <li class="list-group-item d-flex d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                    <div class="d-flex align-items-center">
                      <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                      <s>Dapibus ac facilisis in</s>
                    </div>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove item">
                      <i class="fas fa-times text-primary"></i>
                    </a>
                  </li>
                  </ul>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Fin section Task -->