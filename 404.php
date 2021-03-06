<?php
get_header();
?>
<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>
<main>
	<article>
		<h1>お探しのページは見つかりませんでした。</h1>
		<p>
			申し訳ありません、お探しのページは見つかりませんでした。<br>
			サイト内検索をご利用いただくか、新着記事・ブログ記事一覧などからお探し下さい。
		</p>
	</article>
</main>
<?php
get_footer();
