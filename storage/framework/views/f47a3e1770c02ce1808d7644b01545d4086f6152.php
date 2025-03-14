<?php if($ratings): ?>
  <?php for($i = 0; $i < 5; $i++): ?>
    <a href="javascript:void(0)">
      <?php if($ratings - $i >= 1): ?>
        <i class="fas fa-star"></i>
      <?php elseif( ($ratings - $i) < 1 && ($ratings - $i)> 0 ): ?>
          <i class="fas fa-star-half-alt"></i>
        <?php else: ?>
          <i class="far fa-star"></i>
      <?php endif; ?>
    </a>
  <?php endfor; ?>
<?php endif; ?>
<?php /**PATH /home/bitsclansolution/summerstreet/public/themes/default/views/partials/_vertical_ratings.blade.php ENDPATH**/ ?>