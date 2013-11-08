<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Prime File Model
 *
 * @author Birkir Gudjonsson (birkir.gudjonsson@gmail.com)
 * @package Prime
 * @category Model
 * @copyright (c) 2013 SOLID Productions
 */
class Model_Prime_File extends Model_Prime {

	/**
	 * @var boolean Model is not sortable
	 */
	protected $_sortable = FALSE;

	/**
	 * @var array Has many relationships
	 */
	protected $_has_many = [
		'files' => [
			'model'       => 'Prime_File',
			'foreign_key' => 'parent_id',
			'far_key'     => 'id'
		]
	];

} // End Prime File Model