<footer id="footer">
  <!-- <h5>© <?php echo date("Y"); ?> My Blog</h5> -->
</footer>

<section class="modal" style="display: none" data-modal="modal-1">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'Wedding-day-Dress-code.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-2">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'gifts-megumi-eduardo.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-3">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'Welcome-Party-Dress -code.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>
  <section class="modal" style="display: none" data-modal="modal-4">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <img
          src="<?php echo IMG_BASE . 'Goood-bye-Party-Dress-code.webp' ?>"
          alt=""
          id=""
        />
      </div>
    </div>
  </section>

  </body>
</html>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>