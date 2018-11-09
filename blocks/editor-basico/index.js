( function( wp ) {
	var registerBlockType = wp.blocks.registerBlockType;
	var el = wp.element.createElement;
	var __ = wp.i18n.__;
	var RichText = wp.editor.RichText;

	
	registerBlockType( 'bloques-charla/editor-basico', {
		title: __( 'Bloque generado con WP-CLI' ),
		icon: 'universal-access-alt',
		category: 'common',
		supports: {
			// Support for a HTML mode.
			html: true,
		},
		attributes: {
			content: {
				type: 'array',
				source: 'children',
				selector: 'p',
			}
		},
		edit: function( props ) {
			var contenido = props.attributes.content;
			function onchangeContenido ( newContent ) {
				props.setAttributes ({
					content: newContent
				});
			}
			return el(
				RichText,
				{
					tagName: 'p',
					placeholder: __( 'Introduce un texto' ),
					keepPlaceholderOnFocus: true,
					className: props.className,
					onChange: onchangeContenido,
					value: contenido,
				},
			);
		},

		save: function( props ) {
			return el(
				RichText.Content,
				{
					tagName: 'p',
					className: 'mi-clase-front',
					value: props.attributes.content,
				},
			);
		}
	} );
} )(
	window.wp
);
