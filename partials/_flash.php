<?php  if(isset($_SESSION['notification']['message'])): ?>
    <div class="container">
        <div class="alert alert-<?= $_SESSION['notification']['type'] ?>">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" aria-label="Close">
                 &times;
             </button>
             <h4><?= $_SESSION['notification']['message'] ?></h4>
        </div>
    </div>
    <?php  $_SESSION['notification']= []; ?>

<?php endif; ?>

