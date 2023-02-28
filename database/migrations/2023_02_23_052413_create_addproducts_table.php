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
        Schema::create('addproducts', function (Blueprint $table) {
            $table->increments("id");
            $table->string("productimage");
            $table->string("productname");
            $table->integer("categoryid")->unsigned();
            $table->foreign("categoryid")->references("id")->on("categories");
            $table->integer("subcategoryid")->unsigned();
            $table->foreign("subcategoryid")->references("id")->on("subcategories");
            $table->text("description");
            $table->string("qty");
            $table->string("oldprice");
            $table->string("newprice");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addproducts');
    }
};
