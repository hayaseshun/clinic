<?php if (paginate_links()) : ?>
        <div class="pagination">
          <?php
          echo
          paginate_links(
            array(
              'end_size' => 1,
              'mid_size' => 1,
              'prev_next' => true,
              'prev_text' => '<i class="fas fa-angle-left">前へ</i>',
              'next_text' => '<i class="fas fa-angle-right">次へ</i>',
            )
          );
          ?>
        </div>
      <?php endif; ?>
