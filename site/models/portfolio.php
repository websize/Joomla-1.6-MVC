<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 
/**
 * Portfolio Model
 */
class PortfolioModelPortfolio extends JModelItem
{
	/**
	 * @var object portfolio (list)
	 */
	protected $portfolio;
	
	/**
	 * Returns a reference to the a Table object, always creating it.
	 *
	 * @param	type	The table type to instantiate
	 * @param	string	A prefix for the table class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	JTable	A database object
	 * @since	1.6
	 */
	public function getTable($type = 'Portfolio', $prefix = 'PortfolioTable', $config = array()) 
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	
	 
	/**
	 * Get the portfolio
	 * @return object list. The list of portfolio items to be displayed to the user
	 */
	public function getPortfolio() 
	{
		if (!isset($this->portfolio)) 
		{
			// Get a TablePortfolio instance
			$table = $this->getTable();
 
			// Load the list
			$table->load();
 
			// Assign the list
			$this->portfolio = $table;
		}
		return $this->portfolio;
	}
}