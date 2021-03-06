<?php

namespace Essential_Addons_Elementor\Classes;

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

class Migration
{
    use \Essential_Addons_Elementor\Traits\Core;
    use \Essential_Addons_Elementor\Traits\Library;

    /**
     * Plugin activation hook
     *
     * @since 3.0.0
     */
    public function plugin_activation_hook()
    {
        // remove old cache files
        $this->empty_dir(EAEL_ASSET_PATH);

        //check setup wizard condition
        $this->enable_setup_wizard();

        // save default values
        $this->set_default_values();

    }

    /**
     * Plugin deactivation hook
     *
     * @since 3.0.0
     */
    public function plugin_deactivation_hook()
    {
        $this->empty_dir(EAEL_ASSET_PATH);
    }

    /**
     * Plugin upgrade hook
     *
     * @since 3.0.0
     */
    public function plugin_upgrade_hook($upgrader_object, $options)
    {
        if ($options['action'] == 'update' && $options['type'] == 'plugin') {
            if (isset($options['plugins'][EAEL_PLUGIN_BASENAME])) {
                // remove old cache files
                $this->empty_dir(EAEL_ASSET_PATH);
            }
        }
    }

    /**
     * Plugin migrator
     *
     * @since 3.0.0
     */
    public function migrator()
    {
        // set current version to db
        if (get_option('eael_version') != EAEL_PLUGIN_VERSION) {
            // update plugin version
            update_option('eael_version', EAEL_PLUGIN_VERSION);
        }
		$this->remove_old_options_cache();
    }
}
