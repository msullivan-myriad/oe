<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec turpis at dui scelerisque blandit. Donec congue porta augue ac interdum. Nulla ligula eros, blandit sed iaculis vitae, mattis vel diam. Cras risus turpis, imperdiet id mauris mattis, vulputate fringilla ligula. Cras turpis felis, suscipit vel libero eget, sodales sagittis purus. Donec sed ornare mauris, vitae tempor tortor. Morbi posuere diam leo, in hendrerit augue consectetur ac. Nulla consequat erat eu vehicula egestas. Quisque maximus, quam suscipit vulputate efficitur, massa ex interdum sapien, at consequat justo quam vitae nisi. Praesent tempor ullamcorper tortor, nec aliquam lectus maximus id. Vestibulum ac leo sed felis vehicula tempor. Mauris vitae pretium lacus. Nulla bibendum orci a elementum lobortis.

            In facilisis gravida leo, congue ornare ante fringilla vel. In fringilla odio id fermentum aliquam. Duis bibendum quam vel congue rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at massa tincidunt, mattis tellus sit amet, mattis risus. Mauris condimentum, turpis et porttitor facilisis, tellus risus laoreet orci, et scelerisque velit sem et risus. Praesent blandit accumsan purus quis semper. Vestibulum accumsan ultrices justo eu sollicitudin. Praesent congue tempus orci non commodo. Praesent rhoncus dui sit amet metus tempus, sed sagittis tellus ornare. Vestibulum sit amet accumsan odio. Duis tincidunt dictum massa, at convallis massa aliquam vitae. Proin feugiat ligula vitae ligula tempus, eu blandit massa maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer posuere imperdiet urna, nec ullamcorper turpis congue eget. Sed et ultrices tellus.

            Integer sit amet turpis aliquet, vulputate augue ut, iaculis erat. Aliquam lobortis et velit eu fermentum. Vestibulum a viverra enim. Cras tempus justo vitae felis tempus dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc malesuada ornare magna, ac laoreet ipsum. Nam vitae varius nisl. Morbi ac porttitor eros. Donec molestie risus sit amet felis aliquet, et pretium nunc interdum. Nullam interdum, risus sit amet pulvinar rutrum, nulla sapien tempus magna, id tincidunt enim nunc ac nunc. Donec luctus erat quis felis laoreet, sit amet aliquam purus pellentesque. Sed vulputate felis neque, eu eleifend odio iaculis vehicula. Curabitur vitae interdum mauris. Curabitur ac lectus ut risus congue ullamcorper. Aenean neque tortor, gravida non velit eu, consequat sollicitudin lacus.

            Praesent accumsan augue et neque gravida, vitae consequat dolor tristique. Praesent lobortis placerat libero, a vestibulum felis varius id. Nullam ut feugiat mi. Pellentesque ultricies lectus a turpis mollis, in semper odio malesuada. Vestibulum ut est ut ex eleifend lacinia. Pellentesque eu interdum ipsum. Vivamus posuere, quam at accumsan dictum, dui purus porta lacus, sed gravida purus nulla vel est.

            Duis vitae arcu eget neque placerat molestie et at nibh. Pellentesque volutpat non justo sed finibus. In finibus varius ex viverra varius. Aenean scelerisque luctus ipsum, id vehicula enim suscipit id. Quisque tincidunt arcu id mi ultrices faucibus. Ut sed lectus nulla. Sed molestie, turpis at suscipit placerat, libero nibh venenatis nulla, pharetra consequat tortor mauris non ipsum.

            Morbi at tincidunt quam. Duis placerat interdum ultrices. Donec posuere quis est id finibus. Mauris in risus sapien. Donec ultrices urna ipsum, id semper purus pulvinar eu. Cras ut diam in velit convallis cursus. Etiam suscipit efficitur lorem, id sodales leo congue rhoncus.

            Donec tristique sapien eu finibus posuere. Sed scelerisque placerat consectetur. Aliquam erat volutpat. Sed nec diam feugiat, luctus ex molestie, commodo tortor. Aenean facilisis enim eu odio luctus feugiat. Sed mauris odio, accumsan quis ipsum fringilla, vehicula vulputate orci. Duis diam dui, luctus et eros sit amet, elementum semper eros. Fusce venenatis convallis ipsum. Praesent viverra massa sed euismod tristique.

            Etiam a odio laoreet, egestas risus ac, volutpat leo. Nullam et quam eget augue eleifend mollis vel a erat. Integer quis mollis tellus. Donec pulvinar libero augue, sed finibus quam tempus et. Vestibulum ut nibh nunc. Integer vulputate maximus augue sed aliquam. Mauris iaculis congue eleifend. Sed et auctor nunc, at dictum libero. Nulla gravida nibh nec tellus tristique rhoncus. Proin semper, nisi a efficitur fermentum, justo mi iaculis leo, eget facilisis neque velit a odio. Duis aliquet aliquet sagittis. Donec consectetur quis velit condimentum rutrum.

            Quisque dictum ullamcorper risus, et porttitor mauris accumsan quis. Integer vel dolor nec turpis tempus dapibus sit amet in ipsum. Fusce bibendum tincidunt turpis in scelerisque. Duis sit amet egestas nulla. Praesent at fermentum arcu. Nulla nec lectus consequat, blandit quam vitae, fringilla sapien. Ut tincidunt, elit vitae ultrices vulputate, tortor massa dignissim urna, nec aliquet nibh nisl in risus. Praesent vel rutrum nisi. Sed at feugiat dui. Nulla consequat convallis eros non feugiat. Morbi eget fermentum dui.

            Nulla volutpat arcu arcu. Morbi a hendrerit purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed sit amet quam bibendum nisi hendrerit faucibus ut at neque. Vivamus sit amet malesuada leo. Nulla sollicitudin varius purus vitae fringilla. Integer eget justo quis neque tincidunt porta. Phasellus porttitor condimentum pellentesque.

            Vestibulum ut pharetra felis, id posuere dolor. Duis pellentesque turpis risus, sollicitudin maximus libero vehicula id. Nam mollis aliquam urna quis fermentum. In hac habitasse platea dictumst. In nec metus sit amet quam consequat porttitor id ac justo. Etiam id pulvinar massa. Nunc vel tortor ac libero auctor ultricies.

            Vestibulum lobortis libero ut ipsum imperdiet auctor. Sed rhoncus, ipsum quis efficitur accumsan, tortor tortor aliquam quam, non consequat mi justo sed arcu. Fusce id nunc odio. Sed sagittis elementum sem at pharetra. Proin placerat, ex vitae fringilla semper, mi mauris posuere felis, vestibulum efficitur ante elit eu purus. Vivamus sed nisi felis. Nullam quis sodales quam, a dictum turpis. In dui lacus, malesuada eget tellus id, aliquam faucibus tellus. Curabitur rutrum porta augue, ut scelerisque lectus pharetra nec. Suspendisse mi velit, sagittis in arcu vel, luctus eleifend risus.

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula iaculis diam eget mollis. Curabitur nec ultricies ex. Donec vestibulum, lectus ornare pellentesque facilisis, lectus libero semper lorem, eu rhoncus purus tortor non arcu. Phasellus ut faucibus orci. Vestibulum id lacinia augue. Suspendisse ut dui facilisis, tempor orci id, finibus ligula. Nulla dignissim nisi malesuada neque congue commodo. Suspendisse vestibulum tincidunt efficitur. Aenean pretium fermentum nisi, et convallis neque convallis id.

            Proin nec sodales massa. Cras condimentum metus ac risus dictum finibus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam lobortis accumsan felis, in vestibulum velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam et efficitur orci, sed luctus urna. Cras dignissim sollicitudin lacinia. Nunc eget nibh a risus semper sollicitudin ut ac mi. Morbi ornare elementum ante, ac euismod leo tristique in. In id lacus fringilla, volutpat magna eu, sagittis magna. Vestibulum at urna vel dolor ultrices vehicula ac sit amet magna. Fusce volutpat posuere rhoncus. Vestibulum molestie justo et eros dignissim congue. Vivamus nibh lacus, molestie sed sodales eu, placerat vitae sem. Phasellus id lobortis tortor, eget vulputate felis. Suspendisse leo nulla, tempor viverra lorem eget, consequat aliquet mauris.

            Suspendisse ornare mauris at sapien fermentum dictum. Mauris sed neque luctus nunc dictum rutrum sit amet nec sem. Mauris ut nisl nec massa dignissim elementum. Sed finibus ac leo condimentum consequat. Praesent laoreet enim nisl, id porta erat ultricies nec. Mauris vestibulum lectus id justo consequat, eu tristique libero feugiat. Vivamus imperdiet viverra feugiat. Integer sed erat at enim gravida vehicula. Aenean et justo vitae nunc varius pharetra in a mi. Maecenas in mauris eget eros faucibus fringilla id ac augue. Suspendisse fringilla, ex at scelerisque hendrerit, lacus metus commodo magna, a posuere tortor mi quis enim. Vestibulum varius vehicula mi, ac dignissim felis molestie quis. Sed vitae pulvinar erat. Phasellus ultricies velit ipsum, sit amet sollicitudin urna vehicula eu. Praesent consectetur at nibh eu volutpat.

            Donec posuere, sem at sodales malesuada, ligula eros pretium tortor, in sollicitudin sapien nibh vel felis. Phasellus tempor erat eu nisi tempor, eu tempus quam efficitur. Curabitur sollicitudin consequat dictum. Integer ullamcorper velit nec ligula luctus, vitae bibendum ante commodo. Curabitur pellentesque ligula a erat feugiat, at rutrum purus lacinia. Mauris vehicula vestibulum libero, nec malesuada augue vulputate in. Integer vel nisi ut quam faucibus ullamcorper. Nulla id nisl euismod, tempus turpis vel, imperdiet elit.

            Suspendisse lectus lorem, laoreet non dignissim eget, congue sit amet lacus. Curabitur lacinia a lorem in placerat. Aliquam nec consequat dolor. Duis justo mauris, vehicula ut lobortis ac, lacinia sed risus. Aliquam eleifend, lacus laoreet elementum tincidunt, justo massa lacinia erat, quis ornare enim purus sed mi. Proin fringilla lorem at lacus pulvinar accumsan. Ut tincidunt porttitor accumsan. Sed nulla neque, commodo ut semper nec, lobortis quis quam. Morbi ultrices nisi sed congue eleifend. Duis hendrerit mattis nisl eget tristique. Proin libero nisl, venenatis sit amet mattis sed, luctus vel mi. Vivamus molestie auctor augue, in pellentesque dolor convallis sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ut orci risus. Maecenas a velit nunc.

            Vestibulum nec finibus augue. Nulla cursus, lectus vitae maximus viverra, ex quam tincidunt quam, et tincidunt felis ipsum ut libero. Maecenas rhoncus tempus molestie. Sed pretium egestas augue, a finibus mi mattis ac. Sed vestibulum, sapien sed consectetur molestie, urna augue consectetur nunc, vitae imperdiet purus risus nec arcu. Proin justo urna, lobortis iaculis volutpat sed, pulvinar id nulla. Praesent tincidunt hendrerit cursus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vitae nisl molestie, maximus elit at, eleifend mauris. Vivamus tempus ex non pharetra varius. Maecenas congue elit et blandit egestas. Maecenas lobortis ultrices massa at hendrerit. Suspendisse ac quam ut dui sodales tempus. Duis malesuada turpis velit, sit amet vulputate elit sollicitudin vel. Phasellus neque orci, suscipit id sapien vitae, blandit auctor nibh. Nulla at pharetra orci.

            Quisque sed ante non elit sodales aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus eget lorem ut lorem ornare hendrerit ut ut dui. Ut sagittis sed odio et pellentesque. Phasellus nec mauris sed nisi fermentum dapibus. Integer vel feugiat libero. Phasellus mauris orci, venenatis eu tincidunt quis, consequat sit amet tortor. Morbi tortor odio, mattis ac efficitur eu, viverra a nunc. Nullam dapibus, mauris non convallis ornare, eros urna pellentesque nibh, in tristique dolor mauris vel odio. Pellentesque quis consequat nisi. Etiam facilisis tincidunt urna, a posuere felis.

            Integer facilisis sapien in diam bibendum, porta faucibus purus fringilla. Fusce tortor augue, tempor vitae nisi non, scelerisque viverra orci. Vestibulum feugiat tempus diam in sollicitudin. Curabitur interdum gravida nibh et aliquam. Cras euismod, lacus sollicitudin placerat aliquet, velit libero malesuada lacus, eget ultrices leo magna rhoncus velit. Nam sit amet lectus ex. Sed dictum quam nisl, id malesuada magna feugiat et.

            Morbi quis lorem eget neque faucibus porta vehicula a tellus. Cras efficitur arcu tortor, vitae convallis erat facilisis eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi euismod neque quis urna blandit congue. Nullam gravida sem mi, ac luctus nisl placerat non. Vestibulum sed sem consectetur, tincidunt erat in, consectetur massa. Maecenas tincidunt tempor mi nec euismod. Nam maximus, odio ac pharetra eleifend, lectus lorem condimentum felis, sed hendrerit mauris metus quis nibh. Nunc lobortis nisi non odio pulvinar, eget feugiat massa pulvinar. Donec commodo nisl non ipsum cursus, ut imperdiet elit ultrices. Vivamus vel rhoncus eros. Ut a elit aliquet, facilisis ipsum suscipit, eleifend erat. Etiam sit amet ipsum laoreet, porta mauris in, commodo metus.

            Phasellus auctor lacus sit amet maximus placerat. In rutrum turpis vitae diam lacinia, a consequat augue consectetur. Duis nec varius leo. Quisque id venenatis quam. Maecenas est orci, placerat in turpis in, lobortis consectetur augue. Proin id aliquet dui. Praesent consectetur lectus at nisi scelerisque congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse quis dolor ac turpis consequat varius.

            Phasellus hendrerit vulputate porttitor. Suspendisse potenti. In vehicula efficitur semper. Phasellus tincidunt non nulla et sodales. Aliquam erat volutpat. Donec metus ligula, venenatis non ipsum eu, elementum ultricies leo. Nunc in metus ut velit ultrices lacinia. Pellentesque lacinia id quam in ullamcorper. Donec dapibus nunc pulvinar tortor suscipit gravida. Aenean convallis pharetra dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id vestibulum ipsum, sit amet vehicula felis. Aenean tincidunt quam sollicitudin ultricies viverra. Pellentesque accumsan eros in elit bibendum ullamcorper. Etiam ipsum urna, consequat eget scelerisque sed, accumsan eleifend lorem.

            Phasellus vel iaculis lacus, nec fermentum arcu. Suspendisse vel elit justo. Sed vulputate ex in ipsum molestie ultrices. Etiam pellentesque purus nisl, sit amet ultricies risus lobortis in. Vivamus ex risus, vulputate vel mollis in, tincidunt nec nulla. Etiam ex velit, condimentum quis lectus sit amet, vestibulum fringilla libero. Integer est leo, viverra eu elit eu, venenatis consequat tortor.

            Vivamus at auctor turpis, quis mollis justo. Curabitur nec metus non felis volutpat dictum. Maecenas in fermentum massa. Ut consequat semper arcu eu placerat. In hac habitasse platea dictumst. Fusce vel pellentesque enim. Nullam porttitor at lacus et tristique. Nullam convallis orci et metus lacinia vestibulum. Aliquam odio erat, pulvinar eu ultrices in, euismod in tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
