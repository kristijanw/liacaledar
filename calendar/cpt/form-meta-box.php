
<div id="liaevent-details">

	<?php wp_nonce_field( basename( __FILE__ ), 'event_details_post_nonce' ); ?>

	<div class="time">
		<h4><?php esc_html_e( 'Time &amp; Date', 'liacalendar' ); ?></h4>	

		<input
			autocomplete="off"
			tabindex=""
			type="date"
			class=""
			name="EventStartDate"
			id="EventStartDate"
			value="<?php echo esc_attr( get_post_meta( $post->ID, 'EventStartDate', true ) ); ?>"
		/>
		<input
			autocomplete="off"
			tabindex=""
			type="time"
			class=""
			name="EventStartTime"
			id="EventStartTime"
			value="<?php echo esc_attr( get_post_meta( $post->ID, 'EventStartTime', true ) ); ?>"
		/>
	</div>

</div>