<?php
$taxonomies = get_taxonomies([
	'object_type' => ['laptop']
]);
//$terms = get_terms( ['taxonomy' => 'color'] );
//var_dump($terms);

$taxonomyContentFilter = '';
foreach ($taxonomies as $taxonomy) {
	$terms = get_terms( ['taxonomy' => $taxonomy] );
//	$taxonomyContentFilter .= '<select> <h3>' . $taxonomy . '</h3>';
//	foreach ($terms as $term) {
//		$taxonomyContentFilter .= '<option><a href="'.get_term_link($term->slug, $taxonomy).'">'.$term->name.'</a></option>';
//	}
//	$taxonomyContentFilter .= '</select>';
	$taxonomyContentFilter .= '<ul> <h3>' . $taxonomy . '</h3>';
	foreach ($terms as $term) {
		$taxonomyContentFilter .= '<li><a href="'.get_term_link($term->slug, $taxonomy).'">'.$term->name.'</a></li>';
	}
	$taxonomyContentFilter .= '</ul>';
//	if($taxonomy = = 'vcard'){
//		break;
//	}
}

echo $taxonomyContentFilter;
