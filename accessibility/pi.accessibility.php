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
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		$iPod    = stripos($userAgent,"iPod");
		$iPhone  = stripos($userAgent,"iPhone");
		$iPad    = stripos($userAgent,"iPad");
		$Android = stripos($userAgent,"Android");
		if ($iPod || $iPhone || $iPad) {
			$touchDeviceOS = 'iOS';
		}
		else if ($Android) {
			$touchDeviceOS = 'Android';
		}
		return $touchDeviceOS;
	}
}
