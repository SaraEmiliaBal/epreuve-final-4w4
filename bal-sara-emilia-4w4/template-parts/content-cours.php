<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
	<p><?php echo $tPropriété['typeCours'];?></p>
	<p><a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle']; ?></a> </p>
	<p><?php echo $tPropriété['nbHeure']; ?></p>
	 <a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['titrePartiel']; ?></a> 
	<p><?php echo $tPropriété['session']; ?></p>
</article>
