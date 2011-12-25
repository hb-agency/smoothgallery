-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************


-- --------------------------------------------------------

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `smoothType` varchar(32) NOT NULL default '',
  `smoothHeadline` varchar(255) NOT NULL default '',
  `smoothSubheadline` varchar(255) NOT NULL default '',
  `smoothImage` varchar(255) NOT NULL default '',
  `smoothText` varchar(500) NOT NULL default '',
  `smoothArrows` char(1) NOT NULL default '',
  `smoothCarousel` char(1) NOT NULL default '',
  `smoothExtCarousel` char(1) NOT NULL default '',
  `smoothCarouselElement` varchar(255) NOT NULL default '',
  `smoothGalleryID` varchar(255) NOT NULL default '',
  `smoothInfopane` char(1) NOT NULL default '',
  `smoothThumbnail` varchar(255) NOT NULL default '',
  `smoothThumbsize` varchar(255) NOT NULL default '',
  `smoothThumbspacing` varchar(255) NOT NULL default '',
  `smoothThumbopacity` varchar(255) NOT NULL default '',
  `smoothThumbnailLink` varchar(255) NOT NULL default '',
  `smoothScriptType` varchar(255) NOT NULL default '',
  `smoothScrollType` char(1) NOT NULL default '',
  `smoothToolTips` char(1) NOT NULL default '',
  `smoothLightbox` char(1) NOT NULL default '',
  `smoothUselinks` varchar(255) NOT NULL default '',
  `smoothTimed` char(1) NOT NULL default '',
  `smoothDelay` varchar(255) NOT NULL default '',
  `smoothFadeDuration` varchar(255) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;