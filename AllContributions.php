<?php
/** \file
 *  \brief Contains setup code for the AllContributions Extension.
 */

/**
 * AllContributions Extension for MediaWiki
 *
 * Copyright (C) Lucien Murray-Pitts
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	// wfLoadExtension( 'AllContributions' );

	// Keep i18n globals so mergeMessageFileList.php doesn't break
	// $wgMessagesDirs['AllContributions'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for AllContributions extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
}
