<?php 
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
?>

<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="form-inline d-flex justify-content-center form-sm">
  <input name="s" id="s" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="<?php esc_attr_e('Wpisz czego szukasz', 'neuro')?>"
    aria-label="<?php esc_attr_e('Wpisz czego szukasz', 'neuro')?>">
  <button aria-label="<?php esc_attr_e('Szukaj', 'neuro')?>" type="submit" class="btn-search btn-link"><i class="fas fa-search" aria-hidden="true"></i></button>
</form>


