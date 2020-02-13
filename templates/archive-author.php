<?php
/* 
 *Template for profile list
 */
get_header(); ?>
<div class="content-sidebar-wrap">
	<main class="container-fluid doctor-list" id="genesis-content">
		<h1 class="sr-only">1-2-3-Go Profiles</h1>
		<div class="row">
			<div class="col-12 col-sm filter-col collapse">
				<h2>Filters</h2>
				<button type="button" class="close" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<fieldset>
					<legend class="sr-only">Filter by...</legend>
					<?php // echo do_shortcode( '[wpdreams_ajaxsearchpro id=1]' ); ?>
                    <?php echo do_shortcode( '		
                        <div class="fwp-filter">[facetwp facet="search"]</div>
                        <div class="fwp-filter">[facetwp facet="profile_keywords"]</div>
                        <div class="fwp-filter">[facetwp facet="profile_locations"]</div>
                        ' );
                        // <div class="fwp-filter">[facetwp facet="conditions"]</div>
                        // <div class="fwp-filter">[facetwp facet="treatments_procedures"]</div>
                        // <div class="fwp-filter">[facetwp facet="patient_types"]</div>
                        // <div class="fwp-filter">[facetwp facet="physician_gender"]</div>
                        // <div class="fwp-filter">[facetwp facet="physician_language"]</div>
                        // <div class="fwp-filter">[facetwp facet="locations"]</div>
                        // <button id="filter-apply" onclick="FWP.refresh();">Apply</button> <button onclick="FWP.reset()">Reset</button>
                    // ' );
                    ?>
                    <button onclick="FWP.reset()">Reset</button>
				</fieldset>
			</div>
            <div class="col-12 col-sm list-col">
                <h2 class="sr-only">List of Profiles</h2>
                <div class="row list-col-header">
                    <div class="col filter-toggle-container">
						<!-- When button is active, add "active" class. -->
						<button title="Toggle Filter Tray" class="filter-toggle"><span class="sr-only">Toggle Filter Tray</span><span class="fas fa-filter"></span></button>
                    </div>
                </div>
                <div class="card-list-container">
                    <div class="card-list card-list-doctors">
                        <?php echo facetwp_display( 'template', 'profiles' ); ?>
                    </div>
                </div>
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