<?php
/**
 * Le modèle pour afficher le pied de page.
 *
 * @package OceanWP WordPress theme
 */
?>

	</main><!-- #main -->

	<?php 
	// Hook d'action déclenché après le contenu principal
	do_action( 'ocean_after_main' ); 
	?>

	<?php 
	// Hook d'action déclenché avant le pied de page
	do_action( 'ocean_before_footer' ); 
	?>

	<?php
	// Vérifie si l'emplacement du pied de page Elementor n'est pas défini ou s'il n'est pas utilisé
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		?>

		<?php 
		// Hook d'action pour le contenu du pied de page
		do_action( 'ocean_footer' ); 
		?>

	<?php 
	// Fin de la condition pour l'emplacement du pied de page Elementor
	} 
	?>

	<?php 
	// Hook d'action déclenché après le pied de page
	do_action( 'ocean_after_footer' ); 
	?>

</div><!-- #wrap -->

<?php 
// Hook d'action déclenché après le conteneur wrap
do_action( 'ocean_after_wrap' ); 
?>

</div><!-- #outer-wrap -->

<?php 
// Hook d'action déclenché après le conteneur outer-wrap
do_action( 'ocean_after_outer_wrap' ); 
?>

<?php
// Vérifie si la classe du pied de page fixe n'existe pas
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	// Inclut la partie de modèle pour le bouton de défilement vers le haut si le pied de page fixe n'est pas activé
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Vérifie si le style de recherche de menu est défini sur 'overlay'
if ( 'overlay' === oceanwp_menu_search_style() ) {
	// Inclut la partie de modèle pour la recherche en superposition
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// Vérifie si le style du menu mobile est défini sur 'sidebar'
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Vérifie si le bouton de fermeture du menu mobile est activé
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		// Inclut la partie de modèle pour le bouton de fermeture du menu mobile
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Inclut la partie de modèle pour la navigation mobile (si définie)
	get_template_part( 'partials/mobile/mobile-nav' );
	?>

	<?php
	// Vérifie si la recherche dans le menu mobile est activée
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		// Démarre la mise en mémoire tampon de sortie
		ob_start();
		// Inclut la partie de modèle pour la recherche mobile
		get_template_part( 'partials/mobile/mobile-search' );
		// Affiche le contenu mis en mémoire tampon et nettoie la mémoire tampon
		echo ob_get_clean();
	}
}
?>

<?php
// Vérifie si le style du menu mobile est défini sur 'fullscreen'
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	// Inclut la partie de modèle pour le menu mobile en plein écran
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>

<?php 
// Hook WordPress pour inclure les scripts nécessaires et les balises de fermeture
wp_footer(); 
?>
</body>
</html>
