<div class="col project-card" style="gap: 1rem;">
  <div class="row" style="gap: 16px">
    <h3><a href="<?php echo $project['URL'] ?>" target="_blank" title="Github"><?php echo $project['name'] ?></a></h3>
    <?php if(isset($project['github'])): ?>
      <a href="<?php echo $project['github'] ?>" target="_blank" style="border:none; display: flex; align-items: center;">
        <i class="fa-brands fa-github"></i>
      </a>
    <?php endif ?>
  </div>

  <p><i><?php echo $project['description'] ?></i></p>
  <div class="row" style="gap: 1rem; font-size: x-large;">
    <?php foreach ($project['stack'] as $tech): ?>
      <i title="<?php if (isset($tech['name'])) echo $tech['name'] ?>" class="<?php if (isset($tech['icon'])) echo $tech['icon'] ?>">
        <?php if (isset($tech['text'])) echo $tech['text'] ?>
      </i>
    <?php endforeach ?>
  </div>
</div>