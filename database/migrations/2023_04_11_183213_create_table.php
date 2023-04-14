<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $category) {
            $category->id()->unique();
            $category->string('name')->unique();
            $category->boolean('active')->default(false);
            $category->string('code')->unique();
            $category->timestamps();
            $category->integer('parentId')->nullable();
        });
        Schema::create('banners', function (Blueprint $banner) {
            $banner->id()->unique();
            $banner->string('name')->unique();
            $banner->boolean('active')->default(false);

            $banner->date('active_from');
            $banner->date('active_to');

            $banner->string('link');
            $banner->string('image_banner');
        });
        Schema::create('banners_categories', function (Blueprint $banCat) {
            $banCat->id()->unique();
            $banCat->integer('categoryId');
            $banCat->integer('bannerId');

            $banCat->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $banCat->foreign('bannerId')->references('id')->on('banners')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('banners');
    }
};

