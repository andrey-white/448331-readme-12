<div class="post__main">
  <div class="post-link__wrapper">
    <a class="post-link__external" href="http://<?= $post_array['link'] ?>" title="Перейти по ссылке">
      <div class="post-link__icon-wrapper">
        <img src="img/logo-vita.jpg" alt="Иконка">
      </div>
      <div class="post-link__info">
        <h3><?= $post_array['header'] ?></h3>
        <p><?= $post_array['content'] ?></p>
        <span><?= $post_array['link'] ?></span>
      </div>
      <svg class="post-link__arrow" width="11" height="16">
        <use xlink:href="#icon-arrow-right-ad"></use>
      </svg>
    </a>
  </div>
</div>