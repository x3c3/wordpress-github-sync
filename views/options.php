<div class="wrap">
  <h2>WordPress <--> GitHub Sync</h2>
  <form method="post" action="options.php">
    <?php settings_fields( WordPress_GitHub_Sync::$text_domain ); ?>
    <?php do_settings_sections( WordPress_GitHub_Sync::$text_domain ); ?>
    <table class="form-table">
      <tr>
        <th scope="row">Webhook callback</th>
        <td><code><?php echo admin_url( 'admin-ajax.php' ); ?>?action=wpghs_sync_request</code></td>
      </tr>
    </table>
    <?php submit_button(); ?>
  </form>
</div>
