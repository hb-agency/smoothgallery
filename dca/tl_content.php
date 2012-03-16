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
 * @copyright  Leo Feyer 2005
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Frontend
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_content 
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'smoothType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['smoothgallery'] = '{type_legend},type,smoothType;';
$GLOBALS['TL_DCA']['tl_content']['palettes']['smoothgallerysmoothsingle'] = '{type_legend},type,smoothType;{text_legend},smoothHeadline,smoothSubheadline,smoothText;{image_legend},smoothImage,size;{thumbnail_legend},smoothThumbnail,smoothThumbsize,smoothThumbnailLink,target,smoothToolTips,smoothLightbox;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['smoothgallerysmoothstart'] = '{type_legend},type,smoothType;{basicconfig_legend},smoothGalleryID,smoothArrows,smoothCarousel,smoothInfopane,smoothUselinks,smoothTimed,smoothThumbsize,smoothThumbspacing,smoothThumbopacity;{advconfig_legend},smoothDelay,smoothFadeDuration,smoothExtCarousel,smoothCarouselElement,smoothScrollType,smoothScriptType;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['smoothgallerysmoothstop'] = '{type_legend},type,smoothType;{protected_legend:hide},protected;{expert_legend:hide},guests';


// Fields		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothType'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothType'],
			'default'                 => 'smoothsingle',
			'exclude'                 => true,
			'inputType'               => 'radio',
			'options'                 => array('smoothstart', 'smoothstop','smoothsingle'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
			'eval'                    => array('submitOnChange'=>true)
		);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothHeadline'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothHeadline'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothSubheadline'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothSubheadline'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothText'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothText'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothImage'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothImage'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true)
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothThumbnail'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothThumbnail'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('fieldType'=>'radio', 'files'=>true)
		);
		
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothThumbsize'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothThumbsize'],
			'exclude'                 => true,
			'inputType'               => 'imageSize',
			'options'                 => $GLOBALS['TL_CROP'],
			'reference'               => &$GLOBALS['TL_LANG']['MSC'],
			'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
		);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothThumbspacing'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothThumbspacing'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'tl_class'=>'w50')
		);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothThumbopacity'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothThumbopacity'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'tl_class'=>'w50')
		);

$GLOBALS['TL_DCA']['tl_content']['fields']['smoothExtCarousel'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothExtCarousel'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothCarouselElement'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothCarouselElement'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		);
		
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothGalleryID'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothGalleryID'],
			'default'                 => 'myGallery',
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothFadeDuration'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothFadeDuration'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'rgxp'=>'digit', 'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothDelay'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothDelay'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255,'rgxp'=>'digit', 'tl_class'=>'w50')
		);
	
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothArrows'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothArrows'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothCarousel'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothCarousel'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothUselinks'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothUselinks'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothTimed'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothTimed'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothInfopane'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothInfopane'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothScriptType'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothScriptType'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('onmouseover', 'onclick'),
			'eval'					  => array('includeBlankOption'=>true, 'tl_class'=>'w50')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothScrollType'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothScrollType'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothThumbnailLink'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothThumbnailLink'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'wizard' => array
			(
				array('tl_content', 'pagePicker')
			)
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothToolTips'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothToolTips'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
$GLOBALS['TL_DCA']['tl_content']['fields']['smoothLightbox'] = array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_content']['smoothLightbox'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'					  => array('tl_class'=>'w50 m12')
		);
?>