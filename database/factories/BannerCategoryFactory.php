<?php

namespace Database\Factories;
use App\Models\BannerCategory;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $allBanners = Banner::all();
        $randBannerIndex = random_int(0, $allBanners->count());
        $randBanner = $allBanners[$randBannerIndex];

        $allCategories = Category::all();
        $randCategoryIndex = random_int(0, $allCategories->count() - 1);
        $randCategory = $allCategories[$randCategoryIndex];

        return [
            'categoryId' => $randCategory->id,
            'bannerId' => $randBanner->id,
        ];
    }
}
