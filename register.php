<?php
require("header.php");

if(isset($_SESSION["pseudo"])){
    header("Location: index.php");
}
?>
<div class="container">
    <div class="row">
        <form action="functions/createUser.php" class="col-md-6 mt-5" method="post">
            <h1>Créer un compte</h1>
           
            <?php if(isset($_GET["errorMessage"])){ ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $_GET["errorMessage"] ?>
                    <button class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Votre password">
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password">
            </div>
            <div class="form-group">
                <p>Souhaites-tu être un Coco Helper ?</p>
                <input type="checkbox" name="role" id="role" class="form-check-input">
                <label class="form-check-label" for="role">Oui</label>
            </div>

            <a href="login.php">Déja un compte ?</a>

            <div class="form-group">
                <input type="submit" value="Créer mon compte" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


<?php
require("footer.php");
?>