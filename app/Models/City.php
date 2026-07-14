public function districts()
{
    return $this->hasMany(District::class, 'city_plate', 'id');
}