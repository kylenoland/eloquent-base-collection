<?php namespace KyleNoland\EloquentBaseCollection;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseCollection extends Collection
{
	/**
	 * Count the unique values of the specified attribute that appear in the Collection
	 *
	 * @param string $attribute
	 *
	 * @return int
	 */
	public function countUnique($attribute)
	{
		return count($this->getUnique($attribute));
	}


	/**
	 * Delete all the records in the collection
	 */
	public function deleteAll()
	{
		$this->each(function(Model $model)
		{
			$model->delete();
		});
	}
}