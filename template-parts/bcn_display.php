<?php
    // 現在のページの親ページのidを遡って先祖まで取得
    // 親 → 先祖の順で並んでいるため 先祖 → 親の順に並べ替え
    $ancestors_ids = array_reverse(get_post_ancestors( $post ));
?>
<p class="page-top-bread">
  <?php bcn_display(); ?>
</p>