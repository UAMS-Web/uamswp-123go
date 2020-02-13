<?php
/* 
 *Template for project list
 */
get_header(); ?>
<div class="content-sidebar-wrap">
	<main class="container-fluid doctor-list" id="genesis-content">
		<h1 class="sr-only">1-2-3-Go Projects</h1>
		<div class="row">
			<div class="col-12 col-sm filter-col collapse">
				<h2>Filters</h2>
				<button type="button" class="close" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<fieldset>
					<legend class="sr-only">Filter by...</legend>
					<!-- <h3>Search Projects</h3> -->
					<?php // echo do_shortcode( '[wpdreams_ajaxsearchpro id=1]' ); ?>
                    <?php echo do_shortcode( ' <div class="fwp-filter">[facetwp facet="search"]</div>	
                        <div class="fwp-filter">[facetwp facet="project_primary_category"]</div>
                        <div class="fwp-filter">[facetwp facet="project_size"]</div>
                        <div class="fwp-filter">[facetwp facet="project_keywords"]</div>
                    ' );
                    ?>
                    <button onclick="FWP.reset()">Reset</button>
				</fieldset>
			</div>
            <div class="col-12 col-sm list-col">
				<h2 class="sr-only">List of Projects</h2>
                <?php echo facetwp_display( 'template', 'projects' ); ?>
                <div class="row list-pagination">
					<div class="col">
						<?php echo do_shortcode('[facetwp load_more="true" label="Load more"]'); ?>
					</div>
				</div>
            </div>
		</div>
	</main>
</div>
<?php get_footer();