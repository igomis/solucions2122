<div class="col mb-5">
    <div class="card h-100">
        <!-- Sale badge-->
        <?php if ($player->getGoals()) : ?>
            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?= $player->getDorsal() ?></div>
        <?php endif ?>
        <!-- Product image
        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />-->
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?= $player->getName() ?></h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <?php for($i=0;$i<$player->getYellowCards();$i++): ?>
                        <div class="bi-sd-card"></div>
                    <?php endfor ?>
                    <?php for($i=0;$i<$player->getRedCards();$i++): ?>
                        <div class="bi-sd-card-fill"></div>
                    <?php endfor ?>
                </div>
                <!-- Product price-->
                <?= 'Age : '.$player->age().'<br/>' ?>
                <?= 'Goals : '.$player->getGoals().'<br/>' ?>
                <?= 'Played :'.$player->getMatches().'('.$player->getMinutes().')'; ?>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#"><?= $player->getCountry()?></a></div>
        </div>
    </div>
</div>
