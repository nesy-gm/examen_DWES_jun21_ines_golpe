<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SortComunidadesTest extends TestCase {
    // use RefreshDatabase;
// cambios sugeridos desde aprendible desarrollo api lección 4 Instalación del proyecto con Blueprint

    /** @test */
    public function it_can_sort_comunidades() {
        $url = route('api.v1.comunidades.index', ['sort' => 'denom']);
        \DB::listen(function ($db) {
           dump( $db->sql);
        });
        $this->getJson($url);

      //  $this->assertOrder();
    }

}
