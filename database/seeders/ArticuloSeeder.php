<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulo = new Articulo();

        $articulo->nombre = "Suavizante Confort";
        $articulo->descripcion = "por 1 litro";
        $articulo->cantidad = 15;
        $articulo->precio = 80;
        $articulo->imagen = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fsupermercado.carrefour.com.ar%2Fsuavizante-para-ropa-comfort-intense-concentrado-original-1-l.html&psig=AOvVaw3luDq0UqVMGJ6piQEH7Cw3&ust=1614823863050000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKjOpfKFk-8CFQAAAAAdAAAAABAD";
        $articulo->condicion = 1;

        $articulo-> save();

        $articulo2 = new Articulo();

        $articulo2->nombre = "Suavizante Vivere";
        $articulo2->descripcion = "por 1 litro";
        $articulo2->cantidad = 8;
        $articulo2->precio = 80;
        $articulo2->imagen = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dinoonline.com.ar%2Fsuper%2Fproducto%2Fsuavizante-vivere-concentrado-clasico-botella-x-1-lt%2F_%2FA-2800189-2800189-s&psig=AOvVaw1M44lBepXGfci58-_zhXmO&ust=1614824280796000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOju47GHk-8CFQAAAAAdAAAAABAD";
        $articulo2->condicion = 1;

        $articulo2-> save();

    }
}
