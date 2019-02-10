<?php 
/**
 * 
 */
class Template
{
	private $_ci;
	protected $base_view;
	protected $partial_view;
	protected $content_view_name;


	const CONTENT_VIEW_NAME_DEFAULT = 'content';

	function __construct($params)
	{
		$this->_ci 			= &get_instance();
		$this->base_view 	= $params['base_view'];
		$this->partial_view = $params['partial_view'];

		$this->content_view_name = self::CONTENT_VIEW_NAME_DEFAULT;
	}
	public function getter()
	{
		return [
			$this->base_view,$this->partial_view
		];
	}
	public function render($partial_view = [],$data = NULL,$is_plain_text = FALSE,$data_separation = TRUE)
	{
		if (!empty($partial_view)) 
		{
			if (is_array($partial_view)) 
			{
				$this->partial_view = array_merge($this->partial_view,$partial_view);
			}
			if (is_string($partial_view)) 
			{
				$this->partial_view[$this->content_view_name] = $partial_view;
			}
		}


		if ($data_separation === TRUE) 
		{
			$content 			= $this->partial_view;
			$content['data'] 	= $data;
		} else
		{
			$content 			= array_merge($this->partial_view,$data);
		}

		return $this->_ci->load->view($this->base_view,$content,$is_plain_text);
	}
	public function setBaseView($base_view)
	{
		$this->base_view = $base_view;
	}
	public function setPartialView($partial_view)
	{
		$this->partial_view = $partial_view;
	}
}