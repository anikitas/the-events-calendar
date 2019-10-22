<?php
/**
 * View: Messages
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/components/messaging.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 * @var array $messges An array of user-facing messages, managed by the View.
 *
 * @package the-events-calendar/views/v2
 */

if ( empty( $messages ) ) {
	return;
}

?>

<?php foreach ( $messages as $message_type => $message_group ) : ?>
	<div class="tribe-events-c-messages tribe-common-b2 tribe-events-c-messages--<?php echo esc_attr( $message_type ); ?>" role="alert">
		<ul class="tribe-events-c-messages__list">
			<?php foreach ( $message_group as $message ) : ?>
				<li class="tribe-events-c-messages__list-message">
					<?php echo wp_kses_post( $message ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
<?php endforeach; ?>
