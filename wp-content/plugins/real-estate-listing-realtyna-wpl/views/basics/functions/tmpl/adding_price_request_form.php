<?php
/** no direct access **/
defined('_WPLEXEC') or die('Restricted access');
?>
<div class="wpl-links-req-visit-wp" id="wpl_form_adding_price_request_container">
    <form class="wpl-gen-form-wp" id="adding_price_request_form" onsubmit="adding_price_request_submit(); return false;" novalidate="novalidate">
        <div class="wpl-gen-form-row">
            <label for="wpl-links-price-req-name"><?php echo __('Name', 'real-estate-listing-realtyna-wpl'); ?></label>
            <input type="text" name="wplfdata[name]" id="wpl-links-price-req-name" placeholder="<?php echo __('Name', 'real-estate-listing-realtyna-wpl'); ?>" />
        </div>
        <div class="wpl-gen-form-row">
            <label for="wpl-links-price-req-email"><?php echo __('Email', 'real-estate-listing-realtyna-wpl'); ?></label>
            <input type="email" name="wplfdata[email]" id="wpl-links-price-req-email" placeholder="<?php echo __('Email', 'real-estate-listing-realtyna-wpl'); ?>" />
        </div>
        <div class="wpl-gen-form-row">
            <label for="wpl-links-price-req-tel"><?php echo __('Phone', 'real-estate-listing-realtyna-wpl'); ?></label>
            <input type="tel" name="wplfdata[tel]" id="wpl-links-price-req-tel" placeholder="<?php echo __('Tel', 'real-estate-listing-realtyna-wpl'); ?>" />
        </div>
        
        <?php wpl_security::nonce_field('wpl_adding_price_request_form'); ?>
        
        <div class="wpl-gen-form-row wpl-util-right">
            <input class="wpl-gen-btn-1" type="submit" value="<?php echo __('Send', 'real-estate-listing-realtyna-wpl'); ?>" />
        </div>
        <div class="wpl_show_message"></div>

        <input type="hidden" name="wplfdata[property_id]" value="<?php echo $this->property_id; ?>" />
    </form>
</div>