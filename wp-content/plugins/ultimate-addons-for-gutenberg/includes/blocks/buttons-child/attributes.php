<?php
/**
 * Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$border_attribute = UAGB_Block_Helper::uag_generate_border_attribute( 'btn' );

$enable_legacy_blocks = UAGB_Admin_Helper::get_admin_settings_option( 'uag_enable_legacy_blocks', ( 'yes' === get_option( 'uagb-old-user-less-than-2' ) ) ? 'yes' : 'no' );

$v_padding_default = ( 'yes' === get_option( 'uagb-old-user-less-than-2' ) || 'yes' === $enable_legacy_blocks ) ? 10 : '';

$h_padding_default = ( 'yes' === get_option( 'uagb-old-user-less-than-2' ) || 'yes' === $enable_legacy_blocks ) ? 14 : '';

return array_merge(
	array(
		'inheritFromTheme'       => false,
		'block_id'               => '',
		'label'                  => '#Click Here',
		'link'                   => '',
		'opensInNewTab'          => false,
		'target'                 => '',
		'size'                   => '',
		// If the paddings aren't set, the button child will fallback to the following vPadding and hPadding.
		'vPadding'               => $v_padding_default,
		'hPadding'               => $h_padding_default,
		'topTabletPadding'       => '',
		'rightTabletPadding'     => '',
		'bottomTabletPadding'    => '',
		'leftTabletPadding'      => '',
		'topMobilePadding'       => '',
		'rightMobilePadding'     => '',
		'bottomMobilePadding'    => '',
		'leftMobilePadding'      => '',
		'paddingUnit'            => 'px',
		'mobilePaddingUnit'      => 'px',
		'tabletPaddingUnit'      => 'px',
		'paddingLink'            => '',
		'color'                  => '',
		'background'             => '',
		'hColor'                 => '',
		'hBackground'            => '',
		'sizeType'               => 'px',
		'sizeMobile'             => '',
		'sizeTablet'             => '',
		'lineHeight'             => '',
		'lineHeightType'         => 'em',
		'lineHeightMobile'       => '',
		'lineHeightTablet'       => '',
		'icon'                   => '',
		'iconPosition'           => 'after',
		'iconSpace'              => 8,
		'iconSpaceTablet'        => '',
		'iconSpaceMobile'        => '',
		'iconSize'               => 15,
		'iconSizeTablet'         => '',
		'iconSizeMobile'         => '',
		'LoadGoogleFonts'        => '',
		'noFollow'               => false,
		'fontFamily'             => '',
		'fontWeight'             => '',
		'fontStyle'              => '',
		'transform'              => '',
		'decoration'             => '',
		'backgroundType'         => 'color',
		'hoverbackgroundType'    => 'color',
		'topMargin'              => '',
		'rightMargin'            => '',
		'bottomMargin'           => '',
		'leftMargin'             => '',
		'topMarginTablet'        => '',
		'rightMarginTablet'      => '',
		'bottomMarginTablet'     => '',
		'leftMarginTablet'       => '',
		'topMarginMobile'        => '',
		'rightMarginMobile'      => '',
		'bottomMarginMobile'     => '',
		'leftMarginMobile'       => '',
		'marginType'             => 'px',
		'marginLink'             => '',
		'boxShadowColor'         => '#00000026',
		'boxShadowHOffset'       => 0,
		'boxShadowVOffset'       => 0,
		'boxShadowBlur'          => '',
		'boxShadowSpread'        => '',
		'boxShadowPosition'      => 'outset',
		'iconColor'              => '',
		'iconHColor'             => '',
		'buttonSize'             => '',
		'removeText'             => false,
		'gradientValue'          => '',
		'hovergradientValue'     => '',
		'backgroundOpacity'      => '',
		'backgroundHoverOpacity' => '',
		// letter spacing.
		'letterSpacing'          => '',
		'letterSpacingTablet'    => '',
		'letterSpacingMobile'    => '',
		'letterSpacingType'      => 'px',
		'borderWidth'            => '',
		'borderRadius'           => '',
		'borderStyle'            => 'solid',
		'borderColor'            => '#000',
		'borderHColor'           => '',
	),
	$border_attribute
);
