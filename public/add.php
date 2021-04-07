<?php 
require '../src/boostrap.php';
render('header', ['title'=> 'Ajouter un évènement']);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    $errors = [];
    $validator = new Calendar\EventValidator();
    $errors = $validator->validates($_POST);
    if(empty($errors)) {
        dd($errors);
    }
}
?>
<?php if (!empty($errors)): ?>
<div class="alert alert-danger">
Merci de corriger vos erreurs
</div>
<?php endif; ?>

<div class="container">
    <h1>Ajouter un évènement</h1>
    <form action="" method="post" class="form">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">Titre</label>
                    <input id="name" type="text" required class="form-control" name="name" value="<?= isset($data['name']) ? h($data['name']) : ''; ?>">
                    <?php if (isset($errors['name'])): ?>
                    <?= $errors['name']; ?>
                    <p class="help-block"><?= $errors['name']; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <div class="col-sm-6">
                <div class="form-group">
                    <label for="date">Date</label>
                    <input id="date" type="date" required class="form-control" name="date" value="<?= isset($data['date']) ? h($data['date']) : ''; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="start">Démarrage</label>
                    <input id="start" type="time" required class="form-control" name="start" placeholder="HH:MM"
                    value="<?= isset($data['start']) ? h($data['start']) : ''; ?>">
                </div>
            </div>
        <div class="col-sm-6">
                <div class="form-group">
                    <label for="end">Fin</label>
                    <input id="end" type="time" required class="form-control" name="end" placeholder="HH:MM"
                    value="<?= isset($data['end']) ? h($data['end']) : ''; ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"><?= isset($data['description']) ? h($data['description']) : ''; ?></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Ajouter l'évènement</button>
        </div>
    </form>
</div>
<?php render('footer'); ?>