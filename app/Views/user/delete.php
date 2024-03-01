<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<style>
    .container{
        margin-top: 50px;
    }

    .button{
        width: 300;
    }

</style>

<div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle border-danger">
        <div class="card-header bg-danger text-white">
            Warning
        </div>
        <div class="card-body">
            <h5 class="card-title text-danger">Delete this user?</h5>
            <form action="<?= base_url() ?>deleteUser/<?= $user->user_id ?>" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <?= csrf_field() ?>
                <button type="button" class="btn btn-primary">Cancel</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>