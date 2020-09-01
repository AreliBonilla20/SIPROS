<?php

use Illuminate\Database\Seeder;


class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avisos')->insert([
            'titulo' => 'Inicio Ciclo I-2021',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est augue, pulvinar non mi vitae, tincidunt rhoncus neque. Etiam at elit in lectus finibus suscipit. Vestibulum porta odio vitae orci posuere, vitae fermentum nisi aliquet. Nullam vestibulum semper neque at ullamcorper. Mauris ut enim quam. Praesent nec dui congue, efficitur tortor non, convallis nulla. Sed nec purus at tellus convallis vulputate. Fusce efficitur varius ligula nec commodo.',
            'url' => 'https://i0.wp.com/verdaddigital.com/wp-content/uploads/2020/07/minerva.jpg?fit=800%2C600&ssl=1',
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Bienvenidos',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est augue, pulvinar non mi vitae, tincidunt rhoncus neque. Etiam at elit in lectus finibus suscipit. Vestibulum porta odio vitae orci posuere, vitae fermentum nisi aliquet. Nullam vestibulum semper neque at ullamcorper. Mauris ut enim quam. Praesent nec dui congue, efficitur tortor non, convallis nulla. Sed nec purus at tellus convallis vulputate. Fusce efficitur varius ligula nec commodo.',
            'url' => 'https://i1.wp.com/www.laprensagrafica.com/__export/1527889327578/sites/prensagrafica/img/2018/06/01/ues.jpg_525981578.jpg?resize=790%2C440&ssl=1',
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Holi',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est augue, pulvinar non mi vitae, tincidunt rhoncus neque. Etiam at elit in lectus finibus suscipit. Vestibulum porta odio vitae orci posuere, vitae fermentum nisi aliquet. Nullam vestibulum semper neque at ullamcorper. Mauris ut enim quam. Praesent nec dui congue, efficitur tortor non, convallis nulla. Sed nec purus at tellus convallis vulputate. Fusce efficitur varius ligula nec commodo.',
            'url' => 'https://scontent.fsal3-1.fna.fbcdn.net/v/t1.0-9/36293282_2530076060351219_7040984731533443072_o.jpg?_nc_cat=103&_nc_sid=e3f864&_nc_ohc=YOUx6Oj5lHEAX-ueBQy&_nc_ht=scontent.fsal3-1.fna&oh=a5fc7e342baab887b01dd4d5e444f541&oe=5F700CF5',
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Hello',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est augue, pulvinar non mi vitae, tincidunt rhoncus neque. Etiam at elit in lectus finibus suscipit. Vestibulum porta odio vitae orci posuere, vitae fermentum nisi aliquet. Nullam vestibulum semper neque at ullamcorper. Mauris ut enim quam. Praesent nec dui congue, efficitur tortor non, convallis nulla. Sed nec purus at tellus convallis vulputate. Fusce efficitur varius ligula nec commodo.',
            'url' => 'https://scontent.fsal3-1.fna.fbcdn.net/v/t31.0-8/22218409_2112756798749816_7079863912961848684_o.jpg?_nc_cat=103&_nc_sid=e3f864&_nc_ohc=H4DW-_hhyu0AX9ISpa-&_nc_ht=scontent.fsal3-1.fna&oh=329920d3b39fd690dd6996fd82682a50&oe=5F70CED5',
        ]);
        DB::table('avisos')->insert([
            'titulo' => 'Bais',
            'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla est augue, pulvinar non mi vitae, tincidunt rhoncus neque. Etiam at elit in lectus finibus suscipit. Vestibulum porta odio vitae orci posuere, vitae fermentum nisi aliquet. Nullam vestibulum semper neque at ullamcorper. Mauris ut enim quam. Praesent nec dui congue, efficitur tortor non, convallis nulla. Sed nec purus at tellus convallis vulputate. Fusce efficitur varius ligula nec commodo.',
            'url' => 'https://scontent.fsal3-1.fna.fbcdn.net/v/t1.0-9/44842678_2782377175121105_6724840783104442368_o.jpg?_nc_cat=111&_nc_sid=e3f864&_nc_ohc=-QaFL-gusGAAX9548it&_nc_ht=scontent.fsal3-1.fna&oh=7a29991aef2b56acf8242f1fa34b628e&oe=5F70488B',
        ]);
    }
}
