<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->string('imagen');
            $table->string('pais');
            $table->integer('kcalxunit');
            $table->integer('kcalxcien');
            $table->integer('grasas');
            $table->integer('carbohidratos');
            $table->integer('proteinas');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('productos')->insert(
            array(
                'nombre'=>'Pan',
                'precio'=>1,
                'imagen'=>'pan.jpg',
                'pais'=>'España',
                'kcalxunit'=>1,
                'kcalxcien'=>2,
                'grasas'=>3,
                'carbohidratos'=>4,
                'proteinas'=>5
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Twix',
                'precio'=>2,
                'imagen'=>'chocolatina.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>3,
                'kcalxcien'=>4,
                'grasas'=>5,
                'carbohidratos'=>6,
                'proteinas'=>7
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Agua',
                'precio'=>1,
                'imagen'=>'agua.jpg',
                'pais'=>'España',
                'kcalxunit'=>1,
                'kcalxcien'=>1,
                'grasas'=>0,
                'carbohidratos'=>0,
                'proteinas'=>0
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Almonjoy',
                'precio'=>3,
                'imagen'=>'almonjoy.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>50,
                'kcalxcien'=>100,
                'grasas'=>200,
                'carbohidratos'=>100,
                'proteinas'=>300
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Aquarius',
                'precio'=>2,
                'imagen'=>'aquarious.jpg',
                'pais'=>'UK',
                'kcalxunit'=>50,
                'kcalxcien'=>72,
                'grasas'=>20,
                'carbohidratos'=>20,
                'proteinas'=>20
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Babyruth',
                'precio'=>3,
                'imagen'=>'babyruth.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>300,
                'kcalxcien'=>400,
                'grasas'=>400,
                'carbohidratos'=>200,
                'proteinas'=>400
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Coca cola',
                'precio'=>1,
                'imagen'=>'cola.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>200,
                'kcalxcien'=>200,
                'grasas'=>200,
                'carbohidratos'=>100,
                'proteinas'=>100
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Coca cola Zero',
                'precio'=>1,
                'imagen'=>'colazero.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>200,
                'kcalxcien'=>100,
                'grasas'=>50,
                'carbohidratos'=>50,
                'proteinas'=>50
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Fanta',
                'precio'=>1,
                'imagen'=>'fanta.jpg',
                'pais'=>'EEUU',
                'kcalxunit'=>20,
                'kcalxcien'=>30,
                'grasas'=>40,
                'carbohidratos'=>50,
                'proteinas'=>60
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Ou Kinder',
                'precio'=>3,
                'imagen'=>'kinder.jpg',
                'pais'=>'UK',
                'kcalxunit'=>100,
                'kcalxcien'=>100,
                'grasas'=>100,
                'carbohidratos'=>100,
                'proteinas'=>100
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Seven Up',
                'precio'=>1,
                'imagen'=>'sevenup.jpg',
                'pais'=>'UK',
                'kcalxunit'=>100,
                'kcalxcien'=>100,
                'grasas'=>100,
                'carbohidratos'=>100,
                'proteinas'=>100
            )
        );
        DB::table('productos')->insert(
            array(
                'nombre'=>'Zumo multifrutas',
                'precio'=>2,
                'imagen'=>'zumo.jpg',
                'pais'=>'España',
                'kcalxunit'=>200,
                'kcalxcien'=>200,
                'grasas'=>200,
                'carbohidratos'=>200,
                'proteinas'=>200
            )
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
