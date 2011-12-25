<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  2009 
 * @author     blair@winanscreative.com 
 * @package    highslideGallery 
 * @license    GPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['smoothType']      = array('Operation mode', 'Please select the operation mode of the element.');
$GLOBALS['TL_LANG']['tl_content']['smoothGalleryID']  = array('Gallery ID', 'Please select a gallery ID. Useful for styling different galleries.');
$GLOBALS['TL_LANG']['tl_content']['smoothHeadline']  = array('Headline', 'Please enter the headline of the gallery content pane.');
$GLOBALS['TL_LANG']['tl_content']['smoothSubheadline']  = array('Sub-Headline', 'Please enter the subheadline of the gallery content pane.');
$GLOBALS['TL_LANG']['tl_content']['smoothText']      = array('Text', 'Please select the text of the element.');
$GLOBALS['TL_LANG']['tl_content']['smoothImage']  = array('Image', 'Please select the image to use.');
$GLOBALS['TL_LANG']['tl_content']['smoothThumbnail']      = array('Thumbnail', 'Please select the thumbnail of the element.');
$GLOBALS['TL_LANG']['tl_content']['smoothThumbsize']      = array('Thumbnail Size', 'Please select the size of the thumbnail element.');
$GLOBALS['TL_LANG']['tl_content']['smoothThumbspacing']      = array('Thumbnail Spacing', 'Please select the spacing between thumbnail elements in pixels.');
$GLOBALS['TL_LANG']['tl_content']['smoothThumbopacity']      = array('Infozone Opacity', 'Please set the opacity for the infozone to a decimal from 0-1. (example: 0.5 = 50% opacity');
$GLOBALS['TL_LANG']['tl_content']['smoothThumbnailLink']  = array('Thumbnail Link','Type in a URL or else select using the page picker.');
$GLOBALS['TL_LANG']['tl_content']['smoothArrows']  = array('Use Arrows?', 'Please select whether or not to use arrows.');
$GLOBALS['TL_LANG']['tl_content']['smoothCarousel']      = array('Use Carousel?', 'Please select whether to use the carousel with sliding thumbnails.');
$GLOBALS['TL_LANG']['tl_content']['smoothExtCarousel']      = array('Use External Carousel?', 'Please select whether to use another external carousel.');
$GLOBALS['TL_LANG']['tl_content']['smoothCarouselElement']      = array('Define External Carousel Element ID', 'Please define the ID of the external carousel.');
$GLOBALS['TL_LANG']['tl_content']['smoothInfopane']  = array('Use Infopane?', 'Please select whether to use the headline and text display area.');
$GLOBALS['TL_LANG']['tl_content']['smoothScriptType'] = array('Script Event Type','Select a script event type - onMouseOver or onClick');
$GLOBALS['TL_LANG']['tl_content']['smoothScrollType'] = array('Horizontal Scrolling?','Select whether or not the gallery uses horizontal scrolling.');
$GLOBALS['TL_LANG']['tl_content']['smoothToolTips']  = array('Enable Tooltips?', 'Check this to enable tooltips for thumbnails.');
$GLOBALS['TL_LANG']['tl_content']['smoothLightbox']  = array('Enable Lightbox?', 'Check this make the image clickable in a popup window.');
$GLOBALS['TL_LANG']['tl_content']['smoothUselinks']  = array('Enable Thumbnail Links?', 'Check this to enable links for thumbnails.');
$GLOBALS['TL_LANG']['tl_content']['smoothTimed']  = array('Enable Auto-Slideshow?', 'Check this to enable a timed slideshow.');
$GLOBALS['TL_LANG']['tl_content']['smoothDelay']  = array('Slideshow Delay', 'The amount in MS of time for the slideshow to pause between photos. (1000=1sec)');
$GLOBALS['TL_LANG']['tl_content']['smoothFadeDuration']  = array('Fade Duration', 'Duration of the fade in MS between photos. (1000=1sec)');



/**
 * Reference
 
$GLOBALS['TL_LANG']['tl_content'][''] = '';
*/

$GLOBALS['TL_LANG']['tl_content']['smoothsingle']    = array('Single element', 'In this operation mode, the element will be converted into a gallery pane. You can set up content using the rich text editor.');
$GLOBALS['TL_LANG']['tl_content']['smoothstart']     = array('Wrapper start', 'This operation mode allows to display multiple content elements in one gallery pane by inserting them between element <em>wrapper start</em> and <em>wrapper stop</em>.');
$GLOBALS['TL_LANG']['tl_content']['smoothstop']      = array('Wrapper stop', 'Indicates the end of a wrapper element.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['basicconfig_legend']  = 'Basic Configuration settings';
$GLOBALS['TL_LANG']['tl_content']['advconfig_legend']  = 'Advanced Configuration settings';
$GLOBALS['TL_LANG']['tl_content']['image_legend'] = 'Image settings';
$GLOBALS['TL_LANG']['tl_content']['thumbnail_legend'] = 'Thumbnail settings';


/**
 * Buttons

$GLOBALS['TL_LANG']['tl_content']['new']    = array('', '');
$GLOBALS['TL_LANG']['tl_content']['edit']   = array('', '');
$GLOBALS['TL_LANG']['tl_content']['copy']   = array('', '');
$GLOBALS['TL_LANG']['tl_content']['delete'] = array('', '');
$GLOBALS['TL_LANG']['tl_content']['show']   = array('', '');
 */
?>