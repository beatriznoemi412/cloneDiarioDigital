<?php
require_once "db_fake.php";

function showAbout($dev = null){
    $developers = getDevelopers();
    $selectedDev = getDevelopedById($dev);

    require_once "templates/header.php";
    ?>

    <main class="container mt-5">
        <div class="row">
            <div class="col-md-4">
            
                <ul class="list-group" id="developer-list">
                    <?php foreach ($developers as $id => $developer) { ?>
                        <li>
                            <a class="list-group-item list-group-item-action" href="about/<?php echo $developer->id ?>">
                                <?php echo $developer->nombre ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>

        <div class="col-md-8">
          <?php if(isset($selectedDev)){ ?>
            <div class="card " style="width: 18rem;">
                <img class="card-img-top" src="<?php echo $selectedDev->imagen ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><?php echo $selectedDev->nombre ?></p>
                    <p class="card-text"><?php echo $selectedDev->apellido ?></p>
                    <p class="card-text"><?php echo $selectedDev->rol ?></p>
                    <p><?php echo $selectedDev->email ?></p>
                </div>
            </div>
          
          <?php } ?>
        </div>
        
        </div>
        </div>
    </main>

    <?php require_once "templates/footer.php"; 
}
