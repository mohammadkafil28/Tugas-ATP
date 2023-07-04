<?php

namespace Tests\Feature;

use App\Models\Produk;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ProdukTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    /** @test */
    public function user_can_view_list_of_produk()
    {
        $response = $this->get('/produk');

        $response->assertStatus(200);
        $response->assertSee('Daftar Produk');
        // Assert lainnya sesuai dengan tampilan halaman list produk
    }

    /** @test */
    public function user_can_create_a_produk()
    {
        $response = $this->post('/produk', [
            'nama' => 'Produk Baru',
            'deskripsi' => 'Deskripsi Produk Baru',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/produk');
        $this->assertDatabaseHas('produks', ['nama' => 'Produk Baru']);
    }

    /** @test */
    public function user_can_view_a_single_produk()
    {
        $produk = Produk::factory()->create();

        $response = $this->get('/produk/' . $produk->id);

        $response->assertStatus(200);
        $response->assertSee($produk->nama);
        // Assert lainnya sesuai dengan tampilan halaman detail produk
    }

    /** @test */
    public function user_can_update_a_produk()
    {
        $produk = Produk::factory()->create();

        $response = $this->put('/produk/' . $produk->id, [
            'nama' => 'Nama Produk Baru',
            'deskripsi' => 'Deskripsi Produk Baru',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/produk/' . $produk->id);
        $this->assertDatabaseHas('produks', ['nama' => 'Nama Produk Baru']);
    }

    /** @test */
    public function user_can_delete_a_produk()
    {
        $produk = Produk::factory()->create();

        $response = $this->delete('/produk/' . $produk->id);

        $response->assertStatus(302);
        $response->assertRedirect('/produk');
        $this->assertDatabaseMissing('produks', ['id' => $produk->id]);
    }
}
