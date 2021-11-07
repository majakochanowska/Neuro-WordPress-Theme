import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

registerBlockType( 'neuro/references-block', {
	title: __( 'Bibliografia', 'neuro' ) ,
	icon: 'book',
	category: 'text',

	edit: ( props ) => {

		const ALLOWED_BLOCKS = [ 'core/list', 'core/paragraph' ];

		return (
			<div className={ props.className }>
				<h4>{ __( 'Bibliografia', 'neuro' ) }</h4>
				<InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
			</div>
		);
	},
	save: ( props ) => {
		
		return (
			<div className={ props.className }>
				<h4>{ __( 'Bibliografia', 'neuro' ) }</h4>
				<InnerBlocks.Content />
			</div>
		);
	},
} );