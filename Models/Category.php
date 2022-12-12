<?php

class Category
{
    public $category_name;
    public $icon;

    public function __construct(String $category_name)
    {
        $this->category_name = $category_name;
        $this->set_icon($category_name);
    }

    private function set_icon($category_name)
    {
        if ($category_name === "dogs") {
            $this->icon = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn1gxNcInCZwfpcB4uoWwcTkcIcDKpYBo9-oQfMdpZVqCzGl0A&s";
        } else if ($category_name === "cats") {
            $this->icon = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ97T5_nF6D_YEIKkjqQK0JxyLQ-dE2Ki0U4tRnS7zg_Io1XkIk&s";
        }
    }

    private function get_icon()
    {
        return $this->icon;
    }
}
