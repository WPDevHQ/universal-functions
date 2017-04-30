<?php if (!defined('FW')) die('Forbidden');

class Fw_Option_Type_Image_Picker extends FW_Option_Type
{
	public function get_type()
	{
		return 'image-picker';
	}

	/**
	 * @internal
	 */
	protected function _get_defaults()
	{
		return array(
			'value'   => '',
			'blank'   => false, // if true, images can be deselected
			'choices' => array(
				/*
				'value' => '.../small.png'
				// or
				'value' => array(
					'small' => '.../small.png'
					'large' => '.../large.png' // optional
					'data'  => array(...) // (optional) choice extra data for js, available in custom events
				)
				// or
				'value' => array(
					'small' => array(
						'src' => '.../small.png',
						'alt' => '...'
					)
					'large' => array( // optional
						'src' => '.../large.png',
						'alt' => '...'
					)
					'data' => array(...) // (optional) choice extra data for js, available in custom events
				)
				*/
			),
		);
	}

	/**
	 * @internal
	 * {@inheritdoc}
	 */
	protected function _enqueue_static($id, $option, $data)
	{
		wp_enqueue_script(
			'fw-option-' . $this->get_type() . '-image-picker',
			fw_get_framework_directory_uri('/includes/option-types/' . $this->get_type() . '/static/js/image-picker/image-picker.js'),
			array(),
			'1.0',
			true
		);

		wp_enqueue_style(
			'fw-option-' . $this->get_type(),
			fw_get_framework_directory_uri('/includes/option-types/' . $this->get_type() . '/static/css/styles.css'),
			array('qtip'),
			'1.0'
		);

		wp_enqueue_script(
			'fw-option-' . $this->get_type(),
			fw_get_framework_directory_uri('/includes/option-types/' . $this->get_type() . '/static/js/scripts.js'),
			array('fw-events', 'qtip'),
			'1.0',
			true
		);
	}

	/**
	 * @internal
	 */
	protected function _render($id, $option, $data)
	{
		{
			$wrapper_attr = array(
				'id'    => $option['attr']['id'],
				'class' => $option['attr']['class'],
			);

			foreach ($wrapper_attr as $attr_name => $attr_val) {
				unset($option['attr'][$attr_name]);
			}
		}

		$option['value'] = (string)$data['value'];
		unset($option['attr']['multiple']);

		/**
		 * pre loads images on page load
		 *
		 * fixes glitch with preview:
		 * * hover first time  - show wrong because image not loaded and has no height/width and cannot detect correctly popup position
		 * * hover second time - show correctly
		 */
		$pre_load_images_html = '';

		$html = '';

		{
			$html .= '<select ' . fw_attr_to_html($option['attr']) . '>';

			if (!empty($option['blank']) and $option['blank'] === true) {
				$html .= '<option value=""></option>';
			}

			foreach ($option['choices'] as $key => $choice) {
				$attr = array(
					'value' => $key,
				);

				if ($option['value'] == $key) {
					$attr['selected'] = 'selected';
				}

				if (is_string($choice)) {
					// is 'http://.../small.png'
					$choice = array(
						'small' => array(
							'src' => $choice
						)
					);
				}

				if (is_string($choice['small'])) {
					// is 'http://.../small.png'
					$choice['small'] = array(
						'src' => $choice['small']
					);
				}
				$attr['data-small-img-attr'] = json_encode($choice['small']);

				// required by image-picker plugin
				$attr['data-img-src'] = $choice['small']['src'];

				if (!empty($choice['large'])) {
					if (is_string($choice['large'])) {
						// is 'http://.../large.png'
						$choice['large'] = array(
							'src' => $choice['large']
						);
					}

					$attr['data-large-img-attr'] = json_encode($choice['large']);

					$pre_load_images_html .= fw_html_tag('img', array('src' => $choice['large']['src']));
				}

				if (!empty($choice['data'])) {
					// used in js events
					$attr['data-extra-data'] = json_encode($choice['data']);
				}

				$html .= fw_html_tag('option', $attr, fw_htmlspecialchars(isset($choice['label']) ? $choice['label'] : ''));
			}

			$html .= '</select>';
		}

		return fw_html_tag('div', $wrapper_attr,
			$html . '<div class="pre-loaded-images"><br/><br/>'. $pre_load_images_html .'</div>'
		);
	}

	/**
	 * @internal
	 */
	protected function _get_value_from_input($option, $input_value)
	{
		if (is_null($input_value)) {
			return $option['value'];
		}

		if (!isset($option['choices'][$input_value])) {
			if (
				empty($option['choices']) ||
				isset($option['choices'][ $option['value'] ])
			) {
				$input_value = $option['value'];
			} else {
				reset($option['choices']);
				$input_value = key($option['choices']);
			}
		}

		return (string)$input_value;
	}

	/**
	 * @internal
	 */
	public function _get_backend_width_type()
	{
		return 'auto';
	}
}

FW_Option_Type::register('FW_Option_Type_Image_Picker');
