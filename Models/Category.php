<?php

class Category
{
    public $category_name;
    private $icon;

    public function __construct(String $category_name)
    {
        $this->category_name = $category_name;
        $this->set_icon($category_name);
    }

    private function set_icon()
    {
        if ($this->category_name === "dogs") {
            $this->icon = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn1gxNcInCZwfpcB4uoWwcTkcIcDKpYBo9-oQfMdpZVqCzGl0A&s";
        } else if ($this->category_name === "cats") {
            $this->icon = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ97T5_nF6D_YEIKkjqQK0JxyLQ-dE2Ki0U4tRnS7zg_Io1XkIk&s";
        } else {
            exit;
        }
    }

    public function get_icon()
    {
        return $this->icon;
    }
}
