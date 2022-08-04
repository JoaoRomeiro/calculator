<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::select("create table hnfex(id serial not null,
            codigo varchar(100),
            updated_at timestamp default now(),
            created_at timestamp default now(),
            constraint pk_hnfex primary key(id));");
    }
};
