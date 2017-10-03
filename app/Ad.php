<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Laravel\Scout\Searchable;

class Ad extends Model
{
	use Searchable;

	public function getCreatorAttribute()
	{
		return User::find($this->user_id);
	}

	public function getImgUrlAttribute()
	{
			if (Storage::exists('public/ads/' . $this->id)) {
					return asset(Storage::url('public/ads/' . $this->id));
			}
			else {
					return "https://i.pinimg.com/236x/18/63/cc/1863cc2425ad5f71b6b6bfddd64bb586--garfield.jpg";
			}
	}

	public function getPriceFAttribute()
	{
			return 'R$ ' . number_format($this->price/100.0, 2, '.', ',');
	}

	public function searchableAs()
	{
		return 'ads_index';
	}
}
