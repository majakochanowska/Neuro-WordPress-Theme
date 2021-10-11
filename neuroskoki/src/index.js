import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';
import { esc_html__ } from '@wordpress/escape-html';

registerBlockType( 'neuro/references-block', {
	title: esc_html__( 'Bibliografia', 'neuro' ) ,
	icon: 'book',
	category: 'text',

	edit: ( props ) => {

		const ALLOWED_BLOCKS = [ 'core/list', 'core/paragraph' ];

		return (
			<div className={ props.className }>
				<h4>{ esc_html__( 'Bibliografia', 'neuro' ) }</h4>
				<InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
			</div>
		);
	},
	save: ( props ) => {
		
		return (
			<div className={ props.className }>
				<h4>{ esc_html__( 'Bibliografia', 'neuro' ) }</h4>
				<InnerBlocks.Content />
			</div>
		);
	},
} );