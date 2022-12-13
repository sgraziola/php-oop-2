<?php


trait Material
{
    protected $material;

    public function set_material($material)
    {
        $this->material = $material;
    }

    public function get_material()
    {
        return $this->material;
    }
}
