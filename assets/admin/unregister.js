/* global wp */

/**
 * Unregister blocks, formats and styles
 */
wp.domReady(function () {
  //const { unregisterBlockType, getBlockTypes, unregisterBlockStyle } = wp.blocks;
  const { unregisterBlockStyle } = wp.blocks;
  const richText = wp.richText;

  /*const allowedBlocks = [
    'core/block',
    'core/columns',
    'core/column',
    'core/group',
    'core/heading',
    'core/paragraph',
    'core/list',
    'core/table',
    'core/quote',
    'core/buttons',
    'core/button',
    'core/image',
    'core/gallery',
    'core/cover',
    'core/media-text',
    'core/audio',
    'core/video',
    'core/file',
    'core/embed',
    'core/html',
    'core/freeform',
    'core/latest-posts',
  ];

  getBlockTypes().forEach(function (blockType) {
    if (blockType.name.indexOf('core') === 0 && allowedBlocks.indexOf(blockType.name) === -1) {
      unregisterBlockType(blockType.name);
    }
  });*/

  /*const allowedEmbeds = ['youtube', 'twitter', 'facebook', 'instagram'];

  wp.blocks.getBlockVariations('core/embed').forEach(function (variation) {
    if (allowedEmbeds.indexOf(variation.name) === -1) {
      wp.blocks.unregisterBlockVariation('core/embed', variation.name);
    }
  });*/

  unregisterBlockStyle('core/button', 'fill');
  unregisterBlockStyle('core/button', 'outline');
  unregisterBlockStyle('core/quote', 'default');
  unregisterBlockStyle('core/quote', 'plain');
  unregisterBlockStyle('core/quote', 'large');
  unregisterBlockStyle('core/table', 'default');
  unregisterBlockStyle('core/table', 'stripes');
  unregisterBlockStyle('core/image', 'default');
  unregisterBlockStyle('core/image', 'rounded');
  unregisterBlockStyle('core/separator', 'default');
  unregisterBlockStyle('core/separator', 'wide');
  unregisterBlockStyle('core/separator', 'dots');
  unregisterBlockStyle('core/social-links', 'default');
  unregisterBlockStyle('core/social-links', 'logos-only');
  unregisterBlockStyle('core/social-links', 'pill-shape');
  unregisterBlockStyle('core/site-logo', 'default');
  unregisterBlockStyle('core/site-logo', 'rounded');

  richText.unregisterFormatType('core/strikethrough');
  richText.unregisterFormatType('core/image');
  richText.unregisterFormatType('core/keyboard');
  richText.unregisterFormatType('core/code');
});
