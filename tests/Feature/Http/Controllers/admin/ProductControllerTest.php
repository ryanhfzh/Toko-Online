<?php

namespace Tests\Feature\Http\Controllers\admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Categories;
use App\Product;

class ProductControllerTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function test_store()
    {
        //Membuat objek user yang otomatis menambahkannya ke database.
        $user = factory(User::class)->create();

        //Membuat objek category yang otomatis menambahkannya ke database.
        $category = factory(CategoryModel::class)->create();

        //Acting as berfungsi sebagai autentikasi, jika kita menghilangkannya maka akan error.
        $response = $this->actingAs($user)
        //Hit post ke method store, fungsinya ya akan lari ke fungsi store.
        ->post(route('product.store'), [
            //isi parameter sesuai kebutuhan request
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->words(3, true),
            'price' => $this->faker->randomNumber(6),
            'stok' => $this->faker->randomNumber(2),
            'weight' => $this->faker->randomNumber(3),
            'category_id' => $category->id,
            'image' => $this->faker->words(3, true),
            'ar' => $this->faker->words(3, true),
        ]);

    //Tuntutan status 302, yang berarti redirect status code.
    $response->assertStatus(302);

    //Tuntutan bahwa abis melakukan POST URL akan dialihkan ke URL product atau routenya adalah product.index
    $response->assertRedirect(route('admin.product.index'));
    }
}
