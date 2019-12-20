<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>

</div>
<section class="landing">
	<span class="info-title">qzertyuio</span>
	<span class="title">zertyuiop</span>
	<span class="title light-green">azertyuio</span>
	<span class="boutton">S'inscrire aux rencontre</span>
</section>

<section class="section">
	<span class="section_title">la conférence</span>
	<p class="section_content">Victus universis caro ferina est lactisque abundans copia qua sustentantur, et herbae multiplices et siquae alites capi per aucupium possint, et plerosque mos vidimus frumenti usum et vini penitus ignorantes.</p>
</section>

<section class="transition">
	<span class="transition"> </span>
</section>

<?php get_footer(); ?>