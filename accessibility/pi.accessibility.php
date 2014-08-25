<?php
/**
 * Plugin
 * Returns the user's touch device type
 *
 * @author      Pirijan Ketheswaran
 *
 * @link        https://github.com/pketh/statamic-touch-device-os
 * @license     MIT
 */

class Plugin_accessibility extends Plugin
{
	public function touchDeviceOS() {
		$touchDeviceOS = null;
		$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
		if ($iPod || $iPhone || $iPad) {
			$touchDeviceOS = 'iOS';
		}
		else if ($Android) {
			$touchDeviceOS = 'Android';
		}
		return $touchDeviceOS;
	}
}
