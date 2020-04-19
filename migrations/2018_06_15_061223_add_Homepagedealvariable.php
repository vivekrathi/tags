<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
        $schema->table('tags', function (Blueprint $table) {
            $table->boolean('showonHomePage')->default(0);
            $table->integer('displayOrder')->default(1000);
            $table->string('bannerImagePath');
           
        });       
    },

    'down' => function (Builder $schema) {
        $schema->table('tags', function (Blueprint $table) {
            $table->dropColumn('showonHomePage');
            $table->dropColumn('displayOrder');
             $table->dropColumn('bannerImagePath');
        });
    }
];
