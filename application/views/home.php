<div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-10">
      <div class="homeContent text-center">
        <h1><?= $home['title']; ?></h1>   
        <p><?= $home['about_me'];?></p>    
        <div class="socialLink">
          <ul>
            <?php foreach ($social_sites as $site): ?>
              <?php if (!empty($home[$site['name']])): ?>
                <li><a href="<?php echo base_url($home[$site['name']]); ?>" title="<?= $home[$site['name']];?>"><?= $site['icon']?></a></li>
              <?php endif ?>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> 
