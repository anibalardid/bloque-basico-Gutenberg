( function( blocks, i18n, element) {
	var el = element.createElement;
	var __ = i18n.__;

	blocks.registerBlockType(
		'ohy/bloque-cero', {
			// Titulo del bloque
			title: __( 'Bloque cero' ),
			// Icono
			icon: 'carrot',
			// Categoría
			category: 'common',
			edit: function( props ) {
				return el(
					'h2',
					{
						className: 'clase-cero-back',
					},
					__( 'Mi primer bloque' ),
				)
			},
			save: function( props ) {
				return el( 
					'p',
					{
						className: 'clase-cero-front',
					},
					__( 'El texto del front del bloque cero' ),
				);
			}
		}
	)
} )(
	window.wp.blocks,
	window.wp.i18n,
	window.wp.element,
);