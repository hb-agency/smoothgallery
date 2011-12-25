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
 * Class Contentsmoothgallery
 *
 * Front end content element "accordion".
 * @copyright  Leo Feyer 2005
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Controller
 */
class ContentSmoothgallery extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_smoothgallery';


	/**
	 * Generate content element
	 */
	protected function compile()
	{
		
		
		// Accordion start
		if ($this->smoothType == 'smoothstart')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_smoothgallery_start';
				$this->Template = new FrontendTemplate($this->strTemplate);
				$this->Template->arrows = ($this->smoothArrows) ? 'true' : 'false';
				$this->Template->galleryID = strlen($this->smoothGalleryID) ? $this->smoothGalleryID : 'myGallery';
				$this->Template->carousel = ($this->smoothCarousel) ? 'true' : 'false';
				$this->Template->infopane = ($this->smoothInfopane) ? 'true' : 'false';
				$this->Template->extCarousel = $this->smoothExtCarousel;
				$this->Template->carouselElement = $this->smoothCarouselElement;
				$this->Template->uselinks = ($this->smoothUselinks) ? 'true' : 'false';
				$this->Template->co = ($this->smoothUselinks) ? 'true' : 'false';
				$this->Template->timed = ($this->smoothTimed) ? 'true' : 'false';
				$this->Template->scroll = ($this->smoothScrollType) ? 'true' : 'false';
				$this->Template->fadeDuration = $this->smoothFadeDuration;
				$this->Template->delay = $this->smoothDelay;
				$this->Template->thumbSpacing = $this->smoothThumbspacing;
				$this->Template->thumbOpacity = $this->smoothThumbopacity;
				$thumbsize = deserialize($this->smoothThumbsize);
				if($thumbsize[0] == '')
				{
					$thumbsize[0] = 100;
				}
				if($thumbsize[1] == '')
				{
					$thumbsize[1] = 75;
				}
				$this->Template->thumbwidth = $thumbsize[0];
				$this->Template->thumbheight = $thumbsize[1];
				if (strlen($this->smoothScriptType) > 0)
				{
					$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/smoothgallery/html/smoothgallery.' . $this->smoothScriptType . '.js';
				} else {
					$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/smoothgallery/html/smoothgallery.js';
				}
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '### SMOOTHGALLERY WRAPPER START ### <br /><br /> Put Smoothgallery Single Element Images Below Here <br /> &darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;&darr;';
				$this->Template->title = $this->smoothHeadline;
			}
		}

		// Accordion end
		elseif ($this->smoothType == 'smoothstop')
		{
			if (TL_MODE == 'FE')
			{
				$this->strTemplate = 'ce_smoothgallery_stop';
				$this->Template = new FrontendTemplate($this->strTemplate);
			}
			else
			{
				$this->strTemplate = 'be_wildcard';
				$this->Template = new BackendTemplate($this->strTemplate);
				$this->Template->wildcard = '&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr;&uarr; <br /> Put Smoothgallery Single Element Images Above Here <br /><br />### SMOOTHGALLERY WRAPPER END ### ';
			}
		}

		// Default
		else
		{
			$this->import('String');

			$text = $this->String->encodeEmail($this->smoothText);
			$text = str_ireplace(array('<u>', '</u>'), array('<span style="text-decoration:underline;">', '</span>'), $text);
			$text = str_ireplace(array('</p>', '<br /><br />'), array("</p>\n", "<br /><br />\n"), $text);

			$this->Template = new FrontendTemplate($this->strTemplate);

			// Use an image instead of the title
			if (strlen($this->smoothImage) && is_file(TL_ROOT . '/' . $this->smoothImage))
			{
		

				$size = deserialize($this->size);
				$arrImageSize = getimagesize(TL_ROOT . '/' . $this->smoothImage);

				// Adjust image size in the back end
				if (TL_MODE == 'BE' && $arrImageSize[0] > 640 && ($size[0] > 640 || !$size[0]))
				{
					$size[0] = 640;
					$size[1] = floor(640 * $arrImageSize[1] / $arrImageSize[0]);
				}

				$src = $this->getImage($this->urlEncode($this->smoothImage), $size[0], $size[1]);

				if (($imgSize = @getimagesize(TL_ROOT . '/' . $src)) !== false)
				{
					$this->Template->imgSize = ' ' . $imgSize[3];
				}

				$this->Template->src = $src;
				$this->Template->width = $arrImageSize[0];
				$this->Template->height = $arrImageSize[1];
				$this->Template->alt = specialchars($this->alt);
				//$this->Template->href = strlen($this->imageUrl) ? $this->imageUrl : $this->urlEncode($this->smoothImage);
				$this->Template->caption = $this->caption;
			}
			
			// Use an image instead of the title
			if (strlen($this->smoothThumbnail) && is_file(TL_ROOT . '/' . $this->smoothThumbnail))
			{
				
				$thumbsize = deserialize($this->smoothThumbsize);
				$arrImageSize = getimagesize(TL_ROOT . '/' . $this->smoothThumbnail);

				// Adjust image size in the back end
				if (TL_MODE == 'BE')
				{
					$thumbsize[0] = 50;
					$thumbsize[1] = 50;
				}

				$thumbsrc = $this->getImage($this->urlEncode($this->smoothThumbnail), $thumbsize[0], $thumbsize[1]);

				if (($thumbimgSize = @getimagesize(TL_ROOT . '/' . $thumbsrc)) !== false)
				{
					$this->Template->thumbimgSize = ' ' . $thumbimgSize[3];
				}

				$this->Template->thumbsrc = $thumbsrc;
				$this->Template->thumbwidth = $arrImageSize[0];
				$this->Template->thumbheight = $arrImageSize[1];
				$this->Template->thumbalt = specialchars($this->alt);
				//$this->Template->thumbhref = strlen($this->imageUrl) ? $this->imageUrl : $this->urlEncode($this->smoothThumbnail);
			} else {
				$this->Template->thumbsrc = $src;
				$this->Template->thumbwidth = $arrImageSize[0];
				$this->Template->thumbheight = $arrImageSize[1];
				$this->Template->thumbalt = specialchars($this->alt);
			}

			$this->Template->href = strlen($this->smoothThumbnailLink) ? $this->smoothThumbnailLink : ($this->smoothLightbox ? "javascript:this.onclick(Mediabox.open('".$this->smoothImage."','".$this->smoothHeadline."'));" : '#');
			$this->Template->text = $text;
		}
		$this->Template->lightbox = $this->smoothLightbox ? ' rel="lightbox"' : '';
		$this->Template->groupname = standardize($this->headline . '_' . $this->id);
		$this->Template->headline = $this->smoothHeadline;
		$this->Template->subheadline = $this->smoothSubheadline;
		$this->Template->tooltips = $this->smoothToolTips;
		$this->Template->noimage = $GLOBALS['TL_LANG']['MSC']['noimage'];
	}
}

?>